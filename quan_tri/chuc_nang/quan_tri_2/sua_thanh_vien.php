<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$tv="select * from thong_tin_quan_tri where id='$id' ";
	$tv_2=mysqli_query($conn,$tv);
	// $tv_2=mysqli_fetch_array($tv_1);
	$ky_danh=$tv_2['ky_danh'];
	$hoten=$tv_2['hoten'];
	$quyen=$tv_2['quyen'];

	echo $ky_danh, $hoten, $quyen;
?>
<form action="" method="post" >
	<table width="990px" >
		<tr>
			<td width="180px" ><b style="color:blue;font-size:20px" >Sửa thành viên</b><br><br> </td>
		</tr>
		<tr>
			<td >Tài khoản : </td>
			<td >
				<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="ky_danh" value="<?php echo $ky_danh; ?>" >
			</td>
		</tr>
        <tr>
			<td >Họ và tên : </td>
			<td >
				<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="hoten" value="<?php echo $hoten; ?>" >
			</td>
		</tr>
		<tr>
			<td>Quyền : </td>
				<select name="quyen" style="margin-top:3px;margin-bottom:3px;" >
                    <?php 
                    if(isset($ky_danh) && $quyen == 1) { 
                        echo '<option value="1" selected> Admin </option>';    
                        echo '<option value="0" > Member </option>';
                    }
                    else{
                        echo '<option value="1" > Admin </option>';    
                        echo '<option value="0" selected> Member </option>';
                    }
                    ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<br>
				<input type="submit" name="bieu_mau_sua_thanh_vien" value="Sửa thành viên" style="width:200px;height:50px;font-size:24px" >
			</td>
		</tr>
	</table>
</form>