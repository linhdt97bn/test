<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class BillNotification extends Notification
{
    use Queueable;
    protected $bill;
    protected $type_user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($bill, $type_user)
    {
        $this->bill = $bill;
        $this->type_user = $type_user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'broadcast'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'bill' => $this->bill,
            'type_user' => $this->type_user,
        ];
    }

    public function toBroadcast($notifiable)
    {
        return [
            'data' => [
                'bill' => $this->bill,
                'type_user' => $this->type_user,
            ]     
        ];
    }
}
