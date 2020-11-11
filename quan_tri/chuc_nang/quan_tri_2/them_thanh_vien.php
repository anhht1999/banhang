<?php 
	if(!isset($bien_bao_mat)){exit();}
?><style>


</style>
<form method="post"  >
	<table width="990px" >
		<tr>
			<td colspan="2" ><b style="color:blue;font-size:26px" >Thêm thành viên</b><br><br> </td>
			
		</tr>
		<tr>
			<td width="150px" ><b>Tài khoản :</b> </td>
			<td width="840px">
				<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="ky_danh" type="text"> 
			</td>
		</tr>
		<tr>
			<td width="150px" ><b>Mật khẩu :</b> </td>
			<td width="840px">
				<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="mat_khau" type="password" >
			</td>
		</tr>
		<tr>
			<td width="150px" ><b>Họ tên :</b> </td>
			<td width="840px">
				<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="hoten" type="text" >
			</td>
		</tr>
		<tr>
			<td><b>Quyền : </b></td>
			<td>
				<select name="quyen" style="margin-top:3px;margin-bottom:3px;" >
					<option value="1" selected>Admin</option>
					<option value="0">Member</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<br>
				<input type="submit" name="bieu_mau_them_thanh_vien" value="Thêm thành viên" style="width:200px;height:50px;font-size:24px" >
			</td>
		</tr>
	</table>
</form>