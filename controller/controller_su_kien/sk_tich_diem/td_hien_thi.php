<!-- Kết nối CSDL -->
<?php
include "td_pages.php";

?>

<!-- Hien thi bang -->

<div class = "td__div--hienthi">
    <div class = "td__div--hienthi--bocHoiVien">
    <div class="td__div--chua-hien-thi">
    <nav class="sk__menu">
    <ul class="sk__menu-header">
        <li><a href="../su_kien_khuyen_mai/sk_khuyen_mai_hoi_vien.php">Sự kiện khuyến mãi</a></li>
        <li><a href="../sinh_nhat_hoi_vien/sk_sinh_nhat_hoi_vien.php">Sinh nhật hội viên</a></li>
        <li><a href="../sk_tich_diem/sk_tich_diem.php">Tích điểm</a></li>
    </ul>
</nav>

    <!-- <div class="td__div--thanhngan"></div> -->
    <div class = "td__div--chuatable">
    <table class="td__table--hienthi" >
        <tr class="td__table_row--hienthi td__table--Tieu_de" style="background-color: #4472C8">
            <th>ID HV</th>
            <th>Tên HV</th>
            <th>Điểm tích lũy</th>
            <th>Ngày sinh</th>
            <th>Mã quà tặng</th>
            <th>Trạng thái</th>
        </tr>
        <?php
        // Duyệt qua các phẩn từ trong bảng
        while($row = mysqli_fetch_array($query))
       {
        ?>
        <tr align="center" class='tdtable_row--hienthi'>
            <td  class="td__table_td--hienthi-td"><?php echo $row["id_hv"]?></td>
            <td  class="td__table_td--hienthi-td"><?php echo $row["ten_hv"]?></td>
            <td  class="td__table_td--hienthi-td"><?php echo $row["diem_tich_luy"]?></td>
            <td  class="td__table_td--hienthi-td"><?php echo $row["ngay_sinh"]?></td>
            <td  class="td__table_td--hienthi-td"><?php echo $row["id_gift"]?></td>
            <td  class="td__table_td--hienthi-td"><?php 
            if($row["trang_thai"]==1)
            {
                echo "Đã gửi quà";
            }
            else{echo "Chưa gửi quà";}?></td>
        <?php
       }
        ?>    
    </table>
    <form class="td__form--page" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <center>
        <?php
    echo $listPages;
    ?>
    </center>
</form>
</div>
</div>
<div class = "td__div--hienthi--bocQuaTang">
<div class="td__div--quatang">
        <?php 
                $sqlquatang = "Select * from tbl_qua_tang";
                $queryquatang = mysqli_query($mysqli,$sqlquatang);
                while($quatangs = mysqli_fetch_array($queryquatang))
                {
        ?>
            <div class="td__div__div_quatang" >
                    <div class="td__div__div_quatang--image">
                        <img src="<?php echo $quatangs['image']?>" class="td__div__div_quatang__form--showimg">
                        <!-- <input class="td__div__div_quatang__form--chooseimg" type="file" accept="image/*"> --> 
                        
                    </div>
                    <div class ="td__div__div_quatang-baoDong">
                        <div class="td__div--showGift">
                        <!-- <form action="../controller/controller_su_kien/sk_tich_diem/td_delete_gift.php" class="td__form--gift" method="POST"> -->
                        <label for="">ID:</label>
                        <input class="td__div__input--gift" type="text" value="<?php echo $quatangs['id_gift']?>" disabled style="background-color:#b4c7E7;border:#b4c7E7">
                            <a class="td__div__a-xoaGift"  href="../../../controller/controller_su_kien/sk_tich_diem/td_delete_gift.php?idGift=<?php echo $quatangs['id_gift']?>" >Xóa</a>
                            <a class="td__div__a-updateGift" href="../../../view/views_su_kien/sk_tich_diem/view_gift_popup_update.php?idGift=<?php echo $quatangs['id_gift']?>" >Sửa</a>                                  
                        </div>
                        <div class="td__div--showGift">
                        <label for="">Tên:</label>
                        <input class="td__div__input--gift td__div__input--gift--name<?php echo $quatangs['id_gift']?>" type="text" value="<?php echo $quatangs['name']?>" disabled style="background-color:#b4c7E7;border:#b4c7E7">
                        </div>
                        <div class="td__div--showGift">
                        <label for="">Điểm cần:</label>
                        <input class="td__div__input--gift td__div__input--gift--diem<?php echo $quatangs['id_gift']?>" type="text" value="<?php echo $quatangs['diem']?>" disabled style="background-color:#b4c7E7;border:#b4c7E7">
                        </div>
                        <div class="td__div--showGift">
                        <label for="">Số lượng tồn:</label>
                        <input class="td__div__input--gift td__div__input--gift--so_luong<?php echo $quatangs['id_gift']?>" type="text" value="<?php echo $quatangs['so_luong']?>" disabled style="background-color:#b4c7E7;border:#b4c7E7">
                        </div> 
                        </form>
                    </div>    
            </div>
        <?php
        }?>
        </div>
        </div>
<!-- <div class="td__div--thanhDoc"></div> -->
            <!-- tạo giao diện nút thêm, sửa, xóa -->
            <div class='td__div--chua_button-all'>

    <div class='td__div--chua_button'>
    <form  class = "td__form--sendDate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

            <input class='td__div--button js-chonNgay' name="td_chonNgay" type="date" >
               <button class="td__table--button_guiDate" type="Submit"  onclick="" >Search</button>
                     
        
    </form>
    </div>
       
    <div class='td__div--chua_button-gift'>
    
    <button class='td__div--button js-them' type="button" onclick="">Thêm</button>

    
        </div>
    </div>
</div>
    
    
    <?php
        $mysqli -> close();
    ?>
<script src="../../assets/js/js_su_kien/sk_tich_diem/td_gioi_han_gift.js"></script>
<script src="../../assets/js/js_su_kien/sk_tich_diem/td_sx_gift.js"></script>

