<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    public function run()
    {
        $this->call('UserTableSeeder');
        $this->call('DiaDiemTableSeeder');
        $this->call('TourTableSeeder');
    }    
}

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            array(
                'hoten' => 'HDV 1',
                'email' =>'hdv1@gmail.com', 
                'password' => bcrypt('123456'), 
                'gioitinh' => 1, 
                'anhdaidien' => 'nouser.jpg',
                'diachi' => 'HaNoi',
                'namsinh' => 1997,
                'sodienthoai' => '01683494193', 
                'quyen' => 2, 
                'trangthai' => 2
            ),
            array(
                'hoten' => 'HDV 2',
                'email' =>'hdv2@gmail.com', 
                'password' => bcrypt('123456'), 
                'gioitinh' => 1, 
                'anhdaidien' => 'nouser.jpg',
                'diachi' => 'HaNoi',
                'namsinh' => 1997,
                'sodienthoai' => '01683494193', 
                'quyen' => 2, 
                'trangthai' => 2
            ),
            array(
                'hoten' => 'HDV 3',
                'email' =>'hdv3@gmail.com', 
                'password' => bcrypt('123456'), 
                'gioitinh' => 0, 
                'anhdaidien' => 'nouser.jpg',
                'diachi' => 'BacNinh',
                'namsinh' => 1997,
                'sodienthoai' => '0918273645', 
                'quyen' => 2, 
                'trangthai' => 2
            ),
            array(
                'hoten' => 'HDV 4',
                'email' =>'hdv4@gmail.com', 
                'password' => bcrypt('123456'), 
                'gioitinh' => 1, 
                'anhdaidien' => 'nouser.jpg',
                'diachi' => 'HaNoi',
                'namsinh' => 1997,
                'sodienthoai' => '01683494193', 
                'quyen' => 2, 
                'trangthai' => 2
            ),
            array(
                'hoten' => 'HDV 5',
                'email' =>'hdv5@gmail.com', 
                'password' => bcrypt('123456'), 
                'gioitinh' => 0, 
                'anhdaidien' => 'nouser.jpg',
                'diachi' => 'BacNinh',
                'namsinh' => 1997,
                'sodienthoai' => '01683494193', 
                'quyen' => 2, 
                'trangthai' => 2
            ),
            array(
                'hoten' => 'HDV 6',
                'email' =>'hdv6@gmail.com', 
                'password' => bcrypt('123456'), 
                'gioitinh' => 0, 
                'anhdaidien' => 'nouser.jpg',
                'diachi' => 'BacNinh',
                'namsinh' => 2000,
                'sodienthoai' => '0918273645', 
                'quyen' => 2, 
                'trangthai' => 1
            ),
            array(
                'hoten' => 'HDV 7',
                'email' =>'hdv7@gmail.com', 
                'password' => bcrypt('123456'), 
                'gioitinh' => 1, 
                'anhdaidien' => 'nouser.jpg',
                'diachi' => 'Bac Ninh',
                'namsinh' => 1996,
                'sodienthoai' => '1234567891', 
                'quyen' => 2, 
                'trangthai' => 1
            ),
            array(
                'hoten' => 'Admin',
                'email' =>'admin@gmail.com', 
                'password' => bcrypt('123456'), 
                'gioitinh' => 1, 
                'anhdaidien' => 'nouser.jpg',
                'diachi' => 'Bac Ninh',
                'namsinh' => 1995,
                'sodienthoai' => '1234567891', 
                'quyen' => 3, 
                'trangthai' => 1
            ),
            array(
                'hoten' => 'User 1',
                'email' =>'email1@gmail.com', 
                'password' => bcrypt('123456'), 
                'gioitinh' => 0, 
                'anhdaidien' => 'nouser.jpg',
                'diachi' => 'BacNinh',
                'namsinh' => 1997,
                'sodienthoai' => '4444444444', 
                'quyen' => 1,
                'trangthai' => 1
            ),
        	array(
                'hoten' => 'User 2',
                'email' =>'email2@gmail.com', 
                'password' => bcrypt('123456'), 
                'gioitinh' => 1, 
                'anhdaidien' => 'nouser.jpg',
                'diachi' => 'BacNinh',
                'namsinh' => 1997,
                'sodienthoai' => '3333333333', 
                'quyen' => 1,
                'trangthai' => 1
            ),   
            array(
                'hoten' => 'User 3',
                'email' =>'email3@gmail.com', 
                'password' => bcrypt('123456'), 
                'gioitinh' => 0, 
                'anhdaidien' => 'nouser.jpg',
                'diachi' => 'HaNoi',
                'namsinh' => 1997,
                'sodienthoai' => '0918273645', 
                'quyen' => 1,
                'trangthai' => 1
            ),
            array(
                'hoten' => 'User 4',
                'email' =>'email4@gmail.com', 
                'password' => bcrypt('123456'), 
                'gioitinh' => 0, 
                'anhdaidien' => 'nouser.jpg',
                'diachi' => 'HaNoi',
                'namsinh' => 1997,
                'sodienthoai' => '0918273645', 
                'quyen' => 1,
                'trangthai' => 1
            ),
            array(
                'hoten' => 'User 5',
                'email' =>'email5@gmail.com', 
                'password' => bcrypt('123456'), 
                'gioitinh' => 1, 
                'anhdaidien' => 'nouser.jpg',
                'diachi' => 'BacNinh',
                'namsinh' => 2000,
                'sodienthoai' => '987654321', 
                'quyen' => 1,
                'trangthai' => 1
            ),            
            array(
                'hoten' => 'User 6',
                'email' =>'email6@gmail.com', 
                'password' => bcrypt('123456'), 
                'gioitinh' => 0, 
                'anhdaidien' => 'nouser.jpg',
                'diachi' => 'BacNinh',
                'namsinh' => 2000,
                'sodienthoai' => '123456789', 
                'quyen' => 1,
                'trangthai' => 1
            )
        ]);
    }
}

class DiadiemTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('place')->insert([
            array('tendiadiem' => 'Ha Noi'),
            array('tendiadiem' => 'TP HCM'),
            array('tendiadiem' => 'Hue'),
            array('tendiadiem' => 'Bac Ninh'),
            array('tendiadiem' => 'Da Nang'),
            array('tendiadiem' => 'Quang Ninh'),
            array('tendiadiem' => 'Sai Gon'),
            array('tendiadiem' => 'Thai Binh')
        ]);
    }
}

class TourTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('tour')->insert([
            array(
                'users_id'=>1,
                'tentour'=>'Tour Du Lịch: Cổ Thạch | Ninh Chữ | Tam Bình', 
                'place_id'=>1, 
                'sokhachtoida'=>5, 
                'songaydi'=>3, 
                'hinhanh'=> 'pX5l_bien-ninh-chu.jpg',
                'giatour' => 2468000, 
                'mota'=>'<div class="list-timeline" style="box-sizing: border-box; margin-top: 25px; overflow: hidden; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; height: auto;">
                    <div class="timeline" style="box-sizing: border-box; display: flex;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 1</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">Ngày 1: TP.HCM - CỔ THẠCH - NINH CHỮ</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/ninh-chu/hinh-noi-dung-tour/bien-ninh-chu-co-thach.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Xe và hướng dẫn viên của Du lịch Đất Việt đón quý khách tại điểm hẹn khởi hành đi Phan Rang. Đến với thành phố Biên Hòa, địa phận tỉnh Đồng Nai, Quý khách dừng chân dùng điểm tâm.Tiếp tục hành trình, xe đưa Quý khách dọc theo quốc lộ 1A HDV sẽ thuyết minh các địa danh ngang qua.</p>

                    <p style="text-align:justify"><strong>Trưa:</strong>&nbsp;Đến với Bình Thuận, Quý khách dừng chân dùng bữa trưa. Tiếp tục lộ trình đi Ninh Thuận.</p>

                    <p style="text-align:justify"><strong>Chiều:&nbsp;</strong>Quý khách ghé tham quan tại:</p>

                    <ul>
                        <li style="text-align:justify"><strong>KDL Cổ Thạch</strong>: Với cụm du lịch có&nbsp;<strong>Chùa Cổ Thạch</strong>&nbsp;- Chùa có hơn 100 năm tuổi, là một quần thể kiến trúc, am, điện, cốc liên hoàn với nhau trên khu đồi đá rộng hơn 4 ha rất linh thiêng với người bản địa.&nbsp;<strong>Bãi Đá Bảy Màu</strong>&nbsp;- Bãi biển toàn đá cuội nhẵn bóng, nhiều màu khi Thủy triều cùng những con sóng hàng nghìn năm đã mài nhẵn các viên đá cuội với vô số hình hài, hoa văn lạ lẫm rất bắt mắt.</li>
                    </ul>

                    <p style="text-align:justify"><strong>16h00:</strong>&nbsp;Sau đó tiếp tục lộ trình đi Ninh Chữ, Quý khách đến resort, nhận phòng và nghỉ ngơi.</p>

                    <p style="text-align:justify"><strong>Tối:</strong>&nbsp;Xe đưa Quý khách đến nhà hàng dùng cơm tối. Sau đó là chương trình tự do của quý khách.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 2</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">Ngày 2: NINH CHỮ - TAM BÌNH (BÌNH HƯNG - BÌNH LẬP - BÌNH TIÊN)</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/ninh-chu/hinh-noi-dung-tour/binh-hung-hai-dang-hon-chut-vinh-vinh-hy.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>&nbsp;Quý khách tắm biển dự do và dùng điểm tâm tại resort.</p>

                    <p style="text-align:justify"><strong>07h30:&nbsp;</strong>Khởi hành đi&nbsp;<strong>Vịnh Vĩnh Hy.</strong>&nbsp;Qua khỏi Vịnh, quý khách được men theo con đường biển khoảng 10km, quý khách có mặt tại:</p>

                    <ul>
                        <li style="text-align:justify">Đến&nbsp;<strong>Bình Tiên,&nbsp;</strong>quý khách tham quan những bãi tắm hết sức hoang sơ, mới bắt đầu khai thác vào du lịch tại khu vực này:&nbsp;<strong>Bãi Cà Tiên, Suối Nước Ngọt, …</strong></li>
                        <li style="text-align:justify">Đến<strong>&nbsp;Bình Lập</strong>, quý khách tham quan và khám phá những bãi biển hoang sơ của Bình Lập như:&nbsp;<strong>Bãi Ngang hoặc Bãi Lao</strong>&nbsp;là những bãi biển còn rất hoang sơ, đẹp đến mê ly. Đoàn tham quan&nbsp;<strong>Resort Ngọc Sương</strong>, nơi có phong cảnh tuyệt đẹp&nbsp; và hoang sơ, là phim trường với những cảnh quay cực đẹp của các bộ phim nổi tiếng: Mỹ nhân kế và&nbsp; những nụ hôn rực rỡ.</li>
                    </ul>

                    <p style="text-align:justify"><strong>10h30:&nbsp;</strong>Xe đưa quý khách trở lại với&nbsp;<strong>Bình Hưng</strong>. Quý khách lên đảo, khám phá các điểm tham quan và ngắm cảnh đẹp trên&nbsp;<strong>đảo Bình Hưng</strong>:</p>

                    <ul>
                        <li style="text-align:justify"><strong>Hải Đăng Hòn Chút:</strong>&nbsp;Men theo con đường nhỏ lên<strong>&nbsp;núi Hòn Bù,</strong>&nbsp;chẳng mấy chốc bạn sẽ có mặt bên ngọn hải đăng Hòn Chút, đó là “cây” đèn biển hiện diện trước vịnh Cam Ranh đã có trên 100 năm tuổi.&nbsp;</li>
                        <li style="text-align:justify"><strong>Bãi Đá Trứng:</strong>&nbsp;Ấn tượng đầu tiên sẽ đập vào mắt bạn khi đến bãi này là những hòn đá khổng lồ, tròn và to như trứng khủng long vậy.</li>
                        <li style="text-align:justify"><strong>Bãi Nước Ngọt:&nbsp;</strong>là 1 bãi biển với phía bên ngoài là biển và bên trong là một hang đá với nước ngọt rất ấn tượng.</li>
                    </ul>

                    <p style="text-align:justify"><strong>12h30:&nbsp;</strong>Dùng cơm trưa tại&nbsp;<strong>nhà bè Bình Hưng.</strong></p>

                    <p style="text-align:justify"><strong>14h30:</strong>&nbsp;Quý khách về lại đất liền, khởi hành về Ninh Chữ.</p>

                    <p style="text-align:justify"><strong>16h00:&nbsp;</strong>Xe tiếp tục đưa quý khách tham quan di tích nổi tiếng tại Ninh Thuận:</p>

                    <ul>
                        <li style="text-align:justify"><strong>Tháp Chàm Po K’long Giarai,</strong>&nbsp;một trong những ngôi tháp chàm được xây dựng rất lâu đời, Quý khách có dịp nghe thuyết minh về văn hóa, phong tục, lễ hội, cùng tham gia múa hát với người Chăm.</li>
                    </ul>

                    <p style="text-align:justify"><strong>18h00:</strong>&nbsp;Di chuyển đến nhà hàng dùng bữa tối, sau đó là chương trình nghỉ ngơi tự do của quý khách.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 3</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 0px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">Ngày 3 NINH CHỮ - PHAN THIẾT - TP.HCM</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/ninh-chu/hinh-noi-dung-tour/lang-gom-bau-truc-det-my-nghiep-vuon-nho.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Quý khách tắm biển và dùng điểm tâm sáng buffet. Đoàn làm thủ tục trả phòng, xe đưa đoàn tham quan những làng nghề lâu năm tỉnh Ninh Thuận.</p>

                    <ul>
                        <li style="text-align:justify"><strong>Vườn nho:&nbsp;</strong>Quý khách có cơ hội trực tiếp tìm hiểu thực tế về nghề nông trồng nho của người dân nơi đây. (tùy theo mùa vụ và giống nhà của từng nhà vườn)</li>
                        <li style="text-align:justify"><strong>Làng Gốm Bàu Trúc</strong>&nbsp;một trong những nơi còn làm gốm với phương pháp thủ công cổ nhất Đông Nam Á - &nbsp;những tác phẩm có độ tinh xảo và rắn chắc đã thu hút niều du khách đến tìm hiểu và mua những sản phẩm nơi đây.</li>
                        <li style="text-align:justify"><strong>Làng Dệt Mỹ Nghiệp</strong>&nbsp;cùng là một phương pháp thủ công các nghệ nhân nơi đây đã dệt nên những thước vãi rất đẹp với nhiều màu sắc khác nhau, cùng tìm hiểu về cuộc đời và giang nhà nhỏ của ca sỹ Chế Linh.</li>
                    </ul>

                    <p style="text-align:justify"><strong>Trưa:</strong>&nbsp;Quý khách dùng bữa trưa tại nhà hàng.</p>

                    <p style="text-align:justify"><strong>Chiều:</strong>&nbsp;Đoàn khởi hành về lại TP.HCM, trên đường về Quý khách dừng chân mua sắm đặc sản địa phương làm quà tặng cho người thân.</p>

                    <p style="text-align:justify"><strong>Tối:&nbsp;</strong>Về đến TP.HCM, chia tay và hẹn gặp lại Quý khách.</p>
                    </div>
                    </div>
                    </div>
                    </div>', 
                'trangthaitour'=>1
            ),
            array(
                'users_id'=>2, 
                'tentour'=>'Tour Du Lịch: Hà Nội | Hạ Long | Yên Tử', 
                'place_id'=>1, 
                'sokhachtoida'=>6, 
                'songaydi'=>3, 
                'hinhanh'=> 'IEwz_ha-noi-lang-bac.jpg',
                'giatour' => 3268000, 
                'mota'=>'<div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 1</div>

                    <div class="fa fa-plane vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">TRÀNG AN - BÁI ĐÍNH - HẠ LONG</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-bac/ninh-binh/hinh-noi-dung-tour/chua-bai-dinh-trang-an-lang-tho-dan.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:</strong>&nbsp;Xe và hướng dẫn viên đón Quý khách tại điểm hẹn khởi hành đi Ninh Bình theo QL1A qua Hà Nam.</p>

                    <p style="text-align:justify">Đến Ninh Bình, Quý khách cầu lễ phật tại&nbsp;<strong>Chùa Bái Đính</strong>&nbsp;<em>(bao gồm xe điện đưa đón lên chùa),&nbsp;</em>ngôi chùa lớn nhất Việt Nam với 500 pho tượng La Hán, tượng phật đồng lớn nhất Việt Nam cao 10m nặng 100 tấn. Quý khách ăn trưa tại nhà hàng, thưởng thức&nbsp;<strong>đặc sản dê núi đá, rượu ngọc dương.</strong></p>

                    <p style="text-align:justify"><strong>Chiều:&nbsp;</strong>Quý khách tham quan&nbsp;<strong>Quần thể Danh thắng Tràng An</strong>&nbsp;–&nbsp;<em>Di sản được UNESCO công nhận là di sản văn hóa và thiên nhiên Thế giới, giúp cho Việt Nam lần đầu lọt vào danh sách 30 di sản hỗn hợp Thế Giới</em>. Lên thuyền xuôi dòng Sào khê uốn lượn giữa cánh đồng lúa, quý khách đi đò thăm&nbsp;<strong>Hang Sáng, Hang Tối, Hang Nấu Rượu.</strong>&nbsp;Đặc biêt, tham quan&nbsp;<strong>làng thổ dân</strong>&nbsp;được phục dựng trong phim&nbsp;<strong>“Đảo đầu lâu” Kong: Skull Island.</strong></p>

                    <p style="text-align:justify">Quý khách rời Ninh Bình, theo Quốc Lộ 10 đi Hạ Long, trên đường đi Quý khách sẽ được cảm nhận, khám phá cuộc sống, phong cảnh đặc trưng của Đồng Bằng Bắc Bộ với cảnh làng quê thanh bình qua các tỉnh Nam Định, Thái Bình, Hải Phòng. Đến Hạ Long, nhận phòng, nghỉ ngơi, ăn tối.</p>

                    <p style="text-align:justify"><strong>Tối:&nbsp;</strong>Quý khách tự do dạo chơi&nbsp;<strong>Công viên Hoàng Gia</strong>&nbsp;dọc&nbsp;<strong>biển Bãi Chá</strong>y, đi mua sắm hàng hóa tại khu&nbsp;<strong>Chợ Đêm Hạ Long&nbsp;</strong>sầm uất với các sản phẩm đặc trưng Hạ Long, lên&nbsp;<strong>cầu Bãi Cháy&nbsp;</strong>– cây cầu dây văng dài nhất Việt Nam ngắm Hạ Long về đêm.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 2</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">HẠ LONG - KDL YÊN TỬ - HÀ NỘI</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-bac/ha-long/hinh-noi-dung-tour/ha-long-yen-tu.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:</strong>&nbsp;Đoàn dùng bữa sáng buffet tại khách san. Trả phòng. Quý khách tham quan Vịnh Hạ Long&nbsp; - Di sản thiên nhiên thế giới được UNESSCO công nhận năm 1994, chiêm ngưỡng vẻ đẹp huyền bí của hàng ngàn đảo đá và các hang động kì thú: Động Thiên Cung…ngắm cảnh&nbsp;<strong>làng chài, hòn Ấm, hòn Rùa, hòn Đỉnh Hương, hòn Chó Đá, hòn Gà Chọi…</strong></p>

                    <p style="text-align:justify">Quý khách ăn trưa trên tàu, ngắm cảnh vịnh đẹp nên thơ và hưởng gió biển.</p>

                    <p style="text-align:justify"><strong>Chiều</strong>: Đoàn quay lại bến tàu. Khởi hành tham quan khu danh thắng đất Phật Yên Tử - đất tổ của Thiền Phái Trúc Lâm. Quý khách đi&nbsp;<strong>cáp treo, tham quan Vườn Tháp Tổ, Chùa Hoa Yên</strong>&nbsp;<em>(Chi phí cáp treo tự túc).</em></p>

                    <p style="text-align:justify">Quý khách lên xe về Hà Nội, ghé Hải Dương tham quan cửa hàng bánh Đậu Xanh, bánh cốm và các mặt hàng đặc sản khác của Miền Bắc.</p>

                    <p style="text-align:justify"><strong>Tối:&nbsp;</strong>Tới Hà Nội, ăn tối tại nhà hàng và nhận phòng khách sạn, nghỉ đêm tại Hà Nội.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 3</div>

                    <div class="fa fa-plane vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 0px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">CITY HÀ NỘI - TP. HCM</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-bac/ha-noi/hinh-noi-dung-tour/lang-bac-cho-dong-xuan-chua-mot-cot.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Quý khách dùng buffet sáng tại khách sạn. Trả phòng. Xe đưa quý khách vào viếng<strong>&nbsp;Lăng Chủ Tịch Hồ Chí Minh, thăm Phủ Chủ Tịch, Bảo tàng Hồ Chí Minh, chùa Một Cột, nhà sàn, ao cá Bác Hồ, mua sắm tại Chợ Đồng Xuân&nbsp;</strong>– Khu chợ bán buôn lớn nhất Hà Nội.</p>

                    <p style="text-align:justify"><strong>11h30</strong>: Qúy khách ăn trưa tại nhà hàng địa phương.</p>

                    <p style="text-align:justify"><strong>Chiều:</strong>&nbsp;Xe đưa quý khách ra sân bay.</p>
                    </div>
                    </div>
                    </div>', 
                'trangthaitour'=>1
            ),
            array(
                'users_id'=>3, 
                'tentour'=>'Tour Du Lịch: Phan Thiết | Đà Lạt', 
                'place_id'=>1, 
                'sokhachtoida'=>10, 
                'songaydi'=>4, 
                'hinhanh'=> 'IjLN_lang-biang-1.jpg',
                'giatour' => 2768000, 
                'mota'=>'<div class="list-timeline" style="box-sizing: border-box; margin-top: 25px; overflow: hidden; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; height: auto;">
                    <div class="timeline" style="box-sizing: border-box; display: flex;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 1</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">SÀI GÒN - PHAN THIẾT - BÀU SEN</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/mui-ne/hinh-noi-dung-tour/dong-cuu-lang-chai-lau-dai-tuou-vang.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Xe và hướng dẫn viên của Du lịch Đất Việt đón quý khách tại điểm hẹn sắp xếp hành lý, vị trí ghế ngồi và khởi hành đi Phan Thiết .</p>

                    <p style="text-align:justify"><strong>07h00:&nbsp;</strong>Quý khách dừng chân dùng điểm tâm Nhà Hàng. Tiếp chương trình xe, HDV sẽ thuyết minh các địa danh ngang qua và cùng Quý khách tìm hiểu đôi nét về văn hóa và phong tục tập quán của từng vùng miền, địa phương đất nước Việt Nam.</p>

                    <p style="text-align:justify"><strong>08h30:&nbsp;</strong>Tham quan tại:</p>

                    <ul>
                        <li style="text-align:justify"><strong>Trại Cừu Suối Nghệ:</strong>&nbsp;bạn sẽ được vuốt ve, được ôm hôn và chụp ảnh thỏa thích với những chú cừu rất dễ thương, tìm hiểu về quy trình chăm sóc cừu, quá trình sinh sản cũng như quy trình lấy lông cừu làm quần áo, rất thú vị.</li>
                    </ul>

                    <p style="text-align:justify">Tiếp tục lộ trình theo con đường ven biển tuyệt đẹp băng qua khu vực&nbsp;<strong>Long Hải, Hồ Tràm, Hồ Cốc, Bình Châu,…sang khu vực Lagi.</strong></p>

                    <p style="text-align:justify"><strong>12h00:</strong>&nbsp;Đoàn dùng bữa trưa tại nhà hàng.</p>

                    <p style="text-align:justify"><strong>13h30:</strong>&nbsp;Xe đưa Quý khách tiếp tục đến với Mũi Né. Đến resort nhận phòng nghỉ ngơi. sủ dụng các dịch vụ và vui chơi giải trí trong resort: Hồ bơi, bãi biển, phòng gyms, dù lượn, cano lướt song,…<em>(tự túc).</em></p>

                    <p style="text-align:justify"><strong>Chiều:</strong>&nbsp;Quý khách bắt đầu tham quan và sử dụng dịch vụ tại Mũi Né.</p>

                    <ul>
                        <li style="text-align:justify"><strong>Lâu Đài Rượu Vang</strong>: với độ âm khoảng 16 độ tạo ra một không khí rất tuyệt vời ngay giữ vùng nắng nóng Mũi Né, Quý khách được nghe giới thiệu về quy trình sản xuất rượu vang và cùng thưởng thức rượu vang miễn phí, tiếp theo sự hướng dẫn Quý khách có thể tham quan và lựa chọn mua sắm sản phẩm rượu vang làm quà tặng cho người thân.</li>
                    </ul>

                    <p style="text-align:justify"><strong>18h30:&nbsp;</strong>Xe đón quý khách đến nhà hàng dùng bữa tối.</p>

                    <p style="text-align:justify"><strong>19h30:</strong>&nbsp;Tự do nghỉ ngơi, khám phá cảnh đẹp mũi né về đêm, hoặc quý khách có thể đăng ký tham gia chương trình xem biểu diễn&nbsp;<strong>Fishsermen – Huyền Thoại Làng Chài&nbsp;</strong>đây là show diễn đầu tiên và duy nhất về làng chài tại Việt Nam được đầu tư rất công phu và hoành tráng.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 2</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">PHAN THIẾT - ĐÀ LẠT</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/mui-ne/hinh-noi-dung-tour/lang-chai-doi-cat-cong-vien-tuong-cat.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p>&nbsp;</p>

                    <p style="text-align:justify">Sáng: Quý khách dùng bữa sáng tại nhà hang của resort.</p>

                    <p style="text-align:justify"><strong>08h00:</strong>&nbsp;Quý khách nghỉ ngơi tự do tại resort, sủ dụng các dịch vụ và vui chơi giải trí trong Resort: Hồ bơi, bãi biển, phòng gyms, dù lượn, cano lướt song,…<em>(tự túc).</em></p>

                    <p style="text-align:justify">Hoặc xe đón quý khách tham quan:</p>

                    <ul>
                        <li style="text-align:justify"><strong>Suối Tre – “Bồng Lai Tiên Cảnh Của Mũi Né”</strong>&nbsp;nơi đây với một quang cảnh hùng vỹ, với Nhũ Cát, Suối nước một màu đỏ đặc trưng, những “Vách Núi Cát” hai màu đỏ - trắng rực rỡ.</li>
                        <li style="text-align:justify"><strong>Showroom ngọc trai lớn nhất Phan thiết,</strong>&nbsp;mua sắm các sản phẩm trang sức được chế tác tuyệt đẹp tại nơi đây.</li>
                        <li style="text-align:justify"><strong>Công viên tượng cát Forgotten Land (tự túc: 100.000 vnđ)</strong>: Với chủ đề chung “Cổ tích và thần thoại của Việt Nam và Thế Giới”, đến Forgotten Land, quý khách sẽ được chiêm ngưỡng các tác phẩm mô các nhân vât: Sơn Tinh-Thủy Tinh, Cóc kiện Trời, Thạch Sùng, nàng Lọ Lem, Chú mèo đi hia, Thỏ và Rùa, Cáo và Quạ, chùa Thiên Mụ, tháp Pô Nagar.</li>
                    </ul>

                    <p style="text-align:justify"><strong>10h30:&nbsp;</strong>Quý khách làm thủ tục trả phòng khách sạn.</p>

                    <p style="text-align:justify"><strong>11h00:</strong>&nbsp;Quý khách đến nhà hang, dùng bữa trưa.</p>

                    <p style="text-align:justify"><strong>12h00:</strong>&nbsp;Quý khách chia tay với Mũi Né, theo con đường&nbsp;<strong>đèo ngoạn mục</strong>, quý khách có thể ngắm toàn cảnh bình nguyên Bình Thuận từ trên cao.</p>

                    <p style="text-align:justify"><strong>18h30:</strong>&nbsp;Đến Đà Lạt, di chuyển đến nhà hàng dùng bữa tối.</p>

                    <p style="text-align:justify"><strong>19h00:&nbsp;</strong>Nhận phòng khách sạn và nghỉ ngơi. Sau đó, Quý khách tự do dạo chợ đêm và trải nghiệm các dịch vụ vui chơi ở Đà Lạt.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 3</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">ĐÀ LẠT- CITY TOUR</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/tay-nguyen/da-lat/hinh-noi-dung-tour/lang-hoa-van-thanh-ngoi-nha-tram-mai-thien-vien-truc-lam.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p>&nbsp;</p>

                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Quý khách dùng điểm tâm Buffet.</p>

                    <p style="text-align:justify"><strong>08h00:&nbsp;</strong>Bắt đầu tham quan các điểm nổi bật tại&nbsp;<strong>“Thành Phố Ngàn Hoa”:</strong></p>

                    <ul>
                        <li style="text-align:justify"><strong>Làng Hoa Vạn Thành</strong>: Tọa lạc phía Tây thành phố Đà Lạt là nơi cung cấp hoa chủ yếu cho thành phố Đà Lạt, đặc biệt là hoa Hồng và đón nhận một số loại hoa mới như hoa Hồng Nhung, hoa Ly, salem, cẩm chướng, đồng tiền…làm đa dạng và phong phú các loại hoa được trồng và canh tác tại đây. Đặc biệt đến đây Qúy khách sẽ được tận mắt chiêm ngưỡng vườn rau thủy canh và tận tay hái dâu tại vườn.</li>
                        <li style="text-align:justify"><strong>Thiền Viện Trúc Lâm</strong>&nbsp;ngôi thiền viện lớn nhất khu vực tỉnh Lâm Đồng, Quý khách có thể ngắm nhìn Hồ Tuyền Lâm với vẻ đẹp thơ mộng đủ sức thu hút mọi ánh mắt của du khách.&nbsp;<strong>Cùng viếng, thắp hương tại khu vực chánh điện và chụp ảnh khuôn viên bên ngoài.</strong></li>
                    </ul>

                    <p style="text-align:justify"><strong>Trưa:</strong>&nbsp;Qúy khách dùng bữa trưa bằng tiệc Buffet Rau tại nhà hàng Leguda với hầu hết các loại rau sạch tại Đà Lạt. Sau đó về lại khách sạn nghỉ ngơi tự do.</p>

                    <p style="text-align:justify"><strong>14h30:&nbsp;</strong>Xe đón quý khách tại khách sạn, khởi hành tham quan:</p>

                    <ul>
                        <li style="text-align:justify"><strong>Ngôi Nhà Trăm Mái</strong>: Với kiến trúc độc đáo sở dĩ tòa nhà được thiết kế như vậy là để kết hợp năng lượng kim tự tháp thời đại mới với lá phong tượng trưng cho tình yêu, hạnh phúc, sức khỏe và sự may mắn, tòa nhà với 132 mái cũng là biểu tượng của 132 chiếc lá phong đặt trên nền mô phỏng của một kim tự tháp.</li>
                    </ul>

                    <ul>
                        <li style="text-align:justify"><strong>Nhà Thờ Domaine De Marie</strong>&nbsp;được xây dựng trên&nbsp;<strong>đồi Mai Anh</strong>&nbsp;xung quanh là hàng cây mimosa màu vàng ánh đã tô điểm thêm vẻ đẹp cho nhà thờ. Cùng tìm hiểu, tham quan và chụp hình thánh đường.</li>
                        <li style="text-align:justify"><strong>Đỉnh Lang Biang:</strong>&nbsp;Quý khách chinh phục đỉnh núi cao nhất TP Đà Lạt với độ cao hơn 2000m. Cùng nghe kể về câu chuyện thiên tình sử&nbsp;<strong>Chàng Lang – Nàng Biang</strong>&nbsp;nơi núi rừng hoang vu.</li>
                    </ul>

                    <p style="text-align:justify"><strong>Tối:</strong>&nbsp;Quý khách dùng bữa tối tại nhà hàng dưới chân núi Mẹ. Tiếp tục tham gia giao lưu với người dân núi rừng.</p>

                    <ul>
                        <li style="text-align:justify"><strong>Giao lưu văn hóa cồng chiêng Tây Nguyên</strong>&nbsp;với ánh lửa bập bùng hòa theo lời ca điệu múa của các Sơn Nam, Sơn Nữ. Quý khách có dịp tìm hiểu về phong tục ăn tết của người dân tộc K’ho cùng uống rượu cần, ăn thịt nướng.</li>
                    </ul>

                    <p style="text-align:justify">Sau đó, về lại khách sạn nghỉ ngơi, tự do dạo phố đêm Đà Lạt.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 4</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 0px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">ĐÀ LẠT - SÀI GÒN - TIỄN KHÁCH</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/tay-nguyen/da-lat/hinh-noi-dung-tour/thac-voi-cafe-me-linh-dac-san-da-lat.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p>&nbsp;</p>

                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Quý khách làm thủ tục trả phòng, dùng bữa sáng tại nhà hàng.</p>

                    <p style="text-align:justify"><strong>08h00:&nbsp;</strong>Quý khách chia tay với Đà Lạt. Khởi hành về lại Tp. HCM. Sau đó theo cung đường&nbsp;<strong>Đà Lạt – Tà Nung – Bảo Lộc</strong>&nbsp;tham quan các thắng cảnh nổi bật:</p>

                    <ul>
                        <li style="text-align:justify"><strong>Làng Café Mê Linh:</strong>&nbsp;Cái hay nhất ở đây là view ấy, yên bình và xa bạt ngàn. Buổi chiều kéo mây, nắng lọt qua mây như tấm rèm. Buổi sáng thì trời xanh trong vắt. Ngồi giữa mây trời cao nguyên gió lộng thoang thoảng hương cafe cũng.</li>
                        <li style="text-align:justify"><strong>Thác Voi Chùa Linh Ẩn:</strong>&nbsp;Thác Voi hay còn được gọi là&nbsp;<strong>thác Liêng Rơwoa</strong>&nbsp;một trong những thác nước đẹp của núi rừng Tây Nguyên hùng vĩ với chiều cao hơn 30m, rộng chừng 15m cách không xa Chùa Linh Ẩn. Nằm ở chốn&nbsp;<em><strong>“thâm sơn cùng cốc”</strong></em>&nbsp;nhưng kiến trúc&nbsp;<strong>Linh Ẩn Tự&nbsp;</strong>vẫn toát lên vẻ hiện đại và thân thiện với thiên nhiên.</li>
                    </ul>

                    <p style="text-align:justify"><strong>Trưa:</strong>&nbsp;Quý khách dừng chân dùng bữa trưa tại Bảo Lộc (trễ).</p>

                    <p style="text-align:justify"><strong>Chiều</strong>: Đoàn tiếp tục khởi hành về lại TP.HCM, trên đường về Quý khách dừng chân mua sắm đặc sản địa phương làm quà tặng cho người thân.</p>

                    <p style="text-align:justify"><strong>20h00:</strong>&nbsp;Về đến TP.HCM, đưa quý khách về điểm đón ban đầu, chia tay và hẹn gặp lại Quý khách.</p>

                    <div>&nbsp;</div>

                    <p>&nbsp;</p>
                    </div>
                    </div>
                    </div>
                    </div>', 
                'trangthaitour'=>1
            ),
            array(
                'users_id'=>4, 
                'tentour'=>'Tour Du Lịch: Khám Phá Đảo Tôm Hùm Bình Ba', 
                'place_id'=>2, 
                'sokhachtoida'=>4, 
                'songaydi'=>2, 
                'hinhanh'=> '31rg_binh-ba.jpg', 
                'giatour' => 1786000, 
                'mota'=>'<div class="list-timeline" style="box-sizing: border-box; margin-top: 25px; overflow: hidden; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; height: auto;">
                    <div class="timeline" style="box-sizing: border-box; display: flex;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px; text-transform: capitalize;">Đêm 1</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">ĐÊM 1: TP.HCM - BÌNH BA</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;">
                    <p style="text-align:justify"><strong>20h00:</strong>&nbsp;Xe và hướng dẫn viên của&nbsp;<strong>Du lịch Đất Việt</strong>&nbsp;đón quý khách tại điểm hẹn khởi hành đi&nbsp;<strong>Cam Ranh</strong>. Quý khách nghỉ ngơi tự do trên xe.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 1</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">ĐẢO BÌNH BA - TẮM BIỂN - CÂU ĐÊM</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/binh-ba/hinh-noi-dung-tour/dao-binh-ba.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Đoàn dùng điểm tâm, xe đưa Quý khách vào trung tâm TP Cam Ranh, đến với&nbsp;<strong>cảng Cam Ranh&nbsp;</strong>làm thủ tục lên tàu đi&nbsp;<strong>Bình Ba</strong>.</p>

                    <ul>
                        <li style="text-align:justify">Tắm biển tàu đến&nbsp;<strong>bãi Nhà Cũ hoặc bãi Bồ Đề,</strong>&nbsp;Quý khách tắm biển tự do với làng nước mát lạnh và trong xanh. Khám phá đáy biển và lặn ngắm những rặng san hô lung linh huyền ảo.</li>
                    </ul>

                    <p style="text-align:justify"><strong>Trưa:</strong>&nbsp;Quý khách dùng bữa trưa tại bè nổi. Quý khách nhận phòng và nghỉ ngơi.</p>

                    <p style="text-align:justify"><strong>Chiều:</strong>&nbsp;Quý khách tham quan Bình Ba .</p>

                    <ul>
                        <li style="text-align:justify"><strong>Chụp ảnh Hòn Rùa, viếng chùa Địa Tạng, Lăng Ông Nam Hải, Đình Thần Bình Ba.</strong></li>
                    </ul>

                    <p style="text-align:justify"><strong>Tối:</strong>&nbsp;Quý khách dùng bữa tối hải sản. Tự do khám phá đảo.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 2</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 0px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">BÌNH BA - CHÙA ỐC - TP.HCM</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/binh-ba/hinh-noi-dung-tour/dao-binh-ba-chua-oc.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Quý khách dùng điểm tâm, tham quan:</p>

                    <ul>
                        <li style="text-align:justify"><strong>Bãi Nồm:</strong>&nbsp;Quý khách tự do tắm biển với làng nước xanh biết, thưởng thức hải sản tươi sống đặc biệt&nbsp;<strong>tôm hùm Bình Ba</strong>&nbsp;<em>(Chi phí tự túc)</em>. Làm thủ tục trả phòng về lại đất liền. Quý khách lên tàu. Ngắm biển và thoải mái chụp hình lưu giữ cảnh đẹp của biển Cam Ranh.</li>
                    </ul>

                    <p style="text-align:justify">Xe đón đoàn tham quan:</p>

                    <ul>
                        <li style="text-align:justify"><strong>Chùa Ốc (chùa Từ Vân)</strong>: Được xây dựng chủ yếu từ vỏ ốc và san hô. Nhờ nét kiến trúc độc đáo, chùa đã trở thành điểm tham quan hấp dẫn.</li>
                    </ul>

                    <p style="text-align:justify">Đoàn tiếp tục khởi hành về lại TP.HCM. Trên đường về, Quý khách dừng chân mua sắm đặc sản địa phương làm quà tặng cho người thân.</p>

                    <p style="text-align:justify"><strong>Trưa:</strong>&nbsp;Quý khách dừng chân dùng bữa trưa tại Cà Ná.</p>

                    <p style="text-align:justify"><strong>Chiều:&nbsp;</strong>Về đến TP.HCM, chia tay và hẹn gặp lại Quý khách.</p>

                    <p>&nbsp;</p>
                    </div>
                    </div>
                    </div>
                    </div>', 
                'trangthaitour'=>1
            ),
            array(
                'users_id'=>1, 
                'tentour'=>'Tour Du Lịch: Lagi | Hàm Thuận Nam | Mũi Né', 
                'place_id'=>2, 'sokhachtoida'=>4, 'songaydi'=>2, 
                'hinhanh'=> 
                'XQP0_lau-dai-ruou-vang.jpg',
                'giatour' => 1786000, 
                'mota'=>'<div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 1</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">TP.HCM - LAGI - HÀM THUẬN NAM - MŨI NÉ</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/mui-ne/hinh-noi-dung-tour/doi-cuu-lau-dai-ruou-vang-vuon-thanh-long.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:</strong>&nbsp;Xe và hướng dẫn viên của Du lịch Đất Việt đón quý khách tại điểm hẹn sắp xếp hành lý, vị trí ghế ngồi và khởi hành đi Phan Thiết .</p>

                    <p style="text-align:justify"><strong>07h00:</strong>&nbsp;Quý khách dừng chân dùng điểm tâm nhà hàng.Tiếp chương trình xe, HDV sẽ thuyết minh các địa danh ngang qua và cùng Quý khách tìm hiểu đôi nét về văn hóa và phong tục tập quán của từng vùng miền, địa phương đất nước Việt Nam.</p>

                    <p style="text-align:justify"><strong>08h30:&nbsp;</strong>Tham quan tại:</p>

                    <ul>
                        <li style="text-align:justify"><strong>Trại Cừu Suối Nghệ:</strong>&nbsp;bạn sẽ được vuốt ve, được ôm hôn và chụp ảnh thỏa thích với những chú cừu rất dễ thương, tìm hiểu về quy trình chăm sóc cừu, quá trình sinh sản cũng như quy trình lấy lông cừu làm quần áo, rất thú vị.</li>
                    </ul>

                    <p style="text-align:justify">Tiếp tục lộ trình theo con đường ven biển tuyệt đẹp băng qua khu vực&nbsp;<strong>Long Hải, Hồ Tràm, Hồ Cốc, Bình Châu,…</strong>sang khu vực Lagi, Hàm thuận nam.</p>

                    <p style="text-align:justify"><strong>10h00</strong>: Xe đón quý khách tham quan tại Lagi với đặc sản nổi tiếng:</p>

                    <ul>
                        <li style="text-align:justify"><strong>Vườn thanh long</strong>: Tìm hiểu về nghề trồng cây thanh long và hái trái cây chín (nếu đúng thời điểm) mua thanh long tươi ngay tại vườn.</li>
                    </ul>

                    <p style="text-align:justify"><strong>12h30:</strong>&nbsp;Đoàn dùng bữa trưa tại nhà hàng.</p>

                    <p style="text-align:justify"><strong>13h30:</strong>&nbsp;Xe đưa Quý khách tiếp tục đến với mũi né. Qua khu vực Tiến Thành - Hàm Thuận Nam, quý khách được ngoạn cảnh:</p>

                    <ul>
                        <li style="text-align:justify"><strong>Hải Đăng Kê Gà:</strong>&nbsp;Là một trong những ngọn hải đăng cổ nhất Việt Nam hiện nay – xây dựng 2/1897 do kiến trúc sư người pháp thiết kế. ở đây vùa là “mắt thần biển đông” giúp tau thuyền qua lại được an toàn, vùa là một thắng cảnh hoang sơ tuyệt đẹp cho những khoảnh khắc với thước hình ấn tượng. quý khách có thể lên canoe vượt biển sang bên đảo kê gà, mục&nbsp;sở thị và chụp hình tại hải đăng kê gà&nbsp;<em>(tự túc các phí).</em></li>
                    </ul>

                    <p style="text-align:justify"><strong>Chiều:</strong>&nbsp;Đến resort nhận phòng nghỉ ngơi. tự do vui chơi, tắm biển và trải nghiệm các dịch vụ trong Resort/khách sạn: Bãi Biển, hồ bơi, thể thao trên biển, phòng thể thao, sân tenis,…<em>(tự túc theo quy định riêng).</em></p>

                    <p style="text-align:justify"><strong>Buổi tối:</strong>&nbsp;Đoàn đến nhà hàng dùng bữa tối với thực đơn hải sản địa phương. Sau đó, Quý khách nghỉ ngơi, tự do dạo biển Mũi Né về đêm và nghỉ đêm Mũi Né.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 2</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 0px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">PHAN THIẾT - TP.HCM</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/mui-ne/hinh-noi-dung-tour/doi-cat-mui-ne-hai-dang-lang-chai.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Quý khách dậy sớm, khởi hành đến&nbsp;<strong>Đồi Cát Bay</strong>, tại đây đoàn có thể tham gia trò chơi cảm giác mạnh trên đồi cát bằng cách đi máng trượt, và thưởng thức&nbsp;<strong>Dừa Ba Nhát</strong>&nbsp;- đặc sản địa phương và ngắm nhìn cảnh Làng Chài nhộn nhịp tấp nập khi ghe, thuyền đánh bắt cá cập bờ.</p>

                    <p style="text-align:justify"><strong>07h00:</strong>&nbsp;Về lại resort, Quý khách dùng điểm tâm sáng buffet, nghỉ ngơi tắm biển tự do. Quý khách&nbsp;tham quan:</p>

                    <ul>
                        <li style="text-align:justify"><strong>Lâu Đài Rượu Vang:</strong>&nbsp;với độ âm khoảng 16 độ tạo ra một không khí rất tuyệt vời ngay giữ vùng nắng nóng Mũi Né, Quý khách được nghe giới thiệu về quy trình sản xuất rượu vang và cùng thưởng thức rượu vang miễn phí, tiếp theo sự hướng dẫn Quý khách có thể tham quan và lựa chọn mua sắm sản phẩm rượu vang làm quà tặng cho người thân.</li>
                    </ul>

                    <p style="text-align:justify">Hoặc đăng ký tự túc phí khám phá thêm điểm tham quan mới tại mũi né:</p>

                    <ul>
                        <li style="text-align:justify"><strong>Công Viên Tượng Cát Forgotten Land (phí thêm: 100.000đ)</strong>: Với chủ đề chung “Cổ tích và thần thoại của Việt Nam và Thế Giới”, đến Forgotten Land, quý khách sẽ được chiêm ngưỡng các tác phẩm mô các nhân vât: Sơn Tinh-Thủy Tinh, Cóc kiện Trời, Thạch Sùng, nàng Lọ Lem, Chú mèo đi hia, Thỏ và Rùa, Cáo và Quạ, chùa Thiên Mụ, tháp Pô Nagar.</li>
                        <li style="text-align:justify"><strong>Làng Chài Xưa</strong>&nbsp;<em>(phí thêm: 100.000đ)</em>: Làng chài xưa rất được trang trí đẹp, hay và rất độc đáo, mang ý nghĩa lịch sử làng chài mũi né quê ta. tìm hiểu văn hóa lịch sử Làng Chài Xưa Phan Thiết Mũi Né 300 năm, và được “SỐNG ẢO” với nhửng khung cảnh hết sức mới lạ - độc đáo kết hợp giữa cổ xưa và tân thời.</li>
                    </ul>

                    <p style="text-align:justify"><strong>Trưa:&nbsp;</strong>Quý khách làm thủ tục trả phòng, khởi hành dùng bữa trưa tại nhà hàng. Đoàn khởi hành về lại TP.HCM, trên đường về Quý khách dừng chân mua sắm đặc sản địa phương làm quà tặng cho người thân.</p>

                    <p style="text-align:justify"><strong>Chiều:</strong>&nbsp;Về đến TP.HCM, chia tay và hẹn gặp lại Quý khách.</p>
                    </div>
                    </div>
                    </div>', 
                'trangthaitour'=>1
            ),
            array(
                'users_id'=>2, 
                'tentour'=>'Tour Du Lịch: Hà Nội | Sapa | Fansipan', 
                'place_id'=>2, 
                'sokhachtoida'=>5, 
                'songaydi'=>4, 
                'hinhanh'=> 
                'GfKW_chua-Tran-Quoc-Ha-noi.jpg', 
                'giatour' => 3786000, 
                'mota'=>'<div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 1</div>

                    <div class="fa fa-plane vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">TP.HCM - HÀ NỘI - CITY</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-bac/ha-noi/hinh-noi-dung-tour/chua-tran-quoc-van-mieu-QTG-cai-the-huc.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:</strong>&nbsp;Xe và HDV đón Quý khách tại sân bay Nội Bài. Trên đường về thủ đô, HDV sẽ giới thiệu về cuộc sống, con người nơi đây. Xe đưa quý khách ăn trưa tại nhà hàng. Về khách sạn, nhận phòng, nghỉ ngơi.</p>

                    <p style="text-align:justify"><strong>Chiều:</strong>&nbsp;Quý khách thăm&nbsp;<strong>chùa Trấn Quốc</strong>&nbsp;–&nbsp;<strong>ngôi chùa Trấn Bắc cổ kính nhất Việt Nam&nbsp;</strong>với 1.500 năm tuổi nằm trên bán đảo cồn Quy linh thiêng, với truyền thuyết và huyền thoại về Hồ Tây, hồ Trúc Bạch.</p>

                    <p style="text-align:justify">Tiếp tục thăm quan&nbsp;<strong>Đền Ngọc Sơn, Cầu Thê Húc, hồ Hoàn Kiếm</strong>&nbsp;- Trực tiếp chứng kiến cụ Rùa dài 2,1m, ngang 1,2m được trưng bày tại đền Ngọc Sơn.</p>

                    <p style="text-align:justify">Quý khách ghé thăm&nbsp;<strong>Văn Miếu Quốc Tử Giám</strong>&nbsp;– nơi đựoc xem như Trường Đại học đầu tiên của Việt Nam với 82 tấm bia Tiến sỹ còn lưu danh sử sách.</p>

                    <p style="text-align:justify"><strong>Tối:&nbsp;</strong>Đoàn tự do tham quan<strong>&nbsp;phố cổ Hà Nội, dạo Hồ Gươm, mua sắm tại Chợ đêm Hà Nội&nbsp;</strong>sầm uất... Nghỉ đêm tại khách sạn ở Hà Nội.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 2</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">HÀ NỘI - LÀO CAI - SAPA - HÀM RỒNG/ FANSIPAN</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-bac/sapa/hinh-noi-dung-tour/fansipan-ham-rong-sapa.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:</strong>&nbsp;Dùng điểm tâm sáng buffet, trả phòng. Quý khách lên xe khởi hành đi Lào Cai, theo đường cao tốc Nội Bài – Lào Cai dài 245Km với chưa đầy 4h đồng hồ. Quý khách có cơ hội ngắm phong cảnh tuyệt đẹp trên cung đường Tây Bắc, dừng chân nghỉ ngơi, chụp ảnh khám phá phong cảnh. Ăn trưa tại Sapa. Đoàn nhận phòng khách sạn.</p>

                    <p style="text-align:justify"><strong>Chiều:&nbsp;</strong>Qúy khách chon 1 trong 2 chương trình đi tham quan:</p>

                    <p style="text-align:justify"><u><strong>Chương trình 1:</strong></u>&nbsp;<strong>Tham quan KDL Hàm Rồng:</strong></p>

                    <p style="text-align:justify">Quý khách tham quan Khu Du lịch núi Hàm Rồng, tháp truyền hình, Vườn Lê, vườn Táo Mèo, Cổng trời, vườn hoa Châu Âu, Chinh phục đỉnh Sân Mây cao 1800m so với mực nước biển, xem Show Ca múa nhạc đặc sắc của vùng núi Tây Bắc do các chàng trai, cô gái người dân tộc H’Mông, Dao, Tày, Hà Nhì…biểu diễn.</p>

                    <p style="text-align:justify"><u><strong>Chương trình 2:</strong></u>&nbsp;<strong>Chinh phục đỉnh Fansipan (chưa bao gồm giá vé cáp treo 700.000 vnđ/khách).</strong></p>

                    <p style="text-align:justify">Quý khách khởi hành đi tham quan đỉnh Fansipan, lên cáp treo làm thủ tục mua vé, giúp quý khách tham gia hành trình&nbsp;<strong>chinh phục nóc nhà của Đông Dương</strong>. Qúy khách có cơ hội thăm quan&nbsp;<strong>thung lũng Mường Hoa, rừng Hoàng liên từ trên cao và đỉnh Fansipan</strong>, nơi có thảm thực vật phong phú và độc đáo&nbsp;<em>(chi phí cáp treo tự túc).</em></p>

                    <p style="text-align:justify"><strong>Tối:</strong>&nbsp;Đoàn ăn tối tại nhà hàng. Quý khách dạo chơi Sapa về đêm, tự do thưởng thức các món ăn đặc trưng của người dân tộc thiểu số vùng Tây Bắc:&nbsp;<strong>Thắng Cố, cơm lam, lợn cắp nách, khoai nướng, bắp nướng…</strong><em>(chi phí tự túc)</em>. Nghỉ đêm tại khách sạn.&nbsp;</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 3</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">SAPA - BẢN TẢ PÌN - HÀ NỘI</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-bac/sapa/hinh-noi-dung-tour/cho-coc-leu-cua-khau.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Quý khách ăn sáng, trả phòng khách sạn, lên xe về Lào Cai. Xe đưa đoàn tham quan bản Tả Pìn của&nbsp;<strong>người Dzao đỏ</strong>&nbsp;- nổi tiếng với sản phẩm tắm thuốc người Dzao t<strong>hăm quan làng bản, hang Tả Pìn, nhà thờ đổ…</strong>Tiếp tục về Lào Cai, thăm quan, mua sắm tại&nbsp;<strong>chợ Cốc Lếu</strong>, thăm quan chụp hình tại&nbsp;<strong>cửa khẩu Hà Khẩu</strong>…Ăn trưa tại nhà hàng tại Lào Cai.</p>

                    <p style="text-align:justify"><strong>Chiều:</strong>&nbsp;Quý khách khởi hành về Hà Nội, ngắm cảnh Tây Bắc hùng vỹ dọc đường.</p>

                    <p style="text-align:justify"><strong>Tối:&nbsp;</strong>Nhận phòng, ăn tối tại nhà hàng, nghỉ đêm tại Hà Nội. Tự do tham quan phố cổ.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 4</div>

                    <div class="fa fa-plane vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 0px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">CITY HÀ NỘI - TP. HCM</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-bac/ha-noi/hinh-noi-dung-tour/lang-bac-cho-dong-xuan-chua-mot-cot.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Quý khách dùng buffet sáng tại khách sạn, trả phòng. Xe đưa quý khách vào viếng&nbsp;<strong>Lăng Chủ Tịch Hồ Chí Minh, thăm Phủ Chủ Tịch, Bảo tàng Hồ Chí Minh, chùa Một Cột, nhà sàn, ao cá Bác Hồ, mua sắm tại Chợ Đồng Xuân –&nbsp;</strong>khu chợ bán buôn lớn nhất Hà Nội.</p>

                    <p style="text-align:justify"><strong>11h30</strong>: Đoàn ăn trưa tại nhà hàng địa phương.</p>

                    <p style="text-align:justify"><strong>Chiều:&nbsp;</strong>Xe đưa quý khách ra sân bay, làm thủ tục bay theo giờ đã chọn. Kết thúc chuyến tham quan! Chia tay, hẹn gặp lại quý khách.</p>
                    </div>
                    </div>
                    </div>', 
                'trangthaitour'=>1
            ),
            array(
                'users_id'=>3, 
                'tentour'=>'Tour Du Lịch: Phan Thiết | Mũi Né | giá siêu tiết kiệm', 
                'place_id'=>3, 
                'sokhachtoida'=>3, 
                'songaydi'=>2, 
                'hinhanh'=> 'eOPP_lang-chai-mui-ne-1.jpg',
                'giatour' => 1186000, 
                'mota'=>'<div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 1</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">TP.HCM - PHAN THIẾT - MŨI NÉ</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/mui-ne/hinh-noi-dung-tour/dong-cuu-lang-chai-lau-dai-tuou-vang.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng</strong>: Xe và hướng dẫn viên của&nbsp;<strong>du lịch Đất Việt&nbsp;</strong>đón quý khách tại điểm hẹn sắp xếp hành lý, vị trí ghế ngồi và khởi hành đi Phan Thiết.</p>

                    <p style="text-align:justify"><strong>07h00:&nbsp;</strong>Quý khách dừng chân dùng điểm tâm nhà hàng. Tiếp chương trình xe, HDV sẽ thuyết minh các địa danh ngang qua và cùng Quý khách tìm hiểu đôi nét về văn hóa và phong tục tập quán của từng vùng miền, địa phương đất nước Việt Nam.</p>

                    <p style="text-align:justify"><strong>08h30:</strong>&nbsp;Đoàn tham quan tại:</p>

                    <ul>
                        <li style="text-align:justify"><strong>Trại Cừu Suối Nghệ:</strong>&nbsp;Bạn sẽ được vuốt ve, được ôm hôn và chụp ảnh thỏa thích với những chú cừu rất dễ thương, tìm hiểu về quy trình chăm sóc cừu, quá trình sinh sản cũng như quy trình lấy lông cừu làm quần áo, rất thú vị.</li>
                    </ul>

                    <p style="text-align:justify">Tiếp tục lộ trình theo con đường ven biển tuyệt đẹp băng qua khu vực Long Hải, Hồ Tràm, Hồ Cốc, Bình Châu,…sang khu vực Lagi.</p>

                    <p style="text-align:justify"><strong>10h00:&nbsp;</strong>Xe đón quý khách tham quan:</p>

                    <ul>
                        <li style="text-align:justify"><strong>Vườn thanh long:&nbsp;</strong>Tìm hiểu về nghề trồng cây thanh long và hái trái cây chín (nếu đúng thời điểm) mua thanh long tươi ngay tại vườn.</li>
                    </ul>

                    <p style="text-align:justify"><strong>12h30:</strong>&nbsp;Đoàn dùng bữa trưa tại nhà hàng.</p>

                    <p style="text-align:justify"><strong>13h30:</strong>&nbsp;Xe đưa Quý khách tiếp tục đến với mũi né. Đến Resort &nbsp;nhận phòng nghỉ ngơi.</p>

                    <p style="text-align:justify"><strong>Chiều:&nbsp;</strong>Quý khách bắt đầu tham quan và sử dụng dịch vụ tại Mũi Né.</p>

                    <ul>
                        <li style="text-align:justify"><strong>Lâu Đài Rượu Vang&nbsp;<em>(tự túc: 100.000đ)</em></strong>: với độ âm khoảng 16 độ tạo ra một không khí rất tuyệt vời ngay giữ vùng nắng nóng Mũi Né, Quý khách được nghe giới thiệu về quy trình sản xuất rượu vang và cùng thưởng thức rượu vang miễn phí, tiếp theo sự hướng dẫn Quý khách có thể tham quan và lựa chọn mua sắm sản phẩm rượu vang làm quà tặng cho người thân.</li>
                    </ul>

                    <p style="text-align:justify"><strong>Buổi tối:&nbsp;</strong>Đoàn di chuyển đến khu vực&nbsp;<strong>làng chài</strong>&nbsp;– bờ kè tự do khám phá ẩm thực Bình Thuận với các món hải sản địa phương&nbsp;<em>(tự túc bữa tối)</em>. Sau đó, Quý khách nghỉ ngơi, tự do dạo biển Mũi Né về đêm. Nghỉ đêm Mũi Né.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 2</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 0px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">PHAN THIẾT - TP.HCM</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/mui-ne/hinh-noi-dung-tour/lang-chai-doi-cat-cong-vien-tuong-cat.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Quý khách dậy sớm, khởi hành đến&nbsp;<strong>Đồi Cát Bay.&nbsp;</strong>Tại đây, đoàn có thể tham gia trò chơi cảm giác mạnh trên đồi cát bằng cách đi máng trượt, và thưởng thức&nbsp;<strong>Dừa Ba Nhát</strong>&nbsp;- đặc sản địa phương và ngắm nhìn cảnh làng chài nhộn nhịp tấp nập khi ghe, thuyền đánh bắt cá cập bờ.</p>

                    <p style="text-align:justify"><strong>07h00:&nbsp;</strong>Về lại resort, Quý khách dùng điểm tâm sáng, nghỉ ngơi tắm biển tự do. Quý khách có thể đăng ký chương trình tham quan:</p>

                    <ul>
                        <li style="text-align:justify"><strong>Công viên Tượng Cát Forgotten Land&nbsp;</strong><em>(tự túc: 100.000đ)</em>: Với chủ đề chung “Cổ tích và thần thoại của Việt Nam và Thế Giới”, đến Forgotten Land, quý khách sẽ được chiêm ngưỡng các tác phẩm mô các nhân vât: Sơn Tinh-Thủy Tinh, Cóc kiện Trời, Thạch Sùng, nàng Lọ Lem, Chú mèo đi hia, Thỏ và Rùa, Cáo và Quạ, chùa Thiên Mụ, tháp Pô Nagar.</li>
                    </ul>

                    <p style="text-align:justify"><strong>Trưa:&nbsp;</strong>Quý khách làm thủ tục trả phòng, khởi hành dùng bữa trưa tại nhà hàng. Đoàn khởi hành về lại TP.HCM, trên đường về Quý khách dừng chân mua sắm đặc sản địa phương làm quà tặng cho người thân.</p>

                    <p style="text-align:justify"><strong>Chiều:&nbsp;</strong>Về đến TP.HCM, chia tay và hẹn gặp lại Quý khách.</p>
                    </div>
                    </div>
                    </div>', 
                'trangthaitour'=>1
            ),
            array(
                'users_id'=>2, 
                'tentour'=>'Tour Du Lịch: Hà Nội | Sapa | Fansipan', 
                'place_id'=>2, 
                'sokhachtoida'=>5, 
                'songaydi'=>4, 
                'hinhanh'=> 'GfKW_chua-Tran-Quoc-Ha-noi.jpg',
                'giatour' => 3786000, 
                'mota'=>'<div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 1</div>

                    <div class="fa fa-plane vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">TP.HCM - HÀ NỘI - CITY</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-bac/ha-noi/hinh-noi-dung-tour/chua-tran-quoc-van-mieu-QTG-cai-the-huc.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:</strong>&nbsp;Xe và HDV đón Quý khách tại sân bay Nội Bài. Trên đường về thủ đô, HDV sẽ giới thiệu về cuộc sống, con người nơi đây. Xe đưa quý khách ăn trưa tại nhà hàng. Về khách sạn, nhận phòng, nghỉ ngơi.</p>

                    <p style="text-align:justify"><strong>Chiều:</strong>&nbsp;Quý khách thăm&nbsp;<strong>chùa Trấn Quốc</strong>&nbsp;–&nbsp;<strong>ngôi chùa Trấn Bắc cổ kính nhất Việt Nam&nbsp;</strong>với 1.500 năm tuổi nằm trên bán đảo cồn Quy linh thiêng, với truyền thuyết và huyền thoại về Hồ Tây, hồ Trúc Bạch.</p>

                    <p style="text-align:justify">Tiếp tục thăm quan&nbsp;<strong>Đền Ngọc Sơn, Cầu Thê Húc, hồ Hoàn Kiếm</strong>&nbsp;- Trực tiếp chứng kiến cụ Rùa dài 2,1m, ngang 1,2m được trưng bày tại đền Ngọc Sơn.</p>

                    <p style="text-align:justify">Quý khách ghé thăm&nbsp;<strong>Văn Miếu Quốc Tử Giám</strong>&nbsp;– nơi đựoc xem như Trường Đại học đầu tiên của Việt Nam với 82 tấm bia Tiến sỹ còn lưu danh sử sách.</p>

                    <p style="text-align:justify"><strong>Tối:&nbsp;</strong>Đoàn tự do tham quan<strong>&nbsp;phố cổ Hà Nội, dạo Hồ Gươm, mua sắm tại Chợ đêm Hà Nội&nbsp;</strong>sầm uất... Nghỉ đêm tại khách sạn ở Hà Nội.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 2</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">HÀ NỘI - LÀO CAI - SAPA - HÀM RỒNG/ FANSIPAN</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-bac/sapa/hinh-noi-dung-tour/fansipan-ham-rong-sapa.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:</strong>&nbsp;Dùng điểm tâm sáng buffet, trả phòng. Quý khách lên xe khởi hành đi Lào Cai, theo đường cao tốc Nội Bài – Lào Cai dài 245Km với chưa đầy 4h đồng hồ. Quý khách có cơ hội ngắm phong cảnh tuyệt đẹp trên cung đường Tây Bắc, dừng chân nghỉ ngơi, chụp ảnh khám phá phong cảnh. Ăn trưa tại Sapa. Đoàn nhận phòng khách sạn.</p>

                    <p style="text-align:justify"><strong>Chiều:&nbsp;</strong>Qúy khách chon 1 trong 2 chương trình đi tham quan:</p>

                    <p style="text-align:justify"><u><strong>Chương trình 1:</strong></u>&nbsp;<strong>Tham quan KDL Hàm Rồng:</strong></p>

                    <p style="text-align:justify">Quý khách tham quan Khu Du lịch núi Hàm Rồng, tháp truyền hình, Vườn Lê, vườn Táo Mèo, Cổng trời, vườn hoa Châu Âu, Chinh phục đỉnh Sân Mây cao 1800m so với mực nước biển, xem Show Ca múa nhạc đặc sắc của vùng núi Tây Bắc do các chàng trai, cô gái người dân tộc H’Mông, Dao, Tày, Hà Nhì…biểu diễn.</p>

                    <p style="text-align:justify"><u><strong>Chương trình 2:</strong></u>&nbsp;<strong>Chinh phục đỉnh Fansipan (chưa bao gồm giá vé cáp treo 700.000 vnđ/khách).</strong></p>

                    <p style="text-align:justify">Quý khách khởi hành đi tham quan đỉnh Fansipan, lên cáp treo làm thủ tục mua vé, giúp quý khách tham gia hành trình&nbsp;<strong>chinh phục nóc nhà của Đông Dương</strong>. Qúy khách có cơ hội thăm quan&nbsp;<strong>thung lũng Mường Hoa, rừng Hoàng liên từ trên cao và đỉnh Fansipan</strong>, nơi có thảm thực vật phong phú và độc đáo&nbsp;<em>(chi phí cáp treo tự túc).</em></p>

                    <p style="text-align:justify"><strong>Tối:</strong>&nbsp;Đoàn ăn tối tại nhà hàng. Quý khách dạo chơi Sapa về đêm, tự do thưởng thức các món ăn đặc trưng của người dân tộc thiểu số vùng Tây Bắc:&nbsp;<strong>Thắng Cố, cơm lam, lợn cắp nách, khoai nướng, bắp nướng…</strong><em>(chi phí tự túc)</em>. Nghỉ đêm tại khách sạn.&nbsp;</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 3</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">SAPA - BẢN TẢ PÌN - HÀ NỘI</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-bac/sapa/hinh-noi-dung-tour/cho-coc-leu-cua-khau.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Quý khách ăn sáng, trả phòng khách sạn, lên xe về Lào Cai. Xe đưa đoàn tham quan bản Tả Pìn của&nbsp;<strong>người Dzao đỏ</strong>&nbsp;- nổi tiếng với sản phẩm tắm thuốc người Dzao t<strong>hăm quan làng bản, hang Tả Pìn, nhà thờ đổ…</strong>Tiếp tục về Lào Cai, thăm quan, mua sắm tại&nbsp;<strong>chợ Cốc Lếu</strong>, thăm quan chụp hình tại&nbsp;<strong>cửa khẩu Hà Khẩu</strong>…Ăn trưa tại nhà hàng tại Lào Cai.</p>

                    <p style="text-align:justify"><strong>Chiều:</strong>&nbsp;Quý khách khởi hành về Hà Nội, ngắm cảnh Tây Bắc hùng vỹ dọc đường.</p>

                    <p style="text-align:justify"><strong>Tối:&nbsp;</strong>Nhận phòng, ăn tối tại nhà hàng, nghỉ đêm tại Hà Nội. Tự do tham quan phố cổ.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 4</div>

                    <div class="fa fa-plane vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 0px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">CITY HÀ NỘI - TP. HCM</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-bac/ha-noi/hinh-noi-dung-tour/lang-bac-cho-dong-xuan-chua-mot-cot.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Quý khách dùng buffet sáng tại khách sạn, trả phòng. Xe đưa quý khách vào viếng&nbsp;<strong>Lăng Chủ Tịch Hồ Chí Minh, thăm Phủ Chủ Tịch, Bảo tàng Hồ Chí Minh, chùa Một Cột, nhà sàn, ao cá Bác Hồ, mua sắm tại Chợ Đồng Xuân –&nbsp;</strong>khu chợ bán buôn lớn nhất Hà Nội.</p>

                    <p style="text-align:justify"><strong>11h30</strong>: Đoàn ăn trưa tại nhà hàng địa phương.</p>

                    <p style="text-align:justify"><strong>Chiều:&nbsp;</strong>Xe đưa quý khách ra sân bay, làm thủ tục bay theo giờ đã chọn. Kết thúc chuyến tham quan! Chia tay, hẹn gặp lại quý khách.</p>
                    </div>
                    </div>
                    </div>', 
                'trangthaitour'=>1
            ),
            array(
                'users_id'=>3, 
                'tentour'=>'Tour Du Lịch: Hà Nội | Tràng An | Hạ Long | Sapa | Fansipan', 
                'place_id'=>3, 
                'sokhachtoida'=>6, 
                'songaydi'=>6, 
                'hinhanh'=> 'Dnnt_ha-noi-van-mieu-quoc-tu-giam.jpg',
                'giatour' => 5586000, 
                'mota'=>'<div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 1</div>

                    <div class="fa fa-plane vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">TP.HCM - HÀ NỘI - CITY</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-bac/ha-noi/hinh-noi-dung-tour/chua-tran-quoc-van-mieu-QTG-cai-the-huc.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Xe và HDV đón Quý khách tại sân bay Nội Bài. Trên đường về thủ đô, HDV sẽ giới thiệu về cuộc sống, con người nơi đây. Xe đưa quý khách ăn trưa tại nhà hàng. Về khách sạn, nhận phòng, nghỉ ngơi.</p>

                    <p style="text-align:justify"><strong>Chiều:&nbsp;</strong>Quý khách thăm&nbsp;<strong>chùa Trấn Quốc – ngôi chùa Trấn Bắc cổ kính</strong>&nbsp;nhất Việt Nam với 1.500 năm tuổi nằm trên bán đảo cồn Quy linh thiêng, với truyền thuyết và huyền thoại về Hồ Tây, hồ Trúc Bạch.</p>

                    <p style="text-align:justify">Tiếp tục thăm quan&nbsp;<strong>Đền Ngọc Sơn, Cầu Thê Húc, hồ Hoàn Kiếm</strong>&nbsp;- Trực tiếp chứng kiến cụ Rùa dài 2,1m, ngang 1,2m được trưng bày tại đền Ngọc Sơn.</p>

                    <p style="text-align:justify">Quý khách ghé thăm&nbsp;<strong>Văn Miếu&nbsp;Quốc Tử Giám</strong>&nbsp;– nơi đựoc xem như Trường Đại học đầu tiên của Việt Nam với 82 tấm bia Tiến sỹ còn lưu danh sử sách.</p>

                    <p style="text-align:justify"><strong>Tối:</strong>&nbsp;Đoàn tự do tham quan&nbsp;<strong>phố cổ Hà Nội, dạo Hồ Gươm, mua sắm tại Chợ đêm Hà Nội sầm uất,...&nbsp;</strong>Nghỉ đêm tại khách sạn ở Hà Nội.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 2</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">TRÀNG AN - BÁI ĐÍNH - HẠ LONG</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-bac/ninh-binh/hinh-noi-dung-tour/chua-bai-dinh-trang-an-lang-tho-dan.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Đoàn dùng điểm tâm sáng buffet. Trả phòng. Quý khách lên xe khởi hành đi Ninh Bình theo QL1A qua Hà Nam.&nbsp;Đến Ninh Bình, Quý khách cầu lễ phật tại&nbsp;<strong>Chùa Bái Đính</strong>&nbsp;-&nbsp;<em>ngôi chùa lớn nhất Việt Nam với 500 pho tượng La Hán, tượng phật đồng lớn nhất Việt Nam cao 10m nặng 100 tấn</em>.&nbsp;Quý khách ăn trưa tại nhà hàng, thưởng thức&nbsp;<strong>đặc sản dê núi đá, rượu ngọc dương.</strong></p>

                    <p style="text-align:justify"><strong>Chiều:</strong>&nbsp;Quý khách tham quan&nbsp;<strong>Quần thể Danh thắng Tràng An</strong>&nbsp;–&nbsp;<em>Di sản được UNESCO công nhận là di sản văn hóa và thiên nhiên Thế giới,</em>&nbsp;giúp cho Việt Nam lần đầu lọt vào danh sách 30 di sản hỗn hợp Thế Giới. Lên thuyền xuôi dòng Sào khê uốn lượn giữa cánh đồng lúa, quý khách đi đò thăm&nbsp;<strong>Hang Sáng,&nbsp;Hang Tối,&nbsp;Hang Nấu Rượu</strong>. Đặc biêt, tham quan<strong>&nbsp;Làng Thổ Dân</strong>&nbsp;được phục dựng trong phim<strong>&nbsp;“Đảo đầu lâu” Kong: Skull Island.</strong></p>

                    <p style="text-align:justify">Quý khách rời Ninh Bình, theo Quốc Lộ 10 đi Hạ Long, trên đường đi Quý khách sẽ được cảm nhận, khám phá cuộc sống, phong cảnh đặc trưng của Đồng Bằng Bắc Bộ với cảnh làng quê thanh bình qua các tỉnh Nam Định, Thái Bình, Hải Phòng. Đến Hạ Long, nhận phòng, nghỉ ngơi, ăn tối.</p>

                    <p style="text-align:justify"><strong>Tối:&nbsp;</strong>Quý khách tự do dạo chơi&nbsp;<strong>Công viên Hoàng Gia</strong>&nbsp;dọc&nbsp;<strong>biển Bãi Cháy</strong>, đi mua sắm hàng hóa tại khu Chợ Đêm Hạ Long sầm uất với các sản phẩm đặc trưng Hạ Long, lên&nbsp;<strong>cầu Bãi Cháy – cây cầu dây văng dài nhất Việt Nam</strong>&nbsp;ngắm Hạ Long về đêm.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 3</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">HẠ LONG - KDL YÊN TỬ - HÀ NỘI</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-bac/ha-long/hinh-noi-dung-tour/ha-long-yen-tu.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Đoàn dùng bữa sáng buffet tại khách san. Trả phòng. Quý khách tham quan&nbsp;<strong>Vịnh Hạ Long&nbsp;</strong>- Di sản thiên nhiên thế giới được UNESSCO công nhận năm 1994, chiêm ngưỡng vẻ đẹp huyền bí của hàng ngàn đảo đá và các hang động kì thú: Động Thiên Cung…ngắm cảnh&nbsp;<strong>Làng Chài, hòn Ấm, hòn Rùa, hòn Đỉnh Hương, hòn Chó Đá, hòn Gà Chọi,…</strong></p>

                    <p style="text-align:justify">Quý khách ăn trưa trên tàu, ngắm cảnh vịnh đẹp nên thơ và hưởng gió biển.</p>

                    <p style="text-align:justify"><strong>Chiều:&nbsp;</strong>Đoàn quay lại bến tàu. Khởi hành tham quan&nbsp;<strong>khu danh thắng đất Phật Yên Tử</strong>&nbsp;- đất tổ của Thiền Phái Trúc Lâm. Quý khách đi cáp treo, tham quan&nbsp;<strong>Vườn Tháp Tổ, Chùa Hoa Yên&nbsp;<em>(chi phí cáp treo tự túc).</em></strong></p>

                    <p style="text-align:justify">Quý khách lên xe về Hà Nội, ghé Hải Dương tham quan&nbsp;<strong>cửa hàng bánh đậu xanh, bánh cốm và các mặt hàng đặc sản khác của Miền Bắc.</strong></p>

                    <p style="text-align:justify"><strong>Tối:&nbsp;</strong>Tới Hà Nội, ăn tối tại nhà hàng và nhận phòng khách sạn, nghỉ đêm tại Hà Nội.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 4</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">HÀ NỘI - LÀO CAI - SAPA - HÀM RỒNG/FANSIPAN</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-bac/sapa/hinh-noi-dung-tour/fansipan-ham-rong-sapa.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Dùng điểm tâm sáng buffet, trả phòng. Quý khách lên xe khởi hành đi<strong>&nbsp;Lào Cai</strong>, theo đường cao tốc Nội Bài – Lào Cai dài 245Km với chưa đầy 4h đồng hồ. Quý khách có cơ hội ngắm phong cảnh tuyệt đẹp trên cung đường Tây Bắc, dừng chân nghỉ ngơi, chụp ảnh khám phá phong cảnh. Ăn trưa tại Sapa. Nhận phòng khách sạn.</p>

                    <p style="text-align:justify"><strong>Chiều:&nbsp;</strong>Qúy khách chon 1 trong 2 chương trình đi tham quan:</p>

                    <p style="text-align:justify"><strong><u>Chương trình 1:</u>&nbsp;Tham quan KDL Hàm Rồng:</strong></p>

                    <p style="text-align:justify">Quý khách tham quan&nbsp;<strong>Khu Du lịch núi Hàm Rồng, tháp truyền hình, Vườn Lê, vườn Táo Mèo, Cổng trời, vườn hoa Châu Âu, Chinh phục đỉnh Sân Mây cao 1800m&nbsp;</strong>so với mực nước biển, xem&nbsp;<strong>show ca múa nhạc đặc sắc của vùng núi Tây Bắ</strong>c do các chàng trai, cô gái người dân tộc H’Mông, Dao, Tày, Hà Nhì…biểu diễn.</p>

                    <p style="text-align:justify"><strong><u>Chương trình 2:</u>&nbsp;Chinh phục đỉnh Fansipan&nbsp;</strong><em>(chưa bao gồm giá vé cáp treo 700.000 vnđ/khách).</em></p>

                    <p style="text-align:justify">Quý khách khởi hành đi tham quan&nbsp;<strong>đỉnh Fansipan,</strong>&nbsp;lên cáp treo làm thủ tục mua vé, giúp quý khách tham gia hành trình chinh phục&nbsp;<strong>Nóc Nhà của Đông Dương</strong>. Qúy khách&nbsp;có cơ hội thăm quan&nbsp;<strong>thung lũng Mường Hoa, rừng Hoàng Liên</strong>&nbsp;từ trên cao và đỉnh Fansipan, nơi có thảm thực vật phong phú và độc đáo&nbsp;<em>(chi phí cáp treo tự túc)</em>.</p>

                    <p style="text-align:justify"><strong>Tối:&nbsp;</strong>Đoàn ăn tối tại nhà hàng. Quý khách dạo chơi Sapa về đêm, tự do thưởng thức các món ăn đặc trưng của người dân tộc thiểu số vùng Tây Bắc:&nbsp;<strong>Thắng Cố, cơm lam, lợn cắp nách, khoai nướng, bắp nướng…</strong><em>(chi phí tự túc)</em>. Nghỉ đêm tại khách sạn.&nbsp;</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 5</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">SAPA - BẢN TẢ PÌN - HÀ NỘI</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-bac/sapa/hinh-noi-dung-tour/cho-coc-leu-cua-khau.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:</strong>&nbsp;Quý khách ăn sáng, trả phòng khách sạn, lên xe về Lào Cai. Xe đưa đoàn tham quan bản Tả Pìn của người Dzao đỏ - nổi tiếng với sản phẩm tắm thuốc người Dzao,&nbsp;<strong>thăm quan làng bản, hang Tả Pìn, nhà thờ Đổ…</strong>Tiếp tục về Lào Cai, thăm quan, mua sắm tại chợ Cốc Lếu, thăm quan chụp hình tại&nbsp;<strong>cửa khẩu Hà Khẩu</strong>…Ăn trưa tại nhà hàng tại Lào Cai.</p>

                    <p style="text-align:justify"><strong>Chiều:&nbsp;</strong>Quý khách khởi hành về Hà Nội, ngắm cảnh Tây Bắc hùng vỹ dọc đường.</p>

                    <p style="text-align:justify"><strong>Tối:&nbsp;</strong>Nhận phòng, ăn tối tại nhà hàng, nghỉ đêm tại Hà Nội. Tự do tham quan phố cổ.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 6</div>

                    <div class="fa fa-plane vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 0px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">CITY HÀ NỘI - TP. HCM</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-bac/ha-noi/hinh-noi-dung-tour/lang-bac-cho-dong-xuan-chua-mot-cot.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:</strong>&nbsp;Quý khách dùng buffet sáng tại khách sạn. Trả phòng. Xe đưa quý khách vào viếng&nbsp;<strong>Lăng Chủ Tịch Hồ Chí Minh, thăm Phủ Chủ Tịch, Bảo tàng Hồ Chí Minh, chùa Một Cột, nhà sàn, ao cá Bác Hồ, mua sắm tại Chợ Đồng Xuân&nbsp;</strong>– Khu chợ bán buôn lớn nhất Hà Nội.</p>

                    <p style="text-align:justify"><strong>11h30:</strong>&nbsp;Đoàn&nbsp;ăn trưa tại nhà hàng địa phương.</p>

                    <p style="text-align:justify"><strong>Chiều:</strong>&nbsp;Xe đưa quý khách ra sân bay, làm thủ tục bay theo giờ đã chọn. Kết thúc chuyến tham quan. HDV chia tay, hẹn gặp lại quý khách.</p>
                    </div>
                    </div>
                    </div>', 
                'trangthaitour'=>1
            ),
            array(
                'users_id'=>4, 
                'tentour'=>'Tour Du Lịch: Đà Nẵng | Sơn Trà| Hội An | Bà Nà | Huế |Động Phong Nha', 
                'place_id'=>4, 
                'sokhachtoida'=>7, 
                'songaydi'=>5, 
                'hinhanh'=> 'HlXX_du-lich-hoi-an-800px.jpg',
                'giatour' => 4786000, 
                'mota' => '<div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 1</div>

                    <div class="fa fa-plane vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">ĐÀ NẴNG - BÁN ĐẢO SƠN TRÀ - SUNWHEEL</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/da-nang/hinh-noi-dung-tour/ban-dao-son-tra-sunwheel-banh-trang.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p>&nbsp;</p>

                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Đón quý khách tại Đà Nẵng (Sân bay, Ga, điểm hẹn trung tâm) từ 07h00 đến 13h00 (Sau thời gian này, quý khách tự túc nhập đoàn).</p>

                    <p style="text-align:justify">Xe đưa đi ăn trưa đặc sản nổi tiếng Đà Nẵng&nbsp;<strong>“Bánh tráng thịt heo 2 đầu da &amp; Mì&nbsp;Quảng”.</strong>&nbsp;Nhận phòng K/sạn 3* nghỉ ngơi.</p>

                    <p style="text-align:justify"><strong>Chiều:&nbsp;</strong>Lên&nbsp;<strong>Bán đảo Sơn Trà</strong>&nbsp;mục kích phố biển Đà Nẵng trên cao, viếng&nbsp;<strong>Linh Ứng Tự</strong>&nbsp;- nơi có tượng Phật Bà 67m cao nhất Việt Nam và&nbsp;<strong>tắm biển Mỹ Khê,&nbsp;</strong>Đà Nẵng.</p>

                    <p style="text-align:justify"><strong>Tối:&nbsp;</strong>Ăn tối nhà hàng. Trãi nghiệm cảm giác với<strong>&nbsp;Vòng quay Mặt trời Sun Wheel -</strong>&nbsp;<strong>Top 10 vòng quay cao nhất Thế Giới,</strong>&nbsp;chiêm ngưởng vẻ đẹp Đà Thành về đêm rực rỡ ánh đèn&nbsp;<em>(vé Sun Wheel tự túc).</em></p>

                    <p>&nbsp;</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 2</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">BẢO TÀNG PHẬT HỌC - PHỐ CỔ HỘI AN</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/hoi-an/hinh-noi-dung-tour/chua-cau-hoi-an.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p>&nbsp;</p>

                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Qúy khách dùng điểm tâm, vòng qua<strong>&nbsp;Cầu Rồng</strong>&nbsp;lưu lại dấu ấn trên&nbsp;<strong>Cầu Tình Yêu</strong>, tản bộ thưởng thức không khí trong lành bên&nbsp; bờ&nbsp; Hàn Giang với&nbsp;<strong>tượng Cá Chép Hóa Long</strong>&nbsp;- Biểu tượng mong muốn vươn lên của người Đà Nẵng. Tham quan&nbsp;<strong>Chùa Quan Thế Âm -&nbsp; Bảo Tàng Phật Học và Làng Nghề Điêu Khắc Đá.&nbsp;</strong>Mua sắm đặc sản Qùa Miền Trung.</p>

                    <p style="text-align:justify"><strong>Trưa:&nbsp;</strong>Qúy khách ăn trưa tại nhà hàng.</p>

                    <p style="text-align:justify"><strong>Chiều:</strong>&nbsp;Khởi hành vào Hội An bách bộ tham quan và mua sắm Phố Cổ với:&nbsp;<strong>Chùa Cầu Nhật Bản, Nhà Cổ hàng trăm năm tuổi, Hội Quán Phước Kiến &amp; Xưởng thủ công mỹ nghệ</strong>. Khởi hành về lại Đà Nẵng.</p>

                    <p style="text-align:justify"><strong>Tối:&nbsp;</strong>Ăn tối tại nhà hàng. Tự do thưởng ngoạn&nbsp;<strong>du thuyền trên sông Hàn</strong>&nbsp;ngắm cảnh Đà Thành về đêm, chụp ảnh&nbsp;<strong>Cầu Quay Sông Hàn, cầu Rồng&nbsp;</strong>phun lửa và nước vào cuối tuần.</p>

                    <p>&nbsp;</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 3</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">BÀ NÀ NÚI CHÚA - CỐ ĐÔ HUẾ</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/hue/hinh-noi-dung-tour/ba-na-hue.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p>&nbsp;</p>

                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Qúy khách dùng điểm tâm, khởi hành đi&nbsp;<strong>Bà Nà - Núi Chúa</strong>, nơi có những khoảnh khoắc giao mùa bất ngờ Xuân - Hạ - Thu - Đông trong một ngày. Qúy khách sẽ tận hưởng cảm giác bồng bền khi ngồi trên Cabin lơ lững giữa chừng mây. Viếng&nbsp;<strong>chùa Linh Ứng</strong>&nbsp;<strong>với tượng Phật Thích Ca cao 27m,&nbsp;</strong>viếng&nbsp;<strong>đền thờ Bà Chúa Mẫu Thượng Ngàn.</strong>&nbsp;Tham gia vui chơi tại công viên Fantasy Park: với các trò chơi phiêu lưu mới lạ như:&nbsp;<strong>Vòng Quay Tình Yêu, Phi Công Skiver, Đường Đua Lửa, Ngôi Nhà Ma và Khu trưng bày hơn 40 tượng sáp những nhân vật nổi tiếng trên thế giới…</strong></p>

                    <p style="text-align:justify">Hoặc lựa chọn nếu quý khách không đi tham quan Bà Nà. Quý khách có thể tự do nghỉ ngơi tại khách sạn hoặc tham gia chương trình&nbsp;<strong>Tắm bùn khoáng nóng Galina</strong>&nbsp;với chi phí 350.000 vnđ/khách. Đúng 11h30 quý khách trả phòng, xe sẽ đón quý khách nhập đoàn và ăn trưa.</p>

                    <p style="text-align:justify"><strong>Trưa:</strong>&nbsp;Đoàn ăn trưa nhà hàng.</p>

                    <p style="text-align:justify"><strong>Chiều:</strong>&nbsp;Qúy khách khởi hành đi&nbsp;<strong>Cố Đô Huế - Di sản văn hoá Thế Giới,</strong>&nbsp;xuyên hầm đường bộ đèo Hải Vân, dừng chân tại&nbsp;<strong>làng chài Lăng Cô</strong>&nbsp;chụp hình lưu niệm. Tham quan&nbsp;<strong>Lăng Khải Định</strong>&nbsp;- công trình mang nhiều trường phái kiến trúc khác nhau, kết hợp Đông - Tây, Âu - Á, Cổ Kim độc đáo so với các công trình kiến trúc truyền thống Việt Nam. Nhận phòng&nbsp;<strong>khách sạn 4*</strong>&nbsp;nghỉ ngơi.</p>

                    <p style="text-align:justify"><strong>Tối:</strong>&nbsp;Đoàn ăn tối nhà hàng với&nbsp;<strong>đặc sản xứ Huế (Bánh bèo, lọc, nậm, khoái,...)</strong>. Quý khách xuống&nbsp;<strong>thuyền Rồng</strong>&nbsp;để thưởng thức&nbsp;<strong>Ca Huế trên sông Hương</strong>&nbsp;– nét văn hóa độc đáo của xứ Huế.</p>

                    <p>&nbsp;</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 4</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">HUẾ - THÁNH ĐỊA LA VANG - ĐỘNG PHONG NHA</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/phong-nha/hinh-noi-dung-tour/hue-thanh-dia-la-vang-dong-phong-nha.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p>&nbsp;</p>

                    <p style="text-align:justify"><strong>Sáng:</strong>&nbsp;Đoàn dùng điểm tâm sớm, rời Huế đi&nbsp;<strong>Phong Nha - Kẻ Bàng</strong>.Viếng thăm&nbsp;<strong>Thánh Địa La Vang&nbsp;</strong>(được phong tặng là&nbsp;<strong>Tiểu Vương Cung Thánh Đường)</strong>&nbsp;và ngang&nbsp;<strong>qua Vĩ tuyến 17 Sông Bến Hải - Cầu Hiền Lương huyền thoại.</strong></p>

                    <p style="text-align:justify"><strong>Trưa:&nbsp;</strong>Ăn trưa nhà hàng tại Phong Nha.</p>

                    <p style="text-align:justify"><strong>Chiều:</strong>&nbsp;Ngồi thuyền ngược&nbsp;<strong>sông Son</strong>&nbsp;chinh phục&nbsp;<strong>Động Phong Nha: Cô Tiên &amp; Cung Đình</strong>&nbsp;dưới sâu lòng núi nơi có con sông ngầm từ Lào chảy sang, chiêm ngưỡng các khối thạch nhũ tuyệt đẹp được kiến tạo bởi thiên nhiên qua hàng ngàn thiên niên kỷ.</p>

                    <p style="text-align:justify">Hoặc lựa chọn&nbsp;<strong>Tham quan chinh phục Động Thiên Đường - Được mệnh danh là " Hoàng cung trong lòng đất"</strong>&nbsp;và là một trong những kỳ quan tráng lệ và huyền ảo bậc nhất thế giới. Quý khách chỉ đóng thêm chênh lệch&nbsp;<em>vé tham quan 150.000 vnđ/khách.</em></p>

                    <p style="text-align:justify">Khởi hành về Huế theo đường Trường Sơn - Hồ Chí Minh.</p>

                    <p style="text-align:justify"><strong>Tối:&nbsp;</strong>Đoàn ăn tối nhà hàng, tự do khám phá cố đô về đêm với&nbsp;<strong>cầu Tràng Tiền</strong>&nbsp;rực rỡ soi mình xuống dòng sông Hương thơ mộng, dạo chơi chợ đêm tìm hiểu nét sinh hoạt của đất kinh thành. Nghỉ ngơi&nbsp;<strong>khách sạn 4*&nbsp;</strong>Huế.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 5</div>

                    <div class="fa fa-plane vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 0px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">ĐẠI NỘI – CHÙA THIÊN MỤ - TIỄN KHÁCH</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/hue/hinh-noi-dung-tour/dai-noi-chua-thien-mu.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Đoàn dùng điểm tâm. Quý khách tự do nghỉ ngơi thư giãn tắm hồ bơi tại khách sạn 4 sao. Khởi hành tham quan&nbsp;<strong>Đại Nội - Hoàng cung triều Nguyễn, tham quan Ngọ Môn, Điện Thái Hòa, Tử Cấm Thành, Thế Miếu, Hiển Lâm Các, Cửu Đỉnh,...</strong>tiếp tục viếng&nbsp;<strong>Chùa Thiên Mụ</strong>&nbsp;cổ kính là nơi lưu giữ nhiều cổ vật quý có giá trị về mặt lịch sử và nghệ thuật. Qúy khách trả phòng đi ăn trưa.</p>

                    <p style="text-align:justify"><strong>Trưa:</strong>&nbsp;Đoàn ăn trưa nhà hàng tại Huế.</p>

                    <p style="text-align:justify">Tiễn quý khách ra sân bay Huế&nbsp;<em>(các chuyến sau 14h00)</em>.Và sân bay Đà Nẵng&nbsp;<em>(các chuyến sau 16h30).</em></p>

                    <p style="text-align:justify"><strong>Chiều:&nbsp;</strong>Chia tay Quý khách và kết thúc chương trình, hẹn gặp lại quý khách!</p>
                    </div>
                    </div>
                    </div>', 'trangthaitour'=>1),
            array(
                'users_id'=>5, 
                'tentour'=>'Tour Du Lịch: Đà Nẵng | Hội An | Bà Nà | Huế | Động Phong Nha', 
                'place_id'=>5, 
                'sokhachtoida'=>5, 
                'songaydi'=>4, 
                'hinhanh'=> 'V9ZI_chua_linh_ung_son_tra_da_nang.jpg',
                'giatour' => 4186000, 
                'mota' => '<div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 1</div>

                    <div class="fa fa-plane vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">BẢO TÀNG PHẬT HỌC - PHỐ CỔ HỘI AN</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/hoi-an/hinh-noi-dung-tour/chua-cau-hoi-an.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:</strong>&nbsp;Đón quý khách tại sân bay Đà Nẵng từ 6h30 – 08h30. Vòng qua&nbsp;<strong>Cầu Rồng</strong>&nbsp;lưu lại dấu ấn trên&nbsp;<strong>Cầu Tình Yêu,</strong>&nbsp;tản bộ thưởng thức không khí trong lành bên&nbsp;bờ&nbsp;<strong>Hàn Giang với tượng Cá Chép Hóa Long&nbsp;</strong>- biểu tượng mong muốn vươn lên của người Đà Nẵng. Tham quan&nbsp;<strong>Chùa Quan Thế Âm -&nbsp;Bảo Tàng Phật Học và Làng Nghề Điêu Khắc Đá</strong>. Mua sắm&nbsp;<strong>đặc sản quà&nbsp;Miền Trung.</strong></p>

                    <p style="text-align:justify"><strong>Trưa:&nbsp;</strong>Ăn trưa tại nhà hàng cơm niêu dưới chân&nbsp;<strong>núi Bà Nà.</strong></p>

                    <p style="text-align:justify"><strong>Chiều:&nbsp;</strong>Khởi hành vào Hội An bách bộ tham quan và mua sắm Phố Cổ với:&nbsp;<strong>Chùa Cầu Nhật Bản, Nhà Cổ hàng trăm năm tuổi, Hội Quán Phước Kiến &amp; Xưởng thủ công mỹ nghệ</strong>. Khởi hành về lại Đà Nẵng.</p>

                    <p style="text-align:justify"><strong>Tối:</strong>&nbsp;Ăn tối tại nhà hàng.</p>

                    <p style="text-align:justify">Tự do thưởng ngoạn du thuyền trên&nbsp;<strong>sông Hàn</strong>&nbsp;ngắm cảnh<strong>&nbsp;Đà thành</strong>&nbsp;về đêm, chụp ảnh<strong>&nbsp;Cầu Quay Sông Hàn, cầu Rồng phun lửa&nbsp;</strong>và nước vào cuối tuần.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 2</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">BÀ NÀ NÚI CHÚA - CỐ ĐÔ HUẾ</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/hue/hinh-noi-dung-tour/ba-na-hue.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify">Sáng: Qúy khách dùng điểm tâm, khởi hành đi&nbsp;<strong>Bà Nà&nbsp;Núi Chúa -</strong>&nbsp;nơi có những khoảnh khoắc giao mùa bất ngờ Xuân - Hạ - Thu - Đông trong một ngày. Qúy khách sẽ tận hưởng cảm giác bồng bền khi ngồi trên Cabin lơ lững giữa chừng mây. Viếng&nbsp;<strong>chùa Linh Ứng với tượng Phật Thích Ca cao 27m, viếng đền thờ Bà Chúa Mẫu Thượng Ngàn</strong>. Tham gia vui chơi tại công viên Fantasy Park: với các trò chơi phiêu lưu mới lạ như:&nbsp;<strong>Vòng Quay Tình Yêu, Phi Công Skiver, Đường Đua Lửa, Ngôi Nhà Ma và Khu trưng bày hơn 40 tượng sáp những nhân vật nổi tiếng trên thế giới…</strong></p>

                    <p style="text-align:justify">(Hoặc lựa chọn Nếu quý khách không đi tham quan&nbsp;<strong>Bà Nà</strong>. Quý khách có thể tự do nghỉ ngơi tại khách sạn hoặc tham gia chương trình&nbsp;<strong>Tắm bùn khoáng nóng Galina</strong>&nbsp;với&nbsp;<em>chi phí 350.000 VND/khách</em>. Đúng 11h30 quý khách trả phòng, Xe sẽ đón quý khách nhập đoàn và ăn trưa.</p>

                    <p style="text-align:justify"><strong>Trưa:</strong>&nbsp;Ăn trưa nhà hàng.</p>

                    <p style="text-align:justify"><strong>Chiều:</strong>&nbsp;Đoàn khởi hành đi&nbsp;<strong>Cố Đô Huế - Di sản văn hoá Thế Giới,</strong>&nbsp;xuyên hầm đường bộ đèo Hải Vân, dừng chân tại làng chài Lăng Cô chụp hình lưu niệm. Tham quan Lăng Khải Định - công trình mang nhiều trường phái kiến trúc khác nhau, kết hợp Đông - Tây, Âu - Á, Cổ Kim độc đáo so với các công trình kiến trúc truyền thống Việt Nam. Nhận phòng khách sạn 4* nghỉ ngơi.</p>

                    <p style="text-align:justify"><strong>Tối:&nbsp;</strong>Qúy khách ăn tối nhà hàng với&nbsp;<strong>đặc sản xứ Huế (Bánh bèo, lọc, nậm, khoái,...)</strong>. Quý khách xuống&nbsp;<strong>thuyền Rồng</strong>&nbsp;để thưởng thức&nbsp;<strong>Ca Huế trên sông Hương –</strong>&nbsp;nét văn hóa độc đáo của xứ Huế.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 3</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">HUẾ - THÁNH ĐỊA LA VANG - ĐỘNG PHONG NHA</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/phong-nha/hinh-noi-dung-tour/hue-thanh-dia-la-vang-dong-phong-nha.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:</strong>&nbsp;Đoàn dùng điểm tâm sớm, rời Huế đi&nbsp;<strong>Phong Nha - Kẻ Bàng</strong>.Viếng thăm&nbsp;<strong>Thánh Địa La Vang&nbsp;</strong>(Được phong tặng là Tiểu Vương Cung Thánh Đường) và ngang qua Vĩ tuyến 17 Sông Bến Hải - Cầu Hiền Lương huyền thoại.</p>

                    <p style="text-align:justify"><strong>Trưa:</strong>&nbsp;Ăn trưa nhà hàng tại Phong Nha.</p>

                    <p style="text-align:justify"><strong>Chiều:&nbsp;</strong>Ngồi thuyền ngược&nbsp;<strong>sông Son chinh phục Động Phong Nha: Cô Tiên &amp; Cung Đình</strong>&nbsp;dưới sâu lòng núi nơi có con sông ngầm từ Lào chảy sang, chiêm ngưỡng các khối thạch nhũ tuyệt đẹp được kiến tạo bởi thiên nhiên qua hàng ngàn thiên niên kỷ.</p>

                    <p style="text-align:justify">Hoặc lựa chọn Tham quan chinh phục&nbsp;<strong>Động Thiên Đường - Được mệnh danh là " Hoàng cung trong lòng đất"&nbsp;</strong>và là một trong những kỳ quan tráng lệ và huyền ảo bậc nhất thế giới. Quý khách chỉ đóng thêm chênh lệch vé tham quan&nbsp;<strong><em>150.000 VNĐ/khách.</em></strong></p>

                    <p style="text-align:justify">Qúy khách khởi hành về Huế theo đường Trường Sơn - Hồ Chí Minh.</p>

                    <p style="text-align:justify"><strong>Tối:&nbsp;</strong>Ăn tối nhà hàng, tự do khám phá cố đô về đêm với&nbsp;<strong>cầu Tràng Tiền</strong>&nbsp;rực rỡ soi mình xuống dòng<strong>&nbsp;sông Hương</strong>&nbsp;thơ mộng, dạo chơi chợ đêm tìm hiểu nét sinh hoạt của đất kinh thành. Nghỉ ngơi khách sạn 4* Huế.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 4</div>

                    <div class="fa fa-plane vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 0px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">ĐẠI NỘI - CHÙA THIÊN MỤ - TIỄN KHÁCH</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/hue/hinh-noi-dung-tour/dai-noi-chua-thien-mu.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify">Điểm tâm&nbsp;xong Quý khách tự do nghỉ ngơi thư giãn tắm hồ bơi tại khách sạn 4 sao. Khởi hành tham quan&nbsp;<strong>Đại Nội - Hoàng cung triều Nguyễn, tham quan Ngọ Môn, Điện Thái Hòa, Tử Cấm Thành, Thế Miếu, Hiển Lâm Các, Cửu Đỉnh,...</strong>tiếp tục viếng&nbsp;<strong>Chùa Thiên Mụ cổ kính</strong>&nbsp;là nơi lưu giữ nhiều cổ vật quý có giá trị về mặt lịch sử và nghệ thuật. Trả phòng đi ăn trưa.</p>

                    <p style="text-align:justify">Qúy khách ăn trưa nhà hàng tại Huế.</p>

                    <p style="text-align:justify">Tiễn quý khách ra sân bay Huế&nbsp;<em>(các chuyến sau 14h00)</em>&nbsp;và sân bay Đà Nẵng&nbsp;<em>(các chuyến sau 16h30).</em></p>

                    <p style="text-align:justify">HDV chia tay Quý khách và kết thúc chương trình, hẹn gặp lại quý khách!</p>
                    </div>
                    </div>
                    </div>', 
                'trangthaitour'=>1
            ),
            array(
                'users_id'=>5, 
                'tentour'=>'Tour Du Lịch: Phú Quốc | Vương Quốc Ngọc Trai', 
                'place_id'=>5, 
                'sokhachtoida'=>4, 
                'songaydi'=>3, 
                'hinhanh'=> 'IGkC_22-1-2.jpg',
                'giatour' => 4400000, 
                'mota' => '<div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 1</div>

                    <div class="fa fa-plane vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">SÂN BAY TÂN SƠN NHẤT - PHÚ QUỐC</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-nam/phu-quoc/hinh-noi-dung-tour/safari-vinpearl-dinh-cau.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p><span style="color:rgb(68, 68, 68)"><strong>Sáng:</strong>&nbsp;HDV Đất Việt đón khách tại sân bay<strong>&nbsp;Tân Sơn Nhất</strong>&nbsp;làm thủ tục khởi hành đón&nbsp;<strong>chuyến&nbsp;bay Vietnam Airlines lúc 09h45</strong>. Xe và HDV đón quý khách tại sân bay&nbsp;<strong>Phú Quốc</strong>, đưa đoàn thăm quan<strong>&nbsp;Dinh Cậu, Thủy Long Thánh Mẫu -</strong>&nbsp;Biểu tượng tính ngưỡng của người dân hải đảo, nơi họ tìm đến khấn nguyện cho mỗi chuyến ra khơi.</span></p>

                    <p><span style="color:rgb(68, 68, 68)"><strong>Trưa:</strong>&nbsp;Đoàn dùng b</span><span style="color:rgb(68, 68, 68)">ữa trưa tại nhà hàng với món đặc sản địa phương Gỏi Cá Trích, sau đó về khách sạn nhận phòng nghỉ ngơi.</span></p>

                    <p><span style="color:rgb(68, 68, 68)"><strong>Chiều:</strong>&nbsp;Quý khách có thể chọn lựa các điểm tham quan dưới đây:</span></p>

                    <ul>
                        <li><span style="color:rgb(68, 68, 68)"><strong>Vườn Thú Mở - Vinpearl Safari Phú Quốc:</strong>&nbsp;Mô hình Safari Singapore Công viên Chăm sóc và Bảo tồn Động vật được xây dựng theo mô hình bán hoang dã. Trong đó, các động vật quý hiếm được đảm bảo chăm sóc và bảo tồn trong môi trường thiên nhiên mở.</span></li>
                        <li><span style="color:rgb(68, 68, 68)"><strong>Vinpearl Land:</strong>&nbsp;Nơi đây&nbsp;được ví như một "Disneyland" với nhiều trò chơi trong nhà,&nbsp;ngoài trời, chương trình hoạt náo, lễ hội đường phố,&nbsp;rạp chiếu phim 5D, phố mua sắm,&nbsp;ẩm thực đường phố.</span></li>
                        <li><span style="color:rgb(68, 68, 68)">Du khách thưởng thức chương trình nhạc nước hoành tráng nhất Đông Nam Á, biểu diễn cá heo, chương trình nàng tiên cá, lễ hội đường phố, hoạt náo đường phố…&nbsp;<em>(Chi phí tham quan tự túc - Giá vé tham khảo 500.000 VNĐ. Di chuyển tới KDL Vinpearl/ Safari bằng xe trung chuyển của KDL).</em></span></li>
                    </ul>

                    <p><span style="color:rgb(68, 68, 68)"><strong>Tối:</strong>&nbsp;Quý khách dùng bữa tối tại nhà hàng, nghỉ ngơi tự do và dạo phố biển.</span></p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 2</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">TRUNG TÂM NUÔI CẤY NGỌC TRAI - NHÀ TÙ PHÚ QUỐC - NAM ĐẢO - TẮM BIỂN - CÂU CÁ</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-nam/phu-quoc/hinh-noi-dung-tour/bai-sao-nha-tu.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p><span style="color:rgb(68, 68, 68)"><strong>Sáng:</strong>&nbsp;Quý khách dậy sớm ngắm cảnh bình minh, đi dạo,&nbsp;dùng điểm tâm sáng, sau đó đoàn lên tàu ra khơi câu cá.</span></p>

                    <ul>
                        <li><span style="color:rgb(68, 68, 68)"><strong>Câu cá biển Đông,&nbsp;lặn ngắm san hô,&nbsp;khám phá đảo hoang Phú Quốc:&nbsp;</strong>Đoàn được cung cấp thiết bị câu cá (Dây câu, mồi),&nbsp;được trang bị áo phao, kính lặn, ống thở khi tham gia lặn biển ngắm san hô. Đoàn dùng cơm trưa trên tàu, sau đó về khách sạn nghỉ ngơi.</span></li>
                    </ul>

                    <p><span style="color:rgb(68, 68, 68)"><strong>Trưa:</strong>&nbsp;Đoàn khởi hành&nbsp;đi tham quan Nam Đảo</span></p>

                    <ul>
                        <li><span style="color:rgb(68, 68, 68)"><strong>Khu nuôi cấy Ngọc Trai:</strong>&nbsp;Một trong những nét đặc trưng mà du khách không thể bỏ qua khi đến với Phú Quốc.</span></li>
                        <li><span style="color:rgb(68, 68, 68)"><strong>Khu di tích lịch sử Nhà Tù Phú Quốc:</strong>&nbsp;Được mệnh danh là địa ngục trần gian, nơi đã từng trải qua hai thời kỳ chống&nbsp;thực dân Pháp và đế quốc Mỹ.</span></li>
                        <li><span style="color:rgb(68, 68, 68)"><strong>Tắm biển tại Bãi Sao:</strong>&nbsp;Một trong những bãi biển với làn nước xanh biếc, bờ&nbsp;cát trắng mịn nổi tiếng tại Phú Quốc.</span></li>
                        <li><span style="color:rgb(68, 68, 68)">Thăm quan,&nbsp;viếng&nbsp;<strong>Chùa Hộ Quốc&nbsp;</strong><em>(Thiền Viện Trúc Lâm Hộ Quốc)</em>.</span></li>
                    </ul>

                    <p><span style="color:rgb(68, 68, 68)"><strong>Tối:&nbsp;</strong>Quý khách dùng cơm tối&nbsp;hoặc&nbsp;có thể đặt tour Câu mực đêm&nbsp;<em>(Chi phí tự túc)</em>&nbsp;để tận hưởng trọn vẹn hơn vẻ đẹp Phú Quốc về đêm.</span></p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 3</div>

                    <div class="fa fa-plane vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 0px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">MUA SẮM - CHIA TAY PHÚ QUỐC</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-nam/phu-quoc/hinh-noi-dung-tour/vuon-tieu-suoi-tranh-mua-sam.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p><span style="color:rgb(68, 68, 68)"><strong>Sáng:</strong>&nbsp;Quý khách dùng điểm tâm, tắm biển tự&nbsp;do, trả phòng.</span></p>

                    <p><span style="color:rgb(68, 68, 68)">Xe đưa đoàn tham quan chùa<strong>&nbsp;Sùng Hưng Cổ Tự</strong>&nbsp;viếng hương,&nbsp;<strong>Nhà thùng lâu đời nước mắm cá cơm truyền thống, Vườn Tiêu Suối Đá, Vườn sim,&nbsp;Suối tranh</strong>&nbsp;<em>(Nước nhiều từ tháng 06 -&nbsp;tháng 11 trong năm)</em>,&nbsp;Cơ sở sản xuất hải sản khô,<strong>&nbsp;Làng chài Hàm Ninh</strong>&nbsp;<em>(Nơi có nhiều hải sản tươi sống với giá cả hợp lý)</em>.</span></p>

                    <p><span style="color:rgb(68, 68, 68)"><strong>Trưa:</strong>&nbsp;Ăn cơm trưa tại nhà hàng.</span></p>

                    <p><span style="color:rgb(68, 68, 68)">Xe và HDV đưa quý khách ra sân bay Phú Quốc, chào tạm biệt và chia tay quý khách.</span></p>

                    <p><span style="color:rgb(68, 68, 68)">Kết thúc chương trình Phú Quốc&nbsp;<strong>3 ngày 2 đêm</strong>,&nbsp;hẹn gặp lại du khách trong chuyến hành trình tiếp theo.</span></p>

                    <p><span style="color:rgb(68, 68, 68)">Chuyến bay Vietnam Airlines lúc 17h45 về lại Thành phố Hồ Chí Minh.</span></p>
                    </div>
                    </div>
                    </div>', 
                'trangthaitour'=>1
            ),
            array(
                'users_id'=>2, 
                'tentour'=>'Tour Du Lịch: Hà Tiên | Phú Quốc', 
                'place_id'=>2, 
                'sokhachtoida'=>3, 
                'songaydi'=>3, 
                'hinhanh'=> 'HPnQ_bien_800.jpg',
                'giatour' => 3086000, 
                'mota' => '<div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 1</div>

                    <div class="fa fa-train vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">TPHCM - HÀ TIÊN - PHÚ QUỐC</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-tay/H%C3%A0%20ti%C3%AAn-c%E1%BA%A7n%20th%C6%A1/mientay-hatien-ngay-2.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Tối:</strong>&nbsp;20h00 xe và hướng dẫn viên Đất Việt Tour đón quý khách tại điểm hẹn khởi hành đi Hà Tiên. Quý khách nghỉ ngơi trên xe.</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Hà Tiên&nbsp;- Phú Quốc</strong></span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Sáng</strong>: Đến thị xã&nbsp;Hà Tiên, đoàn dùng bữa sáng, làm thủ tục lên tàu cao tốc đi Phú Quốc. Đến bến tàu Phú Quốc, xe đón quý khách tại bến tàu. Quý khách sẽ được tham quan tại các địa điểm sau đây:</span></p>

                    <ul>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Làng chài Hàm Ninh:</strong>&nbsp;Quý khách có dịp tìm hiểu về cuộc sống của ngư dân nơi biển đảo, thưởng thức hải sản tươi ngon.</span></li>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>KDL Suối Tranh</strong>: Du khách có thể tắm suối, đắm mình ở những làn nước trong vắt, mát lạnh, ngả mình trên những tảng đá bằng phẳng nghe tiếng suối chảy róc rách, tiếng chim kêu trong bầu không khí thỏang hương hoa rừng bên suối. Khách du lịch có thể cắm trại, câu và nướng cá, thưởng thức tại chỗ rất thú vị.</span></li>
                    </ul>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Trưa</strong>: Xe đón quý khách khởi hành về nhà hàng dùng cơm trưa. Nhận phòng khách sạn nghỉ ngơi.</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Chiều</strong>: Quý khách có 2 lựa chọn tham quan các địa điểm sau:</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Lựa chọn 1:</strong></span></p>

                    <ul>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Dinh Cậu:</strong>&nbsp;Nơi thờ cúng tâm linh của ngư dân miền biển, ngắm nhìn, chụp ảnh phong cảnh biển đảo Phú Quốc.</span></li>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Chùa Sùng Hưng&nbsp;(Sùng Hưng Cổ Tự):</strong>&nbsp;Là một ngôi chùa lâu đời nhất ở huyện Phú Quốc, một trong những ngôi chùa nổi tiếng nhất nơi xứ đảo. Quý khách cùng thắp hương và cầu nguyện cho gia đình an lành, hạnh phúc.</span></li>
                    </ul>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Lựa chọn 2</strong>: Quý khách tự túc đi bằng xe trung chuyển tham quan và vui chơi tại khu vui chơi giải trí đạt tiêu chuẩn 5 sao quốc tế Vinpearl land Phú Quốc với các trò chơi cảm giác mạnh từ trong nhà cho đến ngoài trời. (Chi phí tự túc 500.000 VNĐ/ Khách).</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Tối:</strong>&nbsp;Quý khách dùng bữa tối tại nhà hàng, nghỉ ngơi tự do và dạo phố biển.</span></p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 2</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">BÃI SAO - TẮM BIỂN - CÂU CÁ</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-tay/c%E1%BA%A7n%20th%C6%A1-ph%C3%BA%20qu%E1%BB%91c-r%E1%BA%A1ch%20gi%C3%A1/mi___n_t__y-ng__y-3.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Sáng:</strong>&nbsp;Đoàn dùng điểm tâm Buffet tại khách sạn. Sau đó, xe đưa quý khách khởi hành đi Nam Đảo.</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)">Trên đường di chuyển, quý khách cùng tham quan:</span></p>

                    <ul>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Khu nuôi cấy ngọc trai:&nbsp;</strong>Là một trong những nét đặc trưng mà du khách không thể bỏ qua khi đến với Phú Quốc.</span></li>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Tắm biển tại Bãi Sao:</strong>&nbsp;Đây là một trong những bãi biển với làn nước xanh biếc, bờ&nbsp;cát trắng mịn nổi tiếng tại Phú Quốc.</span></li>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Câu cá Biển Đông - Lặn ngắm San Hô - Khám phá đảo hoang Phú Quốc:</strong>&nbsp;Đoàn được cung cấp thiết bị câu cá (Dây câu, mồi) và được trang bị áo phao, kính lặn, ống thở khi tham gia lặn biển ngắm san hô.&nbsp;</span></li>
                    </ul>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Trưa:</strong>&nbsp;Đoàn dùng cơm trưa hết sức dân dã, gần gũi với thiên nhiên ngay trên tàu.</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Chiều:</strong>&nbsp;Về khách sạn nghỉ ngơi. Trên đường về quý khách tham quan khu di tích&nbsp;lịch sử nhà tù Phú Quốc:&nbsp;Được mệnh danh là địa ngục trần gian, nơi đã từng trải qua hai thời kỳ chống&nbsp;thực dân Pháp và đế quốc Mỹ.</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)">&nbsp;Đặc sản: Rượu sim, Nước mắm Phú Quốc về làm quà&nbsp;cho người thân.</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)">&nbsp;Quý khách nghỉ ngơi tại khách sạn.</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Tối:</strong>&nbsp;Đoàn dùng bữa tại nhà hàng. Quý khách nghỉ ngơi hoặc tham quan chợ đêm.</span></p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 3</div>

                    <div class="fa fa-train vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 0px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">MUA SẮM - CHIA TAY PHÚ QUỐC</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-tay/c%E1%BA%A7n%20th%C6%A1-ph%C3%BA%20qu%E1%BB%91c-r%E1%BA%A1ch%20gi%C3%A1/mi___n_t__y-ng__y-5.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Sáng:&nbsp;</strong>Quý khách dùng điểm tâm Buffet tự do&nbsp;hoặc mua sắm tại chợ Dương Đông. Đoàn làm thủ tục trả phòng, sau đó di chuyển ra bến tàu&nbsp;về lại đất liền.</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>11h00:</strong>&nbsp;Về đến Rạch Giá, dùng cơm trưa tại nhà hàng.</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>12h00:</strong>&nbsp;Tiếp tục hành trình về lại Thành phố Hồ Chí Minh, kết thúc chương trình tham quan.</span></p>
                    </div>
                    </div>
                    </div>', 
                'trangthaitour'=>1
            ),
            array(
                'users_id'=>2, 
                'tentour'=>'Tour Du Lịch: Long Hải | Nghỉ Dưỡng Resort Oceannami 5 Sao', 
                'place_id'=>2, 
                'sokhachtoida'=>2, 
                'songaydi'=>2, 
                'hinhanh'=> 'KxhB_oceanami-villas-1.jpg',
                'giatour' => 2186000, 
                'mota' => '<div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 1</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">TP.HCM - LONG HẢI - OCEANNAMI RESORT</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-nam/long-hai/hinh-noi-dung-tour/1.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Sáng:</strong>&nbsp;Xe và HDV Đất Việt Tour đón khách tại điểm hẹn. Khởi hành đi Long Hải, Qúy&nbsp;khách dừng chân dùng bữa sáng tại nhà hàng.</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)">Đoàn ghé tham quan và chụp ảnh với đàng cừu tại&nbsp;<strong>Đồng Cừu Suối Nghệ:&nbsp;</strong>là một trong những địa điểm rất hot với các bạn trẻ yêu thích chụp ảnh gần đây. Đoàn tham quan&nbsp;<strong>Núi Minh Đạm</strong>&nbsp;với những di tích lịch sử thời kháng chiến chống Pháp, Mỹ.</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)">Xe đưa đoàn đến nhà hàng dùng cơm trưa.Tiếp tục đến với khu biệt thự nghĩ dưỡng cao cấp Oceannami Resort nhận phòng, nghĩ ngơi.</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Chiều:</strong>&nbsp;Qúy khách tự do tắm biển, hồ bơi và sử dụng các dịch vụ cao cấp tại đây.</span></p>

                    <ul>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)">Dream Beach Club và Rooftop Bar có sức chứa lên đến 1.000 người.</span></li>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)">Tổ hợp Spa phong cách Thổ Nhĩ Kỳ với 30 phòng.</span></li>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)">Hồ bơi Infinity với tổng diện tích mặt nước gần 3.000 m<span style="font-size:12px">2</span>.</span></li>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)">Công Viên Giải Trí sát biển 21.000 m<span style="font-size:12px">2</span>.</span></li>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)">Trung tâm Fitness &amp; Yoga với tầm nhìn hướng biển được trang bị đầy đủ thiết bị hiện đại.</span></li>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)">Thư viện cộng đồng, CLB Bida.</span></li>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)">Rạp chiếu phim 3 Nhà hàng ẩm thực Á – Âu.</span></li>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)">Quảng Trường Nhạc Nước là nơi tổ chức các hoạt động văn hoá ngoài trời rộng 3.000 m<span style="font-size:12px">2</span>.</span></li>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)">Khu vui chơi giải trí nước và công viên mê cung dành riêng cho trẻ em.</span></li>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)">Cửa hàng tiện ích và các Shophouse.</span></li>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)">Các tiện ích dịch vụ thể thao biển: Leo núi, dù lượn jetski, ..</span></li>
                    </ul>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)">Giữa không gian thoáng đãng tại&nbsp;<strong>Oceanami Resort</strong>, một bên là núi và một bên là biển, bạn sẽ có một nơi lý tưởng ngay tại biệt thự nghĩ dưỡng của chính mình để thư giãn,&nbsp; nghe tiếng sóng biển vỗ rì rào, xóa tan hết những mệt mỏii sau những buổi làm việc căng thẳng.</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Tối:&nbsp;</strong>Qúy khách nghỉ đêm tại resort.</span></p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 2</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 0px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">LONG HẢI - SÀI GÒN</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-nam/long-hai/hinh-noi-dung-tour/2.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Sáng:</strong>&nbsp;Qúy khách dùng bữa sáng tại nhà hàng trong khu resort. Tự do tắm biển, vui chơi, thư giãn tại đây.</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Trưa</strong>: Làm thủ tục trả phòng, xe đưa đoàn đến nhà hàng dùng bữa trưa.</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)">Khởi hành về Sài Gòn đến Long Thành tham quan&nbsp;ngôi chùa đặc sắc với nhiều tượng phật được ghi nhận kỷ lục. Dừng chân tại trung tâm mua sắm Long Thành. Qúy khách có thể mua các món đặc sản được làm từ bò sữa về làm quà cho người thân.</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Chiều:&nbsp;</strong>Về lại điểm đón ban đầu chia tay và hẹn gặp lại.</span></p>
                    </div>
                    </div>
                    </div>', 
                'trangthaitour'=>1
            ),
            array(
                'users_id'=>1, 
                'tentour'=>'Tour Du Lịch: Hành Hương Thập Cảnh Tự Miền Tây', 
                'place_id'=>3, 
                'sokhachtoida'=>2, 
                'songaydi'=>1, 
                'hinhanh'=> 'gasi_tour-du-lich-hanh-huong-thap-canh-tu-mien-tay-1-ngay-2.jpg',
                'giatour' => 586000, 
                'mota' => '<div class="timeline-left" style="box-sizing: border-box; width: 90px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 1</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">TP.HCM - LONG AN - BẾN TRE - MỸ THO - TIỀN GIANG - TP.HCM</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/thang-canh/tour-du-lich-hanh-huong-vieng-thap-canh-tu-vung-tau-1-ngay__1_.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Buổi Sáng: TP.HCM -&nbsp;LONG AN -&nbsp;BẾN TRE&nbsp; -&nbsp; MỸ THO</strong></p>

                    <p style="text-align:justify"><strong><u>Sáng:</u></strong>&nbsp;Xe và HDV đón Qúy khách tại điểm hẹn, khởi hành chuyến đi đầu năm đến viếng 10 chùa Miền Tây.</p>

                    <p style="text-align:justify">Trên đường di chuyển, quý khách dừng chân dung bữa sáng. Sau đó tiếp tục hành trình cầu phúc – lộc đầu năm.</p>

                    <ul>
                        <li style="text-align:justify"><strong>Tu Viện Tường Vân</strong>: Tọa lạc tại thị trấn Tân Túc, Bình Chánh, là tu viện trang nghiêm bề thế, thường xuyên khai mở nhiều khóa tu học cho Phật tử, hướng dẫn Phật tử đến đời sống tâm linh an lạc.</li>
                        <li style="text-align:justify"><strong>Chùa Phước Bảo</strong>: Chùa tọa lạc tại xã Thạnh Đức, huyện Bến Lức, tỉnh Long An. Chùa do Ni Sư Thích Nữ Như Phương sáng lập vào năm 1969. Ngoài việc đào tạo Tăng Ni sinh để có lực lượng kế thừa Phật pháp, chùa cũng rất quan tâm đến việc hướng dẫn Phật tử tại gia tu học.</li>
                        <li style="text-align:justify"><strong>Chùa Thiên Khánh</strong>: Một ngôi chùa nổi tiếng ở Long An, chùa thuộc hệ phái Bắc tông. Chùa được Hòa thượng Thích Pháp Lưu thành lập vào năm 1911, được trùng tu nhiều lần và hiện nay rất kiên cố, khang trang.</li>
                        <li style="text-align:justify"><strong>Chùa Phật Minh</strong>: Tọa lạc trên con đường ngoằn ngoèo, dưới những hàng dừa xanh, chùa Phật Minh (xã Giao Hòa, huyện Châu Thành, tỉnh Bến Tre) do Sư cô Thích nữ Ngộ Mai làm trụ trì nép mình dưới những tán cây, nhưng lại là mái ấm tình thương, nơi chở che của hơn 80 mảnh đời bất hạnh, mồ côi. Đoàn dâng lễ chùa và làm từ thiện (tuỳ tâm).</li>
                    </ul>

                    <p><strong>Buổi Chiều: TIỀN GIANG&nbsp; -&nbsp;TP.HCM</strong></p>

                    <p><strong><u>Trưa:</u></strong>&nbsp;Đoàn dùng cơm trưa tại nhà hàng. Sau đó tiếp tục hành trình:</p>

                    <ul>
                        <li style="text-align:justify"><strong>Chùa Phổ Đức</strong>&nbsp;nằm ở phía cửa ngõ đường vào thành phố Mỹ Tho. Chùa Phổ Đức là nơi nuôi dưỡng chở đào tạo một số lượng lớn Ni sinh để họ làm việc phục vụ cho Giáo hội. Ngoài ra chùa còn tổ chức khóa tu cho Phật tử tu tập vào ngày mùng 1 mỗi tháng.</li>
                        <li style="text-align:justify"><strong>Chùa Pháp Bảo</strong>: Ngôi chùa tọa lạc ngay khu đô thị thành phố Mỹ Tho, là ngôi chùa Phật giáo Nguyên thủy độc đáo tại Tiền Giang. Chùa được xây dựng năm 1967 do Hòa thượng Pháp Lạc đặt đá xây dựng. Hiện nay chùa rất khang trang, thoáng mát thu hút nhiều Phật tử đến lễ bái và tu học.</li>
                        <li style="text-align:justify"><strong>Chùa Bửu Lâm Cổ Tự</strong>: Ngôi chùa có kiến trúc cổ tiêu biểu nhất thế kỷ 19 ở ĐBSCL. Nơi đây từng là cơ sở cách mạng vững chắc của Thị Ủy Mỹ Tho trong 2 cuộc kháng chiến chống Pháp và Mỹ xâm lược. Chùa cũng là nơi hoạt động của nhiều nhà yêu nước nổi tiếng như Nguyễn Sinh Sắc (thân sinh Chủ Tịch Hồ Chí Minh), Phan Chu Trinh.</li>
                    </ul>

                    <ul>
                        <li style="text-align:justify"><strong>Chùa Vĩnh Tràng</strong>&nbsp;một ngôi chùa nổi tiếng ở Nam Bộ, mang dáng vẻ kiến trúc châu Á pha lẫn châu Âu, và là một điểm hành hương và du lịch nổi tiếng. Chùa Vĩnh Tràng là ngôi chùa thờ phật lớn nhất tỉnh Tiền Giang, hiện còn bảo tồn 60 tượng quý.</li>
                        <li style="text-align:justify"><strong>Chùa Linh Phong</strong>: tọa lạc tại thị trấn Tân Hiệp, huyện Châu Thành, tỉnh Tiền Giang, Chùa thuộc hệ phái Bắc tông, hiện còn lưu giữ được một số pho tượng cổ.</li>
                    </ul>
                    </div>
                    </div>', 
                'trangthaitour'=>1
            ),
            array(
                'users_id'=>3, 
                'tentour'=>'Tour Du Lịch: Mỹ Tho | Cần Thơ | Bạc Liêu | Cà Mau', 
                'place_id'=>4, 
                'sokhachtoida'=>5, 
                'songaydi'=>4, 
                'hinhanh'=> 'Ftwd_cao-van-lau-1.jpg',
                'giatour' => 3486000, 
                'mota' => '<div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 1</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">TP.HCM - MỸ THO - CẦN THƠ</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-nam/ca-mau/hinh-noi-dung-tour/tour-ca-mau__2_.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p><span style="color:rgb(68, 68, 68)"><strong>Sáng:&nbsp;</strong>Xe và hướng dẫn viên đón du khách tại điểm hẹn, khởi hành đi Mỹ Tho, dùng điểm tâm tại Trung Lương.</span></p>

                    <p><span style="color:rgb(68, 68, 68)"><strong>08h30:&nbsp;</strong>Quý khách đến bến đò 30/4, thuyền đưa quý khách trải nghiệm văn hóa sông nước&nbsp;<strong>Cù Lao Thới Sơn</strong>&nbsp;nằm cạnh dòng sông Tiền hiền hòa. Du khách có dịp đến với vùng cù lao mang đậm nét dân dã của người dân miền sông nước, cùng nghe<strong>&nbsp;Đờn ca tài tử, chèo xuồng ba lá, uống mật ong, thường thức trái cây</strong>, tìm hiểu về phong tục, tập quán, văn hóa của xứ&nbsp;dừa.</span></p>

                    <p><span style="color:rgb(68, 68, 68)"><strong>11h30:</strong>&nbsp;Dùng cơm trưa,<strong>&nbsp;nghe nhạc tài tử, tham quan lò kẹo dừa, kẹo chuối, mua quà lưu niệm</strong>.</span></p>

                    <p><span style="color:rgb(68, 68, 68)"><strong>13h00:</strong>&nbsp;Thuyền đưa du khách trở lại Bến Tàu 30/4,&nbsp;khởi hành đi&nbsp;<strong>Cần Thơ</strong>.</span></p>

                    <p><span style="color:rgb(68, 68, 68)"><strong>16h00:</strong>&nbsp;Đến Cần Thơ nhận phòng.</span></p>

                    <p><span style="color:rgb(68, 68, 68)"><strong>18h00:</strong>&nbsp;Xe đưa du khách đến bến<strong>&nbsp;Ninh Kiều</strong>: Du thuyền đưa khách dạo<strong>&nbsp;Sông Hậu&nbsp;</strong>thưởng thức Đờn ca tài tử và dùng cơm tối trên tàu.</span></p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 2</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">CẦN THƠ - SÓC TRĂNG - CÀ MAU</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-nam/ca-mau/hinh-noi-dung-tour/tour-ca-mau__3_.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p><span style="color:rgb(68, 68, 68)"><strong>Sáng:</strong>&nbsp;Xe đưa du khách đến bến<strong>&nbsp;Ninh Kiều</strong>, HDV sẽ&nbsp;cùng&nbsp;du khách đi thuyền&nbsp;tham quan và tìm hiểu đời sống trên sông của người dân miền sông nước ở Chợ nổi Cái Răng.</span></p>

                    <p><span style="color:rgb(68, 68, 68)"><strong>Chợ nổi Cái Răng&nbsp;</strong>là&nbsp;nét đặc trưng kiểu chợ vùng sông nước. Phải từ rất sớm người dân từ mọi nơi đã đổ về tập trung tại Chợ để buôn bán, trao đổi hàng hóa cho nhau với nhiều chủng loại phong phú như: Xoài, nhãn, sầu riêng, măng cụt, chôm chôm, dưa, khoai ....Trên những chiếc xuồng bấp bênh, người dân vội vã&nbsp;và mong muốn sớm bán hết hàng hóa để kịp khi ánh bình minh lên họ lại trở về với công việc đồng áng hàng ngày của mình.&nbsp;</span></p>

                    <p><span style="color:rgb(68, 68, 68)"><strong>07h00:</strong>&nbsp;Về lại khách sạn, dùng điểm tâm.</span></p>

                    <p><span style="color:rgb(68, 68, 68)"><strong>08h00:</strong>&nbsp;Xe đưa du khách đi&nbsp;<strong>Sóc Trăng</strong>. Tham quan&nbsp;<strong>Chùa Dơi</strong>,&nbsp;<strong>Chùa Đất Sét, Bảo Tàng Dân Tộc KhơMer, Chùa Kơ’Leng</strong>.</span></p>

                    <p><span style="color:rgb(68, 68, 68)"><strong>12h00:&nbsp;</strong>Về nhà hàng dùng cơm trưa.</span></p>

                    <p><span style="color:rgb(68, 68, 68)"><strong>13h00:&nbsp;</strong>Tiếp tục lộ trình đi&nbsp;<strong>Cà Mau</strong>, viếng nhà thờ cha&nbsp;<strong>Diệp ở Hộ Phòng,&nbsp;</strong>đến&nbsp;<strong>Cà Mau</strong>&nbsp;nhận phòng khách sạn và nghỉ ngơi.</span></p>

                    <p><span style="color:rgb(68, 68, 68)"><strong>Tối:</strong>&nbsp;Dùng cơm chiều. Nghỉ đêm tại&nbsp;<strong>Cà Mau.</strong></span></p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 3</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">CÀ MAU - ĐẤT MŨI - BẠC LIÊU</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-nam/ca-mau/hinh-noi-dung-tour/tour-ca-mau__4_.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p><span style="color:rgb(68, 68, 68)"><strong>Sáng:</strong>&nbsp;Dùng điểm tâm tại nhà hàng.&nbsp;<strong>07h30</strong>: Xe đưa du khách đến khu vực bắt đầu hành trình tham quan&nbsp;<strong>Khu Căn Cứ Rừng Đước.</strong>&nbsp;Nghe kể chuyện Bác Ba Phi, tiếp tục đến vùng&nbsp;<strong>Đất Mũi&nbsp;</strong><em>(Vùng Cực Nam Tổ Quốc)</em>&nbsp;chụp hình lưu niệm.</span></p>

                    <p><span style="color:rgb(68, 68, 68)"><strong>Trưa:</strong>&nbsp;Quý khách dùng cơm trưa tại nhà hàng&nbsp;<strong>Thủy Tạ Cà Mau</strong>.&nbsp;</span></p>

                    <p><span style="color:rgb(68, 68, 68)"><strong>Chiều:</strong>&nbsp;Đoàn rời Cà Mau đi Bạc Liêu, tới Bạc Liêu tham quan:&nbsp;<strong>Nhà Công Tử Bạc Liêu</strong>, khu lưu niệm cố nhạc sĩ&nbsp;<strong>Cao Văn Lầu -</strong>&nbsp;Tác giả bài Dạ cổ Hoài Lang, Người có công lớn trong nền dân ca tài tử cải lương Nam Bộ.&nbsp;Sau đó, đoàn về khách sạn nhận phòng nghỉ đêm.</span></p>

                    <p><span style="color:rgb(68, 68, 68)"><strong>Tối:</strong>&nbsp;Xe đưa đến nhà hàng dùng cơm chiều. Du khách đi dạo Bạc Liêu về đêm.</span></p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 4</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 0px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">BẠC LIÊU - CẦN THƠ - MỸ KHÁNH - SÀI GÒN</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-nam/ca-mau/hinh-noi-dung-tour/tour-ca-mau__1_.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p><span style="color:rgb(68, 68, 68)"><strong>Sáng</strong>: Dùng điểm tâm tại nhà hàng. Làm thủ tục trả phòng.&nbsp;<strong>08h00:</strong>&nbsp;Khởi hành về&nbsp;<strong>Cần Thơ</strong>, ghé tham quan<strong>: Vườn trái cây - Làng du lịch Mỹ Khánh.</strong></span></p>

                    <p><span style="color:rgb(68, 68, 68)"><strong>Trưa:</strong>&nbsp;Dùng cơm trưa tại nhà hàng.</span></p>

                    <p><span style="color:rgb(68, 68, 68)"><strong>Chiều:</strong>&nbsp;Về đến&nbsp;<strong>Sài Gòn</strong>, xe đưa quý khách về lại điểm đón. Chào tạm biệt và hẹn gặp lại quý khách.</span></p>
                    </div>
                    </div>
                    </div>', 
                'trangthaitour'=>1
            ),
            array(
                'users_id'=>4, 
                'tentour'=>'Tour du lịch: Mỹ Tho | Cần Thơ | Làng Du Lịch Mỹ Khánh', 
                'place_id'=>1, 
                'sokhachtoida'=>3, 
                'songaydi'=>2, 
                'hinhanh'=> 'QrdV_S__i-G__n-M___-Tho-B___n-Tre-C___n-Th__-2.jpg',
                'giatour' => 1386000, 
                'mota' => '<div class="list-timeline" style="box-sizing: border-box; margin-top: 25px; overflow: hidden; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; height: auto;">
                    <div class="timeline" style="box-sizing: border-box; display: flex;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 1</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">NGÀY 1: TIỀN GIANG - CẦN THƠ</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/uploads/wo41.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><span style="font-size:14px"><span style="color:rgb(68, 68, 68)"><strong>Sáng:&nbsp;</strong>Xe và hướng dẫn viên của&nbsp;<strong>Du lịch Đất Việt</strong>&nbsp;đón quý khách tại điểm hẹn, sắp sếp hành lý vị trí ghế ngồi cho quý khách, khởi hành đi&nbsp;<strong>Cần Thơ</strong><strong>.</strong>Xe dọc theo quốc lộ 1A xuôi về miền Đồng bằng sông Cửu Long. Đến với&nbsp;<strong>Tiền Giang</strong>&nbsp;quý khách dừng chân dùng điểm tâm với đặc sản hủ tiếu Mỹ Tho. Tiếp tục chương trình xe đưa quý khách vào trung tâm&nbsp;<strong>TP.</strong>&nbsp;<strong>Mỹ Tho</strong>&nbsp;bắt đầu tham quan thắng cảnh nơi đây.</span></span></p>

                    <ul>
                        <li style="text-align:justify"><span style="font-size:14px"><span style="color:rgb(68, 68, 68)"><strong>Chùa Vĩnh Tràng</strong>là&nbsp;một trong những ngôi chùa cổ nhất và lớn nhất miền Tây với những pho tượng uy nghi và kiến trúc xây dựng mang phong cách pha lẫn Á, Âu đã tạo nên một ngôi chùa mang tính nghệ thuật điêu khắc rất lớn.</span></span></li>
                        <li style="text-align:justify"><span style="font-size:14px"><span style="color:rgb(68, 68, 68)"><strong>Cù lao Thới Sơn</strong>&nbsp;nằm bên cạnh dòng sông Tiền hiền hòa, du khách có dịp đến với vùng cù lao mang đậm nét dân dã của người dân miền sông nước, cùng nghe đờn ca tài tử, chèo xuồng ba lá, uống mật ong, thưởng thức trái cây<strong>,</strong>&nbsp;tìm hiểu về phong tục, tập quán, văn hóa của xứ sở nhiều dừa.</span></span></li>
                    </ul>

                    <p style="text-align:justify"><span style="font-size:14px"><span style="color:rgb(68, 68, 68)"><strong>Trưa:</strong>&nbsp;Đoàn dùng bữa trưa tại nhà hàng trên cù lao với nhiều món ăn đặc sản địa phương.</span></span></p>

                    <p style="text-align:justify"><span style="font-size:14px"><span style="color:rgb(68, 68, 68)"><strong>Chiều:</strong>&nbsp;Chia tay với người dân xứ Cù Lao, quý khách tiếp tục hành trình đi&nbsp;<strong>Cần Thơ</strong>. Quý khách nhận phòng khách sạn nghỉ ngơi.</span></span></p>

                    <p style="text-align:justify"><span style="font-size:14px"><span style="color:rgb(68, 68, 68)"><strong>Tối:</strong>&nbsp;Xe đưa đoàn xuống&nbsp;<strong>Bến Ninh Kiều</strong>, lên tàu dùng cơm tối&nbsp;<strong>thưởng ngoại sông Hậu</strong>&nbsp;và cùng thưởng thức nghệ thuật đờn ca tài tử với những chất giọng ấm cúng trữ tình đậm chất miền Tây Nam Bộ. Đoàn tự do&nbsp;<strong>dạo bến Ninh Kiều</strong>.</span></span></p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 2</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 0px;">
                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;">CHỢ NỔI CÁI RĂNG - LÀNG DU LỊCH MỸ KHÁNH - TP. HCM</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;"><img src="https://datviettour.com.vn/uploads/images/mien-tay/cairang-mykhanh.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" /></div>

                    <p style="text-align:justify"><span style="font-size:14px"><span style="color:rgb(68, 68, 68)"><strong>Sáng:</strong>&nbsp;Quý khách dùng điểm tâm sáng tại khách sạn, bắt đầu tham quan, tìm hiểu văn hóa của người dân Cần Thơ.&nbsp;</span></span></p>

                    <p style="text-align:justify"><span style="font-size:14px"><span style="color:rgb(68, 68, 68)">Khi nhắc đến&nbsp;<strong>chợ nổi Cái Răng</strong>, người ta lại nhớ đến câu thơ ngọt ngào:</span></span></p>

                    <p style="text-align:center"><span style="font-size:14px"><span style="color:rgb(68, 68, 68)">
                        "Chợ đã nổi từ nửa đêm về sáng<br />
                        Ta vẫn chìm từ giữa bữa hoàng hôn<br />
                        Em treo bẹo Cái Răng Ba Láng<br />
                        Ta thương hồ Vàm Xáng Cần Thơ".</span></span></p>

                    <p><span style="font-size:14px"><span style="color:rgb(68, 68, 68)">&nbsp;Phải từ rất sớm người dân từ mọi nơi đã đổ về tập trung tại chợ để buôn bán trao đổi hàng hóa cho nhau nào là: Xoài, nhãn, sầu riêng, măng cụt, chôm chôm, dưa, khoai… trên những chiếc xuồng bấp bênh. Người dân vội vã và mong muốn sớm bán hết hàng hóa để kịp khi ánh bình minh lên họ lại trở về với công việc đồng áng hàng ngày của mình. Chợ nổi đại diện cho văn hóa Miền Tây sông nước.</span></span></p>

                    <p><span style="font-size:14px"><span style="color:rgb(68, 68, 68)"><strong>&nbsp;</strong><strong>Làng du lịch Mỹ Khánh</strong>&nbsp;được ví von như một Nam Bộ thu nhỏ. Tại đây quý khách sẽ cảm nhận được sự thoáng mát, trong lành bởi không gian miệt vườn, tham quan vườn rộng hơn 8 hecta với hơn nhiều chủng loại cây ăn trái, nhà cổ Nam Bộ&nbsp; hơn 100 năm tuổi hoặc có thể tham gia các trò chơi dân gian, đua heo, đua chó, xiếc khỉ, câu cá sấu...</span></span></p>

                    <p><span style="font-size:14px"><span style="color:rgb(68, 68, 68)"><strong>Trưa:&nbsp;</strong>Quý khách dùng bữa trưa tại nhà hàng trong KDL.<br />
                    <strong>Chiều:</strong>&nbsp;Đoàn khởi hành về lại TP.HCM, trên đường về quý khách dừng chân mua sắm đặc sản địa phương làm quà tặng cho người thân. Về đến TP.HCM, chia tay và hẹn gặp lại quý khách.</span></span></p>
                    </div>
                    </div>
                    </div>
                    </div>', 
                'trangthaitour'=>1
            ),
            array(
                'users_id'=>4, 
                'tentour'=>'Tour Du Lịch: Đảo Điệp Sơn | Phú Yên', 
                'place_id'=>5, 
                'sokhachtoida'=>4, 
                'songaydi'=>3, 
                'hinhanh'=> 'EhGD_14328hinh-nen-bai-bien-chieu-hoang-hon-dep-lang-man.jpg',
                'giatour' => 2486000, 
                'mota' => '<div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px; text-transform: capitalize;">Đêm 1</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">TP.HCM - BÌNH THUẬN - KHÁNH HÒA</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/diep-son/hinh-noi-dung-tour/diep-son-phu-yen.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>19h00:</strong>&nbsp;Xe và hướng dẫn viên của Du lịch Đất Việt đón quý khách tại điểm hẹn khởi hành đi Khánh Hòa. Quý khách nghỉ ngơi trên xe.</span></p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 1</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">ĐẢO ĐIỆP SƠN - THÁP NHẠN - PHÚ YÊN</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/Phu%20yen/DocLet-muiDaiLanh.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Sáng:&nbsp;</strong>Đoàn đến Ninh Hòa dừng chân vệ sinh cá nhân và dùng bữa sáng. Tiếp chương trình quý khách di chuyển đến cảng Vạn Giã, lên tàu để đến với:</span></p>

                    <ul>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Đảo Điệp Sơn:</strong>&nbsp;Một quần đảo còn xa lạ với nhiều người, nơi đây vẫn còn giữ nét đẹp hoang sơ, trong xanh của biển, người dân thì rất hiền hòa, hiếu khách. Khi thủy triều hạ xuống con đường cát chạy thẳng ra lòng biển sẽ xuất hiện. Bạn chỉ việc men theo con đường mòn trên biển nối liền hòn đảo giữa với đảo Điệp Sơn lớn. Cảm nhận con đường uốn lượn, rộng khoảng 1 mét và nằm sâu dưới mặt nước biển trong xanh chưa đến nửa mét -&nbsp;Một cảm giác thích thú đến lạ bởi vừa hồi hộp, vừa có một chút lo sợ nước dâng lên nhưng lại rất đáng để thử.</span></li>
                    </ul>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Trưa:</strong>&nbsp;Quý khách dùng bữa trưa BBQ tại bãi biển (Thực đơn tham khảo: Tôm nướng/&nbsp;Mực nướng/&nbsp;Cá nướng/ Lẩu Hải sản + bún/&nbsp;Cơm chiên/ Trái cây, trà đá tráng miệng).</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Chiều:</strong>&nbsp;Quý khách về lại đất liền, vượt đèo Cả để đến với vùng đất&nbsp;<strong>“Tôi thấy hoa vàng trên cỏ xanh” -&nbsp;Tp. Tuy Hòa</strong>. Đoàn sẽ được ngắm nhìn cảnh đẹp của thiên nhiên với:</span></p>

                    <ul>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Vịnh Vũng Rô</strong>&nbsp;nghe hướng dẫn viên kể lại hành trình&nbsp;<strong>Tàu không số và sự kiện Vịnh Vũng Rô</strong>,&nbsp;<strong>di tích Đường mòn Hồ Chí Minh trên Biển</strong>, đoàn tìm hiểu về cách thức nuôi tôm hùm và cuộc sống bình yên của ngư dân vùng biển.&nbsp;</span></li>
                    </ul>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)">Đến Tp. Tuy Hòa, quý khách tham quan&nbsp;<strong>Tháp Nhạn</strong>&nbsp;- Một trong những công trình kiến trúc cổ nhất của người Chăm, nơi gắn với nhiều truyền thuyết về sự hình thành và phát triển của vùng đất Phú Yên.</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)">Đoàn về khách sạn nhận phòng, nghỉ ngơi.</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Tối:&nbsp;</strong>Quý khách đến nhà hàng dùng cơm chiều, nghỉ ngơi tự do.</span></p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 2</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">GÀNH ĐÁ ĐĨA - NHÀ THỜ MẰNG LĂNG</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/Phu%20yen/DaDia-tuyhoa.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <div style="box-sizing: border-box;">
                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Sáng:&nbsp;</strong>Đoàn dùng điểm tâm sáng Buffet, bắt đầu khám phá cuộc sống và văn hóa phía bắc Phú Yên:</span></p>

                    <ul>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Đầm Ô Loan -&nbsp;Phá Tam Giang</strong>&nbsp;với hệ sinh thái thực vật biển phong phú, gắn liền với lịch sử hình thành của vùng đất Tuy Hòa (dừng chụp ảnh phía trên).</span></li>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Thắng cảnh Gành Đá Dĩa:</strong>&nbsp;Quý khách cùng chiêm ngưỡng 1 trong 6 loại hình địa chất độc đáo trên thế giới còn lưu lại tại Gành Đá Đĩa.</span></li>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)">&nbsp;<strong>Nhà thờ Mằng Lăng:</strong>&nbsp;Nơi lưu trữ bộ sách phát hành bằng chữ quốc ngữ đầu tiên trên thế giới, nghe kể về câu chuyện của Thánh Adre Phú Yên, tìm hiểu kiến trúc nhà thờ theo lối La Mã.</span></li>
                    </ul>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Trưa:</strong>&nbsp;Quý khách dùng bữa trưa tại nhà hàng.</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Chiều:&nbsp;</strong>Quý khách tự do khám phá văn hóa,&nbsp;<strong>ẩm thực của vùng đất Phú Yên như:</strong>&nbsp;Mắt cá ngừ đại Dương, bò một nắng 2 sương, bún cá…&nbsp;hoặc thưởng thức ẩm thực buffet “1 món 1 USD” tại khách sạn thay cho buổi cơm chiều&nbsp;<em>(tự túc ăn chiều).</em></span></p>
                    </div>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 3</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 0px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">CHIA TAY PHÚ YÊN</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/Phu%20yen/chuaOc-nhatrang.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p><strong>Sáng:&nbsp;</strong>Quý khách dùng điểm tâm sáng buffet. Làm thủ tục trả phòng, đoàn khởi hành về lại TP.HCM. Trên đường về quý khách dừng chân mua sắm đặc sản địa phương làm quà tặng cho người thân.</p>

                    <p><strong>Trưa:&nbsp;</strong>Quý khách dùng bữa trưa tại Cà Ná. Tiếp chương trình.</p>

                    <p><strong>Chiều:&nbsp;</strong>Về đến TP.HCM, chia tay và hẹn gặp lại quý khách.</p>
                    </div>
                    </div>
                    </div>', 
                'trangthaitour'=>1
            ),
            array(
                'users_id'=>1, 
                'tentour'=>'Tour Du Lịch: Nha Trang | Vịnh Nha Phu | Vinpearl Land', 
                'place_id'=>1, 
                'sokhachtoida'=>6, 
                'songaydi'=>3, 
                'hinhanh'=> 'VEOO_bien-nha-trang.jpg',
                'giatour' => 2086000, 
                'mota' => '<div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px; text-transform: capitalize;">Đêm 1</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">ĐÊM 1: TP.HCM - BÌNH THUẬN - KHÁNH HÒA</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;">
                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><u><strong>Tối 20h30:</strong></u>&nbsp;Xe và hướng dẫn viên của Đất Việt Tour. Đón quý khách tại điểm hẹn khởi hành đi Nha Trang. Quý khách nghỉ ngơi trên xe.</span></p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 1</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">BIỂN BÃI DÀI - XIẾC RẮN - TẮM BÙN</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/nha-trang/hinh-noi-dung-tour/xiec-ran-chua-long-son-bun-khoang.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Sáng:</strong>&nbsp;Đoàn đến Cam Ranh dừng chân vệ sinh cá nhân và dùng bữa sáng. Tiếp chương trình quý khách cùng tắm biển tại:</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Bãi Dài</strong>&nbsp;nhận ghế lều cùng sinh hoạt và tắm biển tự do, thưởng thức hải sản tươi sống, tham gia các môn thể thao trên biển như: Chèo thuyền Kayak, Mô tô nước…<em>(Chi phí tự túc).</em></span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Xiếc rắn Nha Trang&nbsp;-</strong>&nbsp;“Dịch vụ du lịch Thái Lan tại Việt Nam".</span></p>

                    <ul>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)">Tham quan trại rắn với các loài rắn quý hiếm ở Việt Nam cũng như thế giới.</span></li>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)">Xem chương trình biểu diễn nghệ thuật với xiếc rắn do các nghệ sĩ từ Thái Lan biểu diễn.</span></li>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)">Tham quan và chiêm ngưỡng các sản phẩm làm từ da rắn, cửa hàng mỹ phẩm, thuốc làm từ thảo dược, rắn từ Việt Nam và Thái Lan</span></li>
                    </ul>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Trưa:</strong>&nbsp;Quý khách đến với thành phố biển Nha Trang dùng bữa trưa tại nhà hàng. Sau đó đến khách sạn nhận phòng và nghỉ ngơi.</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Chiều:</strong>&nbsp;Xe đưa đoàn tham quan trung tâm thành phố.</span></p>

                    <ul>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Chùa Long Sơn</strong>&nbsp;chiêm ngưỡng tượng Ông Phật Trắng cầu gia đình an lành, hạnh phúc .</span></li>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Nhà nuôi yến Nha Trang</strong>&nbsp;tìm hiểu về quá trình nuôi và chế biến các sản phẩm được làm từ tổ chim yến.</span></li>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Tắm bùn khoáng nóng</strong>&nbsp;với lớp bùn tự nhiên chứa nhiều chất dinh dưỡng, phục hồi sức khỏe rất tốt&nbsp;<em>(chi phí tự túc).</em></span></li>
                    </ul>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Tối:</strong>&nbsp;Xe đưa quý khách đến nhà hàng dùng cơm chiều. Quý khách nghỉ ngơi tự do.</span></p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 2</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">VỊNH NHA PHU - ĐẢO KHỈ - VINPEARL LAND</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/nha-trang/hinh-noi-dung-tour/nhatrang3n3d-2.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Sáng:</strong>&nbsp;Đoàn dùng điểm tâm sáng, bắt đầu khám phá cuộc sống và văn hóa của ngư dân vịnh biển Nha Trang.</span></p>

                    <ul>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Đầm Nha Phu:&nbsp;</strong>Xe đưa đoàn đến bến tàu Đá Chồng. Quý khách xuống tàu đi tham quan Khu du lịch Đảo Khỉ trên bán đảo Hòn Lao. Đến nơi, quý khách tắm biển và tham quan các chương trình tại Đảo Khỉ:</span></li>
                    </ul>

                    <ul>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Chương trình xiếc thú:&nbsp;</strong>Khỉ, Chó, Dê... Quý khách xem và tham gia đặt cược chương trình đua Chó nài Khỉ lần đầu tiên có mặt tại Việt Nam.</span></li>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Các công trình nghệ thuật:</strong>&nbsp;Vườn Mỹ Nhân Ngư, vườn tượng 12 con Giáp, Tây Du Ký, Hoa Quả Sơn... đặc biệt là các phối cảnh vườn hoa, muôn thú quanh đảo được nghệ nhân nơi đây sáng tác nên bằng các loại phế liệu bỏ đi.</span></li>
                    </ul>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Trưa</strong>: Quý khách dùng bữa trưa tại nhà hàng KDL, về lại đất liền.</span></p>

                    <p style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Chiều:</strong>&nbsp;Xe đưa đoàn khám phá khu vui chơi giải trí đạt tiêu chuẩn 5 sao:</span></p>

                    <ul>
                        <li style="text-align:justify"><span style="color:rgb(68, 68, 68)"><strong>Vinpearl Land&nbsp;</strong>với hệ thống cáp treo vượt biển dài nhất Châu Á, cùng khu vui chơi giải trí trong nhà như: Xem phim 4D, xe điện đụng, triển lãm tranh nghệ thuật… kết hợp với khu vui chơi ngoài trời như: Tàu hải tặc, cối&nbsp;xoay gió, vòng đu duay, thủy cung… Ngoài ra quý khách có thể tắm biển với bãi biển nhân tạo, hồ bơi trẻ em đẹp nhất Nha Trang<em>&nbsp;(Chi phí tự túc 880.000 VNĐ/ vé).&nbsp;</em>Tiêu chuẩn 02 - 03 khách/ Phòng. Tiện nghi: Máy lạnh, tivi, nước &nbsp;nóng, vệ sinh<em>.</em></span></li>
                    </ul>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 3</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 0px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">CHỢ ĐẦM - CHIA TAY NHA TRANG</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/nha-trang/hinh-noi-dung-tour/tphcm-nha-trang.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p><span style="color:rgb(68, 68, 68)"><strong>Sáng:</strong>&nbsp;Quý khách dùng điểm tâm sáng. Làm thủ tục trả phòng, xe đưa đoàn đến Chợ Đầm tham quan và mua sắm.</span></p>

                    <p><span style="color:rgb(68, 68, 68)">Đoàn khởi hành về lại TP.HCM. Trên đường về, quý khách dừng chân mua sắm đặc sản địa phương làm quà tặng cho người thân.</span></p>

                    <p><span style="color:rgb(68, 68, 68)"><strong>Trưa:</strong>&nbsp;Quý khách dùng bữa trưa tại Cà Ná. Tiếp chương trình.</span></p>

                    <p><span style="color:rgb(68, 68, 68)"><strong>Chiều:</strong>&nbsp;Về đến TP.HCM, chia tay và hẹn gặp lại quý khách.</span></p>

                    <ul>
                        <li><span style="color:rgb(68, 68, 68)">Thứ tự các điểm tham quan có thể thay đổi cho phù hợp với tình hình thực tế nhưng vẫn đảm bảo thực hiện đầy đủ nội dung chương trình.</span></li>
                        <li><span style="color:rgb(68, 68, 68)">Quy định của Resort/ khách sạn về giờ nhận phòng: 14h00 -&nbsp;15h00, giờ trả phòng 12h00. Nếu quý khách đến sớm, Resort/ Khách sạn sẽ bố trí cho nhận phòng trong trường hợp có phòng trống.</span></li>
                        <li><span style="color:rgb(68, 68, 68)">Trường hợp chưa có phòng, quý khách vui lòng dùng nước mát trong thời gian chờ đợi.</span></li>
                    </ul>
                    </div>
                    </div>
                    </div>', 
                'trangthaitour'=>1
            ),
            array(
                'users_id'=>5, 
                'tentour'=>'Tour Du Lịch: Bình Ba | Nha Trang', 
                'place_id'=>5, 
                'sokhachtoida'=>6, 
                'songaydi'=>3, 
                'hinhanh'=> 'VKut_20161020072852-vinpearl-land-nha-trang-gody__8_.jpg',
                'giatour' => 2386000, 
                'mota' => '<div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px; text-transform: capitalize;">Đêm 1</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">ĐÊM 1: TP.HCM - BÌNH THUẬN - CAM RANH</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/nha-trang/hinh-noi-dung-tour/nhatrang-3n3d.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>20h30:</strong>&nbsp;Xe và hướng dẫn viên của Du lịch Đất Việt đón quý khách tại điểm hẹn khởi hành đi Nha Trang. Quý khách nghỉ ngơi trên xe.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 1</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">ĐẢO TÔM HÙM BÌNH BA - NHA TRANG</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/nha-trang/hinh-noi-dung-tour/binh3-ghep3.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Đoàn dùng điểm tâm sáng. Xe đưa Quý khách vào trung tâm&nbsp;<strong>TP Cam Ranh</strong>&nbsp;đến với&nbsp;<strong>cảng Ba Ngòi&nbsp;</strong>làm thủ tục lên tàu đi&nbsp;<strong>Bình Ba</strong>. Ngồi trên tàu quý khách sẽ được ngắm toàn cảnh<strong>&nbsp;vịnh Cam Ranh</strong>&nbsp;với những hòn đảo lớn nhỏ nhấp nhô phía biển khơi. Gần đến đảo Bình Ba, quý khách sẽ ngỡ ngàng trước nước biển nơi đây, nước xanh trong vắt, mặt nước lúc này êm đềm, phẳng lặng, nếu may mắn quý khách có thể bắt gặp một đàn cá đang bơi lội xung quanh tàu.</p>

                    <ul>
                        <li style="text-align:justify">Tắm biển tàu đến&nbsp;<strong>bãi Nhà Cũ hoặc bãi Bồ Đề.&nbsp;</strong>Quý khách tắm biển tự do với làn nước mát lạnh và trong xanh. Quý khách đực trang bị phao bơi, kính lặn để lặn ngắm những rạn san hô đầy màu sắc và huyền bí.</li>
                    </ul>

                    <p style="text-align:justify"><strong>Trưa:&nbsp;</strong>Quý khách dùng bữa trưa tại nhà hàng bè nổi. Sau đó, Quý khách di chuyển lên đảo để tham quan, tìm hiểu cuộc sống của người dân trên đảo.</p>

                    <ul>
                        <li style="text-align:justify"><strong>Cửa nhỏ</strong>: Đứng trên&nbsp;<strong>Đỉnh Lô Cốt</strong>&nbsp;quý khách ngắm trọn Cửa Nhỏ với những chiếc thuyền thay nhau ra vào vịnh, những đàn hải âu chao lượn trên mặt biển…</li>
                        <li style="text-align:justify"><strong>Bãi Chướng:&nbsp;</strong>Trải dài những hoa rau muống biển và hoa cỏ may rất đẹp.</li>
                        <li style="text-align:justify"><strong>Hòn Rùa.</strong></li>
                    </ul>

                    <p style="text-align:justify"><strong>Chiều:&nbsp;</strong>Tàu đưa Quý khách về lại&nbsp;<strong>cảng Ba Ngòi</strong>&nbsp;khởi hành về thành phố biển Nha Trang nhận phòng nghỉ ngơi.</p>

                    <p style="text-align:justify"><strong>Tối:&nbsp;</strong>Đoàn tới nhà hàng dùng cơm tối. Sau đó, đoàn tự do khám phá thành phố biển Nha Trang.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 2</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">VỊNH NHA PHU - KDL ĐẢO KHỈ - VINPEARL LAND</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/nha-trang/hinh-noi-dung-tour/nhatrang3n3d-2.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Đoàn dùng điểm tâm sáng, bắt đầu khám phá cuộc sống và văn hóa của ngư dân&nbsp;<strong>vịnh biển Nha Trang.</strong></p>

                    <ul>
                        <li style="text-align:justify"><strong>Đầm Nha Phu:</strong>&nbsp;xe đưa đoàn đến bến tàu Đá Chồng. Quý khách xuống tàu đi tham quan Khu du lịch&nbsp;<strong>Đảo Khỉ&nbsp;</strong>trên&nbsp;<strong>bán đảo Hòn Lao</strong>. Đến nơi, Quý khách thỏa chí đắm mình tắm biển trong làn nước biển trong xanh của bãi tắm, tham gia các trò chơi thể thao trên biển&nbsp;<em>(chi phí tự túc)</em>; hoặc tự do đi dạo&nbsp;<strong>khu vườn nuôi Đà Điểu châu Phi, Hươu, Nai, chim Công;&nbsp;</strong>tham quan khu khỉ hoang dã hoặc xem chương trình xiếc thú với nhiều tiết mục đặc sắc như: voi đá banh, gấu chạy xe máy, khỉ thi bơi, khỉ đua xe...</li>
                    </ul>

                    <p style="text-align:justify"><strong>Trưa:</strong>&nbsp;Quý khách dùng bữa trưa tại nhà hàng&nbsp;<strong>KDL Đảo Khỉ</strong>, về lại đất liền.</p>

                    <p style="text-align:justify"><strong>Chiều:</strong>&nbsp;Quý khách chọn 1 trong 2 chương trình:</p>

                    <p style="text-align:justify"><strong>Chương trình 1: Xe đưa đoàn khám phá khu vui chơi giải trí đạt tiêu chuẩn 5 sao.</strong></p>

                    <ul>
                        <li style="text-align:justify"><strong>Vinpearl Land</strong>&nbsp;với hệ thống cáp treo vượt biển dài nhất Châu Á, cùng khu vui chơi giải trí trong nhà như: Xem phim 4D, xe điện đụng, triển lãm tranh nghệ thuật…kết hợp với khu vui chơi ngoài trời như: Tàu Hải Tặc, Cói Xoay Gió, Vòng Đu Quay, Thủy Cung… Ngoài ra Quý khách có thể tắm biển với bãi biển nhân tạo, hồ bơi trẻ em đẹp nhất Nha Trang. Tham gia chương trình nhạc nước kết hợp ánh sáng hấp dẫn….&nbsp;<em>(chi phí tự túc 880.000 vnđ/vé)</em></li>
                    </ul>

                    <p style="text-align:justify"><strong>Chương trình 2: Xe đưa đoàn tham quan trung tâm thành phố:</strong></p>

                    <ul>
                        <li style="text-align:justify"><strong>Chùa Long Sơn</strong>&nbsp;chiêm ngưỡng tượng&nbsp;<strong>Ông Phật Trắng</strong>&nbsp;cầu gia đình an lành, hạnh phúc hái lộc đầu năm.</li>
                        <li style="text-align:justify"><strong>Nhà Nuôi Yến Nha Trang</strong>&nbsp;tìm hiểu về quá trình nuôi và chế biến các sản phẩm được làm từ tổ chim yến</li>
                        <li style="text-align:justify"><strong>Tháp Bà Ponagar</strong>&nbsp;tìm hiểu về kiến trúc xây dựng, văn hóa, phong tục tính ngưỡng thờ cúng của dân tộc Chăm.</li>
                        <li style="text-align:justify"><strong>Tắm bùn khoáng nóng</strong>&nbsp;với lớp bùn tự nhiên chứa nhiều chất dinh dưỡng và nước khoáng nóng có tác dụng phục hồi sức khỏe rất nhanh, rất tốt cho sức khỏe&nbsp;<em>(chi phí tự túc).</em></li>
                    </ul>

                    <p style="text-align:justify"><strong>20h00:&nbsp;</strong>Quý khách về lại đất liền đến nhà hàng dùng bữa tối.</p>

                    <p style="text-align:justify">Quý khách tự do nghỉ ngơi hoặc thưởng thức&nbsp;<strong>kem bốn mùa.</strong></p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 3</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 0px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">CHỢ ĐẦM - CHIA TAY NHA TRANG</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/nha-trang/hinh-noi-dung-tour/cho-dam-ca-na.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:</strong>&nbsp;Quý khách dùng điểm tâm sáng, làm thủ tục trả phòng. Xe đưa đoàn đến<strong>&nbsp;Chợ Đầm</strong>&nbsp;tham quan và mua sắm. Đoàn khởi hành về lại TPHCM. Trên đường về, Quý khách dừng chân mua sắm đặc sản địa phương làm quà tặng cho người thân.</p>

                    <p style="text-align:justify"><strong>Trưa:</strong>&nbsp;Quý khách dùng bữa trưa tại Cà Ná và tiếp chương trình.</p>

                    <p style="text-align:justify"><strong>Chiều</strong>: Về đến TP.HCM, chia tay và hẹn gặp lại Quý khách.</p>
                    </div>
                    </div>
                    </div>', 
                'trangthaitour'=>1
            ),
            array(
                'users_id'=>4, 
                'tentour'=>'Tour Du Lịch: Nha Trang | Đà Lạt', 
                'place_id'=>4, 
                'sokhachtoida'=>8, 
                'songaydi'=>5, 
                'hinhanh'=> '7Bpw_nha-trang.jpg',
                'giatour' => 3586000, 
                'mota' => '<div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 1</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">TP.HCM - BÌNH THUẬN - NHA TRANG</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/nha-trang/hinh-noi-dung-tour/tour-nha-trang-3.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:</strong>&nbsp;Xe và hướng dẫn viên &nbsp;Đất Việt Tour đón quý khách tại điểm hẹn khởi hành đi Nha Trang. Đến với thành phố Biên Hòa, địa phận tỉnh Đồng Nai. Quý khách dừng chân dùng điểm tâm. Tiếp chương trình, xe đưa Quý khách dọc theo quốc lộ 1A HDV sẽ thuyết minh các địa danh ngang qua.</p>

                    <p style="text-align:justify"><strong>Trưa</strong>: Đến với Bình Thuận Quý khách dừng chân dùng bữa trưa.</p>

                    <p style="text-align:justify">Tiếp chương trình xe đưa Quý khách đến với tỉnh Ninh Thuận Quý khách dừng chân thư giãn và chụp hình với Biển Cà Ná. Tiếp chương trình xe đưa Quý khách đến với thành phố biển Nha Trang cùng nhận phòng và nghỉ ngơi.</p>

                    <p style="text-align:justify"><strong>Tối:</strong>&nbsp;Xe đưa Quý khách đến nhà hàng dùng cơm tối. Quý khách nghỉ ngơi tự do.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 2</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">VỊNH NHA PHU – VINPEARL LAND</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/nha-trang/hinh-noi-dung-tour/tour-nha-trang-4.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:</strong>&nbsp;Đoàn dùng điểm tâm sáng Buffet, bắt đầu khám phá cuộc sống và văn hóa của ngư dân Vịnh Biển Nha Trang. Xe đưa đoàn tiếp tục hành trình ra&nbsp;<strong>Đầm Nha Phu. Đ</strong>ến bến tàu Đá Chồng, Quý khách xuống tàu đi tham quan:&nbsp;</p>

                    <ul>
                        <li style="text-align:justify"><strong>Đầm Nha Phu:</strong>&nbsp;xe đưa đoàn đến bến tàu Đá Chồng, Quý khách xuống tàu đi tham quan Khu du lịch Đảo Khỉ trên bán đảo Hòn Lao. Đến nơi, Quý khách thỏa chí đắm mình tắm biển trong làn nước biển trong xanh của bãi tắm, tham gia các trò chơi thể thao trên biển&nbsp;<em><strong>(chi phí tự túc);</strong></em>&nbsp;hoặc tự do đi dạo khu vườn nuôi Đà Điểu châu Phi, Hươu, Nai, chim Công; tham quan khu khỉ hoang dã hoặc xem chương trình xiếc thú với nhiều tiết mục đặc sắc như: voi đá banh, gấu chạy xe máy, khỉ thi bơi, khỉ đua xe...</li>
                    </ul>

                    <p style="text-align:justify"><strong>Trưa:</strong>&nbsp;Quý khách dùng bữa trưa tại nhà hàng KDL Đảo Khỉ, về lại đất liền.</p>

                    <p style="text-align:justify"><strong>Chiều:</strong>&nbsp;Xe đưa đoàn đến cảng cáp treo, quý khách khám phá khu vui chơi giải trí đạt tiêu chuẩn 5 sao.</p>

                    <ul>
                        <li style="text-align:justify"><strong>Vinpearl Land</strong>&nbsp;với hệ thống cáp treo vượt biển dài nhất châu Á, cùng khu vui chơi giải trí trong nhà như: Xem phim 4D, xe điện đụng, triển lãm tranh nghệ thuật…kết hợp với khu vui chơi ngoài trời như:<strong>&nbsp;Tàu Hải Tặc, Cối Xoay Gió, Vòng Đu Quay, Thủy Cung…</strong>&nbsp;Ngoài ra Quý khách có thể tắm biển với bãi biển nhân tạo, hồ bơi trẻ em đẹp nhất Nha Trang&nbsp;<em><strong>(chi phí tự túc 800.000 vnđ</strong></em>).</li>
                    </ul>

                    <p style="text-align:justify"><strong>Tối:&nbsp;</strong>Quý khách về đất liền &nbsp;dùng bữa tối tại nhà hàng. Tự do dạo phố đêm hoặc nghỉ ngơi tại khách san.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 3</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">CHÙA LONG SƠN – THÁP BÀ - PONAGAR – ĐÀ LẠT</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/mien-trung/nha-trang/hinh-noi-dung-tour/tour-nha-trang-5.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:&nbsp;</strong>Đoàn dùng điểm tâm sáng Buffet. Bắt đầu tham quan thắng cảnh thành phố.</p>

                    <ul>
                        <li style="text-align:justify"><strong>Chùa Long Sơn</strong>&nbsp;viếng chùa cùng hái lộc đầu xuân, chiêm ngưỡng tượng phật Thích Ca hay còn gọi là Tượng Ông Phật Trắng.</li>
                        <li style="text-align:justify"><strong>Tháp Bà Ponagar</strong>&nbsp;cùng tìm hiểu về kiến trúc xây dựng, phong tục thờ cúng của người dân tộc Chăm nghe kể về câu chuyện của vị Thánh Nữ Thiên Y Ana.</li>
                        <li style="text-align:justify"><strong>Nhà Yến&nbsp;</strong>với vị trí đặc biệt, nằm trong trung tâm thành phố nhưng vẫn có thể dẫn dụ thành công yến đảo về sinh sống. Quý khách tìm hiểu quy trình dẫn dụ và khai thác, chế biến các sản phẩm từ tổ yến.</li>
                    </ul>

                    <p style="text-align:justify"><strong>Trưa:</strong>&nbsp;Quý khách trả phòng, đến nhà hàng dùng bữa trưa. Sau đó khởi hành đi Đà Lạt. Đoàn dừng chân ngắm cảnh đồng bằng Khánh Hòa từ đỉnh đèo Hòn Giao. Đến Đà Lạt Quý khách nhận phòng nghỉ ngơi.</p>

                    <p style="text-align:justify"><strong>Tối:&nbsp;</strong>Xe đưa đoàn đến nhà hàng dùng bữa tối. Quý khách nghỉ ngơi tự do hoặc dạo phố.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 4</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 30px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">THIỀN VIỆN TRÚC LÂM – KDL LANG BIANG</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/tay-nguyen/da-lat/hinh-noi-dung-tour/tour-da-lat__2_.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:</strong>&nbsp;Quý khách dùng điểm tâm sáng Buffet tại nhà hàng. Bắt đầu tham quan Đà Lạt.</p>

                    <ul>
                        <li style="text-align:justify"><strong>Làng Hoa Vạn Thành:</strong>&nbsp;Tọa lạc phía Tây thành phố Đà Lạt là nơi cung cấp hoa chủ yếu cho thành phố Đà Lạt, đặc biệt là hoa Hồng và đón nhận một số loại hoa mới như hoa Hồng Nhung, hoa Ly, salem, cẩm chướng, đồng tiền…làm đa dạng và phong phú các loại hoa được trồng và canh tác tại đây. Đặc biệt đến đây Qúy khách sẽ được tận mắt chiêm ngưỡng vườn rau thủy canh và tận tay hái dâu tại vườn.</li>
                    </ul>

                    <ul>
                        <li style="text-align:justify"><strong>Thiền Viện Trúc Lâm</strong>&nbsp;- ngôi thiền viện lớn nhất khu vực tỉnh Lâm Đồng, Quý khách có thể ngắm nhìn Hồ Tuyền Lâm với vẻ đẹp thơ mộng đủ sức thu hút mọi ánh mắt của du khách. Cùng viếng, thắp hương tại khu vực chánh điện và chụp ảnh khuôn viên bên ngoài.</li>
                    </ul>

                    <p style="text-align:justify"><strong>Trưa:&nbsp;</strong>Quý khách dùng bữa trưa tại nhà hàng. Về khách sạn nghỉ ngơi.</p>

                    <p style="text-align:justify"><strong>Chiều:</strong>&nbsp;Quý khách tham quan phía Bắc Cao Nguyên Đà Lạt.</p>

                    <ul>
                        <li style="text-align:justify"><strong>Vườn Hoa Khô:&nbsp;</strong>Với công nghệ Nhật Bản từ những cành hoa tươi sau quá trình sấy khô và dùng chất bảo quản, được gắn chung một cái tên Hoa Bất Tử.</li>
                        <li style="text-align:justify"><strong>Nhà thờ Domaine De Marie:</strong>&nbsp;Một công trình kiến trúc độc đáo của người Pháp để lại cho vùng đất Đà Lạt, với những sự kiện lịch sử ghi dấu ấn khó phai của Đà Lạt.</li>
                        <li style="text-align:justify"><strong>Đỉnh Lang Biang:&nbsp;</strong>Quý khách chinh phục đỉnh núi cao nhất TP Đà Lạt với độ cao hơn 2000m. (tự túc vé xe jeep: 60.000đ).</li>
                    </ul>

                    <p style="text-align:justify"><strong>Tối:&nbsp;</strong>Quý khách dùng bữa tối tại nhà hàng dưới chân núi Mẹ. Tiếp tục tham gia giao lưu với người dân núi rừng.</p>

                    <ul>
                        <li style="text-align:justify"><strong>Giao lưu văn hóa cồng chiêng Tây Nguyên</strong>&nbsp;với ánh lửa bập bùng hòa theo lời ca điệu múa của các Sơn Nam, Sơn Nữ. Quý khách có dịp tìm hiểu về phong tục ăn tết của người dân tộc K’ho cùng uống rượu cần, ăn thịt nướng.</li>
                    </ul>

                    <p style="text-align:justify"><strong>Tối:&nbsp;</strong>Quý khách về lại nhà hàng dùng bữa tối. Về lại khách sạn nghỉ ngơi hoặc tự do dạo phố thướng thức cà phê phố núi.</p>
                    </div>
                    </div>
                    </div>

                    <div class="timeline" style="box-sizing: border-box; display: flex; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
                    <div class="timeline-left" style="box-sizing: border-box; width: 90px;">
                    <div class="title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 20px;">Ngày 5</div>

                    <div class="fa fa-car vehical-icon" style="box-sizing: border-box; display: flex; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 24px; line-height: 1; font-family: FontAwesome; text-rendering: auto; -webkit-font-smoothing: antialiased; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 40px; background-color: rgb(231, 231, 231); color: rgb(127, 126, 126);">&nbsp;</div>
                    </div>

                    <div class="timeline-right" style="box-sizing: border-box; border-left: 2px solid rgb(231, 231, 231); padding-left: 40px; width: calc(100% - 90px); padding-bottom: 0px;">
                    <div class="timeline-title" style="box-sizing: border-box; font-size: 16px; color: rgb(237, 12, 110); margin-bottom: 15px; position: relative; font-weight: bold;">THÁC ĐATANLA - CHIA TAY ĐÀ LẠT</div>

                    <div class="timeline-content" style="box-sizing: border-box; font-size: 16px;"><img src="https://datviettour.com.vn/uploads/images/tay-nguyen/da-lat/hinh-noi-dung-tour/tour-da-lat__1_.png" style="border:0px; box-sizing:border-box; vertical-align:middle; width:704.656px" />
                    <p style="text-align:justify"><strong>Sáng:</strong>&nbsp;Quý khách dùng điểm tâm sáng Buffet. Qúy khách tự do dạo chợ mua sắm đặc sản tại đây. Làm thủ tục trả phòng xe đưa Quý khách tham quan&nbsp;<strong>Thác Datanla</strong>&nbsp;một trong những thác nước đẹp nhất Đà Lạt cùng hệ thống máng trượt hiện đại với cảm giác mạnh sẽ lưu lại những kỷ niệm khó quên khi đến với Đà Lạt.</p>

                    <p style="text-align:justify">Qúy khách khởi hành về lại TP.HCM.</p>

                    <p style="text-align:justify"><strong>Trưa:</strong>&nbsp;Quý khách dừng chân dùng bữa trưa tại Bảo Lộc. Đoàn tiếp tục khởi hành về lại TP.HCM, trên đường về Quý khách dừng chân mua sắm đặc sản địa phương làm quà tặng cho người thân.</p>

                    <p style="text-align:justify">Về đến TP.HCM, HDV chia tay và hẹn gặp lại Quý khách.</p>
                    </div>
                    </div>
                    </div>', 
                'trangthaitour'=>1
            )
        ]);
    }
}
