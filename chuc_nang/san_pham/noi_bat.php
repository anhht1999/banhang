

	<?php 
		// $tv="select id,ten,hinh_anh from san_pham where noi_bat='co' order by id desc limit 0,3";
		// $tv_1=mysqli_query($conn,$tv);
		// while($tv_2=mysqli_fetch_array($tv_1))
		// {
		// 	$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
		// 	$link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
		// 	echo "<a href='$link_chi_tiet' >";
		// 		echo "<img src='$link_anh' width='100px' >";
		// 	echo "</a>";
		// 	echo "<br><br>";
		// 	echo $tv_2['ten'];
		// 	echo "<br>";
		// 	echo "<br>";
		// }
	?>


<div style="margin-top: 20px;margin-bottom: 15px;">
	<h3>Sản phẩm nổi bật</h3>
</div>

<?php 
	$tv="select id,ten,hinh_anh ,gia from san_pham where noi_bat='co' order by id desc limit 0,3";
	$tv_1=mysqli_query($conn,$tv);
	echo "<table>";
	while($tv_2=mysqli_fetch_array($tv_1))
	{
		echo "<tr>";
			for($i=1;$i<=3;$i++)
			{
				echo "<td  width='700px' valign='top' >";
					if($tv_2!=false)
					{
						$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
						$link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
						$gia=$tv_2['gia'];
						$gia=number_format($gia,0,",",".");
						echo "<a href='$link_chi_tiet' >";
							echo "<img src='$link_anh' width='180px' height='250px'>";
						echo "</a>";
						echo "<br>";
						echo "<br>";
						echo "<a href='$link_chi_tiet' >";
							echo $tv_2['ten'];
						echo "</a>";
						echo "<div style='margin-top:5px' >";						
						echo $gia;
						echo "</div>";
						echo "<br>";
					}
					else 
					{
						echo "&nbsp;";
					}
				echo "</td>";
				if($i!=3)
				{
					$tv_2=mysqli_fetch_array($tv_1);
				}
			}
		echo "</tr>";
	}
	echo "</table>";
?>

