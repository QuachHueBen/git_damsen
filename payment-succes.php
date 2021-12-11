<?php /*Template Name: Payment succes*/?>
<!-- npx tailwindcss -o tailwind.css --watch -->
<?php
    $servername = "localhost";
    $database = "damsen";
    $username = "damsen";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql_qrcode = mysqli_query($conn,"SELECT * FROM WP_QRCODE GROUP BY QR_ID DESC");
?>
<?php get_header();?>
    <p class="absolute text-2xl top-28 left-44 xl:text-6xl xl:left-72 xl:top-32 
    2xl:left-[429px] 2xl:top-36 font-mtr 2xl:font-bold 2xl:text-8xl 2xl:w-[1216px] 2xl:h-[100px] text-white">Thanh toán thành công</p>
    <img src="/laravel_mix/wp-content/uploads/2021/12/Group-2.png" alt="" class="absolute h-full w-auto 2xl:left-[269px] 2xl:top-[286px] 2xl:w-auto 2xl:h-auto">
    <img src="/laravel_mix/wp-content/uploads/2021/12/Alvin_Arnold_Votay1-1.png" alt="" class="absolute w-60 h-60 2xl:w-auto 2xl:h-auto top-[347px] z-10">
    <button type="submit" class="absolute left-[301px] top-[585px]"><img src="/laravel_mix/wp-content/uploads/2021/12/previous-btn.png" alt="" class=""></button>
    <button type="submit" class="absolute left-[1703px] top-[585px] "><img src="/laravel_mix/wp-content/uploads/2021/12/next-btn.png" alt="" class=""></button>
    <?php
        while($row_qrcode = mysqli_fetch_array($sql_qrcode)){
    ?>
    <div class="absolute z-10 grid 2xl:grid-cols-4  2xl:gap-[23px] 2xl:top-[328px] 2xl:left-[391px] ">
        <div class="bg-white rounded-2xl w-[300px] h-[500px] flex text-center items-center justify-center">
            <img src="/laravel_mix/wp-content/uploads/2021/12/tick-1.png" alt="" class="absolute 2xl:top-[428px] 2xl:left-[126px] z-20">
            <img src="<?php echo $row_qrcode['QR_IMG'];?>" alt="" class="absolute z-20">
            <span class="absolute top-[236px] font-bold font-mtr text-2xl leading-[29px] ">ALT20210501</span>
            <span class="absolute font-mtr font-bold text-base text-[#FFC226] top-[301px] leading-[29px]">VÉ CỔNG</span>
            <span class="absolute 2xl:top-[330px] font-mtr 2xl:font-bold 2xl:text-base 2xl:leading-[29px]">---</span>
            <span class="absolute 2xl:top-[380px] 2xl:font-medium 2xl:text-[18px] font-mtr text-[#23221F]">Ngày sử dụng: 31/05/2021</span>
        </div>

        <div class="bg-white rounded-2xl w-[300px] h-[500px] flex text-center items-center justify-center">
            <img src="/laravel_mix/wp-content/uploads/2021/12/tick-1.png" alt="" class="absolute 2xl:top-[428px] 2xl:left-[452px] z-20">
            <span class="absolute top-[236px]  font-bold font-mtr text-2xl leading-[29px]">ALT20210501</span>
            <span class="absolute font-mtr font-bold text-base text-[#FFC226] top-[301px] leading-[29px]">VÉ CỔNG</span>
            <span class="absolute 2xl:top-[330px] font-mtr 2xl:font-bold 2xl:text-base 2xl:leading-[29px]">---</span>
            <span class="absolute 2xl:top-[380px] 2xl:font-medium 2xl:text-[18px] font-mtr text-[#23221F]">Ngày sử dụng: 31/05/2021</span>
        </div>

        <div class="bg-white rounded-2xl w-[300px] h-[500px] flex text-center items-center justify-center">
            <img src="/laravel_mix/wp-content/uploads/2021/12/tick-1.png" alt="" class="absolute 2xl:top-[428px] 2xl:left-[775px] z-20">
            <span class="absolute top-[236px]  font-bold font-mtr text-2xl leading-[29px]">ALT20210501</span>
            <span class="absolute font-mtr font-bold text-base text-[#FFC226] top-[301px] leading-[29px]">VÉ CỔNG</span>
            <span class="absolute 2xl:top-[330px] font-mtr 2xl:font-bold 2xl:text-base 2xl:leading-[29px]">---</span>
            <span class="absolute 2xl:top-[380px] 2xl:font-medium 2xl:text-[18px] font-mtr text-[#23221F]">Ngày sử dụng: 31/05/2021</span>
        </div>

        <div class="bg-white rounded-2xl w-[300px] h-[500px] flex text-center items-center justify-center">
            <img src="/laravel_mix/wp-content/uploads/2021/12/tick-1.png" alt="" class="absolute 2xl:top-[428px] 2xl:left-[1098px] z-20">
            <span class="absolute top-[236px] font-bold font-mtr text-2xl leading-[29px]">ALT20210501</span>
            <span class="absolute font-mtr font-bold text-base text-[#FFC226] top-[301px] leading-[29px]">VÉ CỔNG</span>
            <span class="absolute 2xl:top-[330px] font-mtr 2xl:font-bold 2xl:text-base 2xl:leading-[29px]">---</span>
            <span class="absolute 2xl:top-[380px] 2xl:font-medium 2xl:text-[18px] font-mtr text-[#23221F]">Ngày sử dụng: 31/05/2021</span>
        </div>
    </div>
    <?php
        }
    ?>
    <span class="absolute left-[394px] top-[864px] z-10 font-mtr font-medium text-sm text-[#23221F]">Số lượng: 12 vé</span>
    <span class=" absolute left-[1581px] top-[864px] z-10 font-mtr font-medium text-[18px] text-[#23221F] opacity-50">Trang 1/3</span>
    <input type="submit" name="btn_dowload" class="btn-btn absolute 2xl:w-40 2xl:h-10 2xl:left-[787px] 2xl:top-[964px] bg-[#FF000A] rounded-md z-10 text-white font-black text-[18px]" value="Tải vé">
    <input type="submit" name="btn_dowload" class="btn-btn absolute 2xl:w-40 2xl:h-10 2xl:left-[787px] 2xl:top-[969px] bg-[#BD000B] rounded-md z-0">
    <input type="submit" name="btn_send_gmail" class="btn-btn absolute 2xl:w-40 2xl:h-10 2xl:left-[972px] 2xl:top-[964px] bg-[#FF000A] rounded-md z-10 text-white font-black text-[18px]" value="Gửi Email">
    <input type="submit" name="btn_send_gmail " class="btn-btn absolute 2xl:w-40 2xl:h-10 2xl:left-[972px] 2xl:top-[969px] bg-[#BD000B] rounded-md z-0">
<?php get_footer();?>
