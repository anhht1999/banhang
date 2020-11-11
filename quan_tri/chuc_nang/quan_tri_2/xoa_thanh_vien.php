<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$tv="DELETE FROM thong_tin_quan_tri WHERE id = $id ";
	mysqli_query($conn,$tv);
?>
