<?php
    //ket noi
    // link kết nối sai
    include_once "../../connection.php";
    // lay CSDL
    $id_personal = $_POST["personal_table-add_id_personal"];
    $id_nv = $_POST["personal_table-add_id_nv"];
    $id_hv = $_POST["personal_table-add_id_hv"];
    $thoi_luong = $_POST["personal_table-add_thoi_luong"];
    // chỗ này đặt sai tên biến
    $so_buoi = $_POST["personal_table-add_so_buoi"];
    $time_start = $_POST["personal_table-add_time_start"];
    $time_end = $_POST["personal_table-add_time_end"];
    $doanh_thu = $_POST["personal_table-add_doanh_thu"];

 
    
    // kiểm tra

    
    if($id_nv==""||$id_hv==""||$thoi_luong==""||$so_buoi==""||$time_start==""||$time_end=="")
    {    
    }
    else{
        
    // Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO tbl_personal(id_personal,id_nv,id_hv,thoi_luong,so_buoi,time_start,time_end,doanh_thu) VALUES('".$id_personal."','".$id_nv."','".$id_hv."','".$thoi_luong."','".$so_buoi."','".$time_start."','".$time_end."','".$doanh_thu."')";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    //điều hướng trang đến tdd.php để refresh
    
    }
   
?>
