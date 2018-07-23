<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use Auth;

use PayPal\Api\Amount;
use Session;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;

use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

class PaymentController extends Controller
{

    private $apiContext;
    public function __construct(){
        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                config('paypal.client_id'),
                config('paypal.secret')
            )
        );
        $this->apiContext->setConfig(config('paypal.settings'));
    }

    public function create(Request $request)
    {
        $payment_id = Session::get('payment_id');  //lay session id tra ve
        Session::forget('payment_id');  //xoa session

        $execution = new PaymentExecution();
        $execution->setPayerID($request->input('PayerID'));
        $payment = Payment::get($payment_id, $this->apiContext);

        try{
            $result = $payment->execute($execution, $this->apiContext);

            $transaction = $payment->getTransactions()[0];
            $itemlist = $transaction->getItemList();
            $item = $itemlist->getItems()[0];
            $name = $item->getName();

            $idbill="";
            for($i=13; $i<strlen($name); $i++)
            {
                $idbill .= $name[$i];
                if($name[$i] == ' ') break;
            }

            //dd($result);
            if($result->getState() == 'approved'){
                $bill = Bill::find($idbill);
                $bill->tinhtrangdon = 3;
                $bill->save();

                return redirect()->route('lich-su')->with('thanhcongTT','Thanh toán thành công');
            }
            return "Thanh toán thất bại";
        }catch(Exception $e){
            return "Failed";
        }
    }

    public function store(Request $request)
    {

        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        $item1 = new Item();
        $item1->setName('ID don tour: '.$request->idbill." Ten tour: ".$request->tentour)
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice(($request->tongtien)/22500);
        
        $itemList = new ItemList();
        $itemList->setItems(array($item1));

        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal(($request->tongtien)/22500);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(route('payment.create'))
            ->setCancelUrl(route('payment.create'));

        $payment = new Payment();
        $payment->setIntent("authorize")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));

        try {
            $payment->create($this->apiContext);
        } catch (Exception $ex) {

            echo "Faild";
            exit(1);
        }

        $approvalUrl = $payment->getApprovalLink();

        Session::put('payment_id',$payment->id);
        return redirect()->to($approvalUrl);
    }
}
