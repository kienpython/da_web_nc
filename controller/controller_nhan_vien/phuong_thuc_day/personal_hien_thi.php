<!-- Kết nối CSDL -->
<?php
    include_once "../controller/connection.php";
    include_once "personal_pages.php";
    include_once "view_personal_popup.php"
?>

<!-- Hien thi bang -->

<div class = "personal_div-hienthi">
    <div class = "personal_div-hienthi1">
        <table >
            <div  class='personal_div-tap'>
                <li class="personal_div personal_div-class"><a href="../view/class.php">Class</a></th></li>
                <li class="personal_div personal_div-personal"><a href="../view/personal.php">Personal</a></li>
            </div>
            
            <!-- tạo giao diện nút thêm, sửa, xóa -->
            <div class='personal_div-chua_button'>
                <button class='personal_div-button js-them' type="button" onclick="">Thêm</button>
                <button class='personal_div-button js-sua' type="button" onclick="">Sửa</button>
                <button class='personal_div-button js-xoa personal_div-button_xoa' type="button" onclick="">Xóa</button>    
            </div>
        </table>
    </div>

    <div class = "personal_div-hienthi2">
            <div class="personal_div-search-sort">
                <form class="personal_form-search" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
                    <div class="personal_form_div-search">
                    <button class='personal_input-search' type="submit"><i class="fa-solid fa-magnifying-glass personal_search-input-icon"></i></button>
                    <input  class='personal_input-search' type="text"  name="personal_input-search" placeholder="Search....">
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
                    <input class="personal-sort" type="submit" value="Tìm kiếm"></form>
                    </div>
                </form>

             </div>
        <table class="personal_table-hienthi">
            <tr class="personal_table_row-hienthi personal_table-Tieu_de" style="background-color: #4472C8">
                <th>ID Personal</th>
                <th>Tên HV</th>
                <th>ID HV</th>
                <th>Thời lượng(h)</th>
                <th>Số buổi</th>
                <th>Tên PT</th>
                <th>ID PT</th>
                <th>Doanh thu</th>
            </tr>
            <?php
            // Duyệt qua các phẩn từ trong bảng
            while($row = mysqli_fetch_array($query))
        {
            ?>
            <tr class='personal_table_row-hienthi'>
                <td  class="personal_table_td-hienthi-td"><?php echo $row["id_personal"]?></td>
                <td  class="personal_table_td-hienthi-td"><?php echo $row["name_hv"]?></td>
                <td  class="personal_table_td-hienthi-td"><?php echo $row["id_hv"]?></td>
                <td  class="personal_table_td-hienthi-td"><?php echo $row["thoi_luong"]?></td>
                <td  class="personal_table_td-hienthi-td"><?php echo $row["so_buoi"]?></td>
                <td  class="personal_table_td-hienthi-td"><?php echo $row["name"]?></td>
                <td  class="personal_table_td-hienthi-td"><?php echo $row["id_nv"]?></td>
                <td  class="personal_table_td-hienthi-td"><?php echo $row["doanh_thu"]?></td>
            <?php
        }
            ?>    
        </table>
       

    </div>
</div>
    <?php
    $mysqli -> close();
    ?>
