<!-- Kết nối CSDL -->
<?php
    include_once "../connection.php";
    $hoivienID = $_REQUEST['hoivienID'];
    $hoivien_ten = $_POST['hoivien__table-add-ten'];
    $hoivien_ngay_sinh = $_POST['hoivien__table-add-ngay_sinh'];
    $hoivien_gioi_tinh = $_POST['hoivien__table-add-gioi_tinh'];
    $hoivien_tuoi = $_POST['hoivien__table-add-tuoi'];
    $hoivien_sdt = $_POST['hoivien__table-add-sdt'];
    $hoivien_email = $_POST['hoivien__table-add-email'];
    $hoivien_cmnd = $_POST['hoivien__table-add-cmnd'];
    $hoivien_bien_xe = $_POST['hoivien__table-add-bien_xe'];
    $hoivien_diem_tich_luy = $_POST['hoivien__table-add-diem'];
        $sql = "UPDATE tbl_hoi_vien SET name_hv='".$hoivien_ten."',ngay_sinh='".$hoivien_ngay_sinh."',
              gioi_tinh='".$hoivien_gioi_tinh."', tuoi='".$hoivien_tuoi."', email='".$hoivien_email."' ,
              sdt='".$hoivien_sdt."', cmnd='".$hoivien_cmnd."', bien_xe='".$hoivien_bien_xe."',
              diem_tich_luy='".$hoivien_diem_tich_luy."' WHERE id_hv=".$hoivienID;
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../view/views_hoi_vien/hoivien.php");
?>