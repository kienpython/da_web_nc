<!-- Kết nối CSDL -->
<?php
    include_once "lop_pages.php";

?>

<!-- Hien thi bang -->

<div class = "lop_div-hienthi">
    <div class = "lop_div-hienthi1">
        <table>
            <div  class='lop_div-tap'>
                <li class="lop_div lop_div-lop"><a href="../view/lop.php">Class</a></th></li>
                <li class="lop_div lop_div-personal"><a href="../view/personal.php">Personal</a></li>
            </div>
        
                <?php
                   include_once "view_lop_popup.php";
                ?>  
                    
            <!-- tạo giao diện nút thêm, sửa, xóa -->
            <div class='lop_div-chua_button'>
                <button class='lop_div-button js-them ' type="button" onclick="">Thêm</button>
                <button class='lop_div-button js-sua' type="button" onclick="">Sửa</button>
                <button class='lop_div-button js-xoa lop_div-button_xoa' type="button" onclick="">Xóa</button>    
            </div>  
        </table> 
    </div>

    <div class = "lop_div-hienthi2">
        <!-- tạo giao diện sắp xếp -->
            <div class="lop_div-search-sort">
                <form class="lop_form-search" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
                    <div class="lop_form_div-search">
                        <button class='lop_input-search' type="submit"><i class="fa-solid fa-magnifying-glass lop_search-input-icon"></i></button>
                        <input class='lop_input-search' type="text" name="lop_input-search" placeholder="Search....">
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
                        <input class="lop-sort" type="submit" value="Tìm kiếm"></form>
                    </div>
                </form>
            </div>
        <table class="lop_table-hienthi">
            <tr class="lop_table_row-hienthi lop_table-Tieu_de" style="background-color: #4472C8">
                <th>ID Class</th>
                <th>Tên lớp</th>
                <th>Gói tập</th>
                <th>Thời lượng(h)</th>
                <th>Ngày hoạt động</th>
                <th>Sĩ số lớp</th>
                <th>Teacher</th>
                <th>ID Nhân viên</th>
                <th>Doanh thu(m)</th>
            </tr>
            <?php

            // Duyệt qua các phẩn từ trong bảng
            while($row = mysqli_fetch_array($query))
        {
            ?>
            <tr class='lop_table_row-hienthi'>
                <td  class="lop_table_td-hienthi-td"><?php echo $row["id_lop"]?></td>
                <td  class="lop_table_td-hienthi-td"><?php echo $row["ten_lop"]?></td>
                <td  class="lop_table_td-hienthi-td"><?php echo $row["packages"]?></td>
                <td  class="lop_table_td-hienthi-td"><?php echo $row["thoi_luong"]?></td>
                <td  class="lop_table_td-hienthi-td"><?php echo $row["ngay_hoat_dong"]?></td>
                <td  class="lop_table_td-hienthi-td"><?php echo $row["so_luong_hv"]?></td>
                <td  class="lop_table_td-hienthi-td"><?php echo $row["name"]?></td>
                <td  class="lop_table_td-hienthi-td"><?php echo $row["id_nv"]?></td>
                <td  class="lop_table_td-hienthi-td"><?php echo $row["doanh_thu"]?></td>
            <?php
        }
            ?>    
            
        </table>
    </div>
</div>
    <?php
        $mysqli -> close();
    ?>  