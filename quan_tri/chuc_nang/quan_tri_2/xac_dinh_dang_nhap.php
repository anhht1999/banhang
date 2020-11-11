<?php 
	if(!isset($bien_bao_mat)){exit();}
	
	
	if(isset($_POST['dang_nhap_quan_tri']))
	{
		$ky_danh=$_POST['ky_danh'];
		
		$mat_khau=$_POST['mat_khau'];
		
		$mat_khau1=md5($mat_khau);
		
		$tv = "SELECT * FROM thong_tin_quan_tri
				WHERE ky_danh = '$ky_danh' AND mat_khau = '$mat_khau1'";
		$tv_1 = mysqli_query($conn, $tv);

		if(mysqli_num_rows($tv_1) > 0){

			$_SESSION["ky_danh"] = $ky_danh;
			$_SESSION["mat_khau"] = $mat_khau1;
			header("location: index.php");
		}
		else{
			header("location: index.php");
		}

	}
	
	if(isset($_SESSION['ky_danh']) && isset($_SESSION['mat_khau']))
	{
			$xac_dinh_dang_nhap="co";
	}
?>