<?php /*Template Name: contact*/ ?>
<?php
    $servername = "localhost";
    $database = "damsen";
    $username = "damsen";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if(isset($_POST['btn_contact'])&&($_POST['btn_contact'])) {

        $name = $_POST['name_ct'];
        $phone = $_POST['phone_ct'];
        $address = $_POST['address_ct'];
        $email = $_POST['email_ct'];
        $note = $_POST['note_ct'];

        $sql_contact_us = mysqli_query($conn,"INSERT INTO WP_CONTACT(NAME_CT,PHONE,EMAIL,ADDRESS_CT,NOTE) VALUES('$name','$phone','$email','$address','$note')");
    }
?>
<?php get_header();?>
    <p class="absolute font-mtr 2xl:font-black 2xl:text-8xl text-white 2xl:left-[796px] 2xl:top-36">Liên hệ</p>
    <img src="/laravel_mix/wp-content/uploads/2021/12/contact.png" alt="" class="absolute 2xl:left-[286px] 2xl:top-[293px]">
    <div class="absolute 2xl:left-[1266px] 2xl:top-[293px]">
        <img src="/laravel_mix/wp-content/uploads/2021/12/contact1.png" alt="" class="">
        <img src="/laravel_mix/wp-content/uploads/2021/12/adress-1.png" alt="" class="absolute z-10 2xl:top-[51px] 2xl:left-12">
        <span class="absolute z-10 2xl:top-12 2xl:left-[134px] text-[#12265A] 2xl:font-semibold font-mtr leading-[29px] 2xl:text-[24px]">Địa chỉ:</span>
        <span class="absolute z-10 2xl:left-[134px] 2xl:top-[85px] 2xl:w-[358px] 2xl:font-medium font-mtr text-[18px] leading-[26px] text-[#23221F] opacity-70">86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</span>
    </div>
    <div class="absolute 2xl:left-[1266px] 2xl:top-[513px]">
        <img src="/laravel_mix/wp-content/uploads/2021/12/contact1.png" alt="" class="">
        <img src="/laravel_mix/wp-content/uploads/2021/12/mail-inbox-app-1.png" alt="" class="absolute z-10 2xl:top-15 2xl:left-12">
        <span class="absolute z-10 top-[66px] left-[134px] text-[#12265A] font-semibold font-mtr leading-[29px] text-[24px]">Email:</span>
        <span class="absolute z-10 top-[103px] left-[134px] text-[#23221F] opacity-70 font-medium font-mtr text-[18px] leading-[26px]">investigate@your-site.com</span>
    </div>
    <div class="absolute 2xl:left-[1266px] 2xl:top-[734px]">
        <img src="/laravel_mix/wp-content/uploads/2021/12/contact1.png" alt="" class="">
        <img src="/laravel_mix/wp-content/uploads/2021/12/telephone-2.png" alt="" class="absolute z-10 top-15 left-12">
        <span class="absolute z-10 left-[134px] top-15 text-[#12265A] font-semibold font-mtr leading-[29px] text-[24px]">Điện thoại</span>
        <span class="absolute z-10 left-[134px] top-[97px] text-[#23221F] opacity-70 font-medium font-mtr text-[18px] leading-[26px]">+84 145 689 798</span>
    </div>
    <img src="/laravel_mix/wp-content/uploads/2021/12/Alex_AR_Lay_Do-shadow-1-1.png" alt="" class="absolute z-20 top-[347px]">
    <p class="absolute z-10 text-[#23221F] font-mtr font-medium text-xl w-[830px] leading-[30px] opacity-70 left-[354px] top-[357px]">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis. 
    </p>

    <form action="" method="post">
        <input type="text" name="name_ct" placeholder="Tên" 
        class="ticket-group absolute left-[354px] top-[452px] w-[293px] h-[56px] outline-none z-10 rounded-2xl bg-white px-4 py-5 required">

        <input type="text" name="email_ct" placeholder="Email" 
        class="ticket-group absolute left-[671px] top-[452px] w-[491px] h-[56px] outline-none z-10 rounded-2xl bg-white px-4 py-5 required">

        <input type="text" name="phone_ct" placeholder="Số điện thoại" 
        class="ticket-group absolute left-[354px] top-[532px] w-[293px] h-[56px] outline-none z-10 rounded-2xl bg-white px-4 py-5 required">

        <input type="text" name="address_ct" placeholder="Địa chỉ" 
        class="ticket-group absolute left-[671px] top-[532px] w-[491px] h-[56px] outline-none z-10 rounded-2xl bg-white px-4 py-5 required">

        <textarea name="note_ct" id="" cols="30" rows="10" placeholder="Lời nhắn" 
        class="ticket-group absolute left-[354px] top-[612px] w-[808px] h-[152px] outline-none z-10 rounded-2xl bg-white px-4 py-5 required"></textarea>

        <input type="submit" name="btn_contact" class="btn-btn absolute w-[368px] h-[68px] left-[577px] top-[804px] bg-[#FF000A] rounded-xl z-10 text-white font-black text-2xl" value="Gửi liên hệ">
        <input type="submit" name="btn_contact" class="btn-btn absolute w-[368px] h-[68px] left-[577px] top-[810px] bg-[#BD000B] rounded-xl z-0">
    </form>


<?php get_footer();?>