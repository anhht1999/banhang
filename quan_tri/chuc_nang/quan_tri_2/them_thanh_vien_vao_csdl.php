<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
    $ky_danh=$_POST['ky_danh'];
	$mat_khau=md5($_POST['mat_khau']);
	$hoten=$_POST['hoten'];
    $quyen = $_POST["quyen"];

    if ($ky_danh !="" && $mat_khau !="" && $hoten !="") {
        $sql="INSERT INTO `thong_tin_quan_tri`
        ( `ky_danh`, `mat_khau`, `hoten`, `quyen`) 
        VALUES ('$ky_danh','$mat_khau','$hoten','$quyen')";
        mysqli_query($conn,$sql);
    }
    else{
        thong_bao_html("Bạn cần điền các thông tin ");
    }
?>