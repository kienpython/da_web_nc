<!-- Kết nối CSDL -->
<?php
include "td_pages.php";

?>
<style>
.tab-bar {
    margin-top: 10px;
    margin-left: 10px;
}

.tab-bar a {
    text-align: center;
    display: inline-block;
    width: 16%;
    padding: 12px;
    border: none;
    background-color: #d3cff1;
    cursor: pointer;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    color: white;
    text-decoration: none;
}

.tab-bar a.active {
    background-color: #5ca1ec;
}
</style>
<!-- Hien thi bang -->

<div class="td__div--hienthi">
    <div class="td__div--hienthi--bocHoiVien">
        <div class="td__div--chua-hien-thi">
            <div class="tab-bar" style="bottom:20px;">
                <a href="../su_kien_khuyen_mai/sk_khuyen_mai_hoi_vien.php" class="tab-button">Sự kiện khuyến
                    mãi</a>
                <a href="../sinh_nhat_hoi_vien/sk_sinh_nhat_hoi_vien.php" class="tab-button">Sinh nhật hội viên</a>
                <a href="../sk_tich_diem/sk_tich_diem.php" class="tab-button active">Tích điểm</a>
            </div>

            <!-- <div  class='td__div--tap'>
        <li class="td__icon_back"><a class="td-a" href="nhanvien.php"><i class="tdolid fa-arrow-left"></i></a></li>
        <li class="td__div snhv__div--skkm"><a >Sự kiện khuyến mại</a></th></li>
        <li class="td__div snhv__div--snhv"><a >Sinh nhật hội viên</a></th></li>
        <li class="td__div snhv__div--tichDiem"><a >Tích điểm</a></th></li>
        
    </div> -->
            <!-- <div class="td__div--thanhngan"></div> -->
            <div class="td__div--chuatable">
                <table class="tdtable--hienthi">
                    <tr class="tdtable_row--hienthi td__table--Tieu_de" style="background-color: #4472C8">
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
                        <td class="tdtable_td--hienthi-td"><?php echo $row["id_hv"]?></td>
                        <td class="tdtable_td--hienthi-td"><?php echo $row["ten_hv"]?></td>
                        <td class="tdtable_td--hienthi-td"><?php echo $row["diem_tich_luy"]?></td>
                        <td class="tdtable_td--hienthi-td"><?php echo $row["ngay_sinh"]?></td>
                        <td class="tdtable_td--hienthi-td"><?php echo $row["id_gift"]?></td>
                        <td class="tdtable_td--hienthi-td"><?php 
            if($row["trang_thai"]==1)
            {
                echo "Đã gửi quà";
            }
            else{echo "Chưa gửi quà";}?></td>
                        <?php
       }
        ?>
                </table>
                <form class="tdform--page" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <center>
                        <?php
    echo $listPages;
    ?>
                    </center>
                </form>
            </div>
        </div>
        <div class="td__div--hienthi--bocQuaTang">
            <div class="tddiv--quatang">
                <?php 
                $sqlquatang = "Select * from tbl_qua_tang";
                $queryquatang = mysqli_query($mysqli,$sqlquatang);
                while($quatangs = mysqli_fetch_array($queryquatang))
                {
        ?>
                <div class="td__div__div_quatang">
                    <div class="td__div__div_quatang--image">
                        <img src="<?php echo $quatangs['image']?>" class="td__div__div_quatang__form--showimg">
                        <!-- <input class="td__div__div_quatang__form--chooseimg" type="file" accept="image/*"> -->

                    </div>
                    <div class="td__div__div_quatang-baoDong">
                        <div class="td__div--showGift">
                            <!-- <form action="../controller/controller_su_kien/sk_tich_diem/td_delete_gift.php" class="td__form--gift" method="POST"> -->
                            <label for="">ID:</label>
                            <input class="td__div__input--gift" type="text" value="<?php echo $quatangs['id_gift']?>"
                                disabled style="background-color:#b4c7E7;border:#b4c7E7">
                            <a class="td__div__a-xoaGift"
                                href="../../../controller/controller_su_kien/sk_tich_diem/td_delete_gift.php?idGift=<?php echo $quatangs['id_gift']?>">Xóa</a>
                            <a class="td__div__a-updateGift"
                                href="../../../view/views_su_kien/sk_tich_diem/view_gift_popup_update.php?idGift=<?php echo $quatangs['id_gift']?>">Sửa</a>
                        </div>
                        <div class="td__div--showGift">
                            <label for="">Tên:</label>
                            <input
                                class="td__div__input--gift td__div__input--gift--name<?php echo $quatangs['id_gift']?>"
                                type="text" value="<?php echo $quatangs['name']?>" disabled
                                style="background-color:#b4c7E7;border:#b4c7E7">
                        </div>
                        <div class="td__div--showGift">
                            <label for="">Điểm cần:</label>
                            <input
                                class="td__div__input--gift td__div__input--gift--diem<?php echo $quatangs['id_gift']?>"
                                type="text" value="<?php echo $quatangs['diem']?>" disabled
                                style="background-color:#b4c7E7;border:#b4c7E7">
                        </div>
                        <div class="td__div--showGift">
                            <label for="">Số lượng tồn:</label>
                            <input
                                class="td__div__input--gift td__div__input--gift--so_luong<?php echo $quatangs['id_gift']?>"
                                type="text" value="<?php echo $quatangs['so_luong']?>" disabled
                                style="background-color:#b4c7E7;border:#b4c7E7">
                        </div>
                        </form>
                    </div>
                </div>
                <?php
        }?>
            </div>
        </div>
        <!-- <div class="snhv__div--thanhDoc"></div> -->
        <!-- tạo giao diện nút thêm, sửa, xóa -->
        <div class='snhv__div--chua_button-all'>

            <div class='snhv__div--chua_button'>
                <button class='snhv__div--button js-guiSMS' type="button" onclick="">Gửi SMS <i
                        class="fa-solid fa-envelope"></i></button>
                <form class="snhv__form--sendDate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
                    method="POST">

                    <input class='snhv__div--button js-chonNgay' name="snhv_chonNgay" type="date">
                    <button class="snhv__table--button_guiDate" type="Submit" onclick="">Search</button>


                </form>
            </div>

            <div class='snhv__div--chua_button-gift'>
                <!-- <div class="snhv__div--search--sort">
    <form class="snhv__form--search" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <div class="snhv__form__div--search">
            <button class='snhv__input--search' type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            <input class='snhv__input--search' type="text" name="snhv__input--search" placeholder="Search....">
        </div>
    </form>
    </div> -->
                <button class='snhv__div--button js-them' type="button" onclick="">Thêm</button>


            </div>

        </div>

    </div>


    <?php
$mysqli -> close();
?>
    <script src="../../assets/js/js_su_kien/sinh_nhat_hoi_vien/snhv_gioi_han_gift.js"></script>
    <script src="../../assets/js/js_su_kien/sinh_nhat_hoi_vien/snhv_sx_gift.js"></script>