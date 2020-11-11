<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$ky_danh=$_POST['ky_danh'];
	$quyen=$_POST['quyen'];
	$hoten=$_POST['hoten'];
    $id=$_GET['id'];

    $sql ="UPDATE `thong_tin_quan_tri` 
    SET `ky_danh`='$ky_danh',`hoten`='$hoten',`quyen`='$quyen' 
    WHERE id ='$id' ";

    mysqli_query($conn,$sql);
?>