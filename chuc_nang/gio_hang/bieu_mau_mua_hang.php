<?php 
	echo "<br>";
	echo "<br>";
	echo "<form method='post' action='' >";
		echo "<input type='hidden' name='thong_tin_khach_hang' value='co' > ";
		echo "<table>";
			echo "<tr>";
				echo "<td colspan='2' height='30px' >";
					echo "<h2>Thông tin mua hàng</h2>";
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td height='40px' ><b style='color:red;'>Lưu ý :</b> </td>";
				echo "<td>";
					echo "<b style='color:red;'>Tên người mua , địa chỉ , điện thoại bắt buộc phải điền vào</b>";
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td width='180px' ><b>Tên người mua :</b></td>";
				echo "<td>";
					echo "<input type='text' style='width:400px' name='ten_nguoi_mua' >";
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td><b>Email :</b> </td>";
				echo "<td>";
					echo "<input type='text' style='width:400px' name='email' >";
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td><b>Địa chỉ :</b> </td>";					
				echo "<td>";
					echo "<textarea style='width:400px;' name='dia_chi' ></textarea>";
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td><b>Điện thoại : </b></td>";
				echo "<td>";
					echo "<input type='text' style='width:400px' name='dien_thoai' >";
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td><b>Nội dung :</b></td>";
				echo "<td>";
					echo "<textarea style='width:400px;height:100px' name='noi_dung' ></textarea>";
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>&nbsp;</td>";
				echo "<td>";
					echo "<input type='submit' value='Mua hàng' >";
				echo "</td>";
			echo "</tr>";
		echo "</table>";
	echo "</form>";
?>