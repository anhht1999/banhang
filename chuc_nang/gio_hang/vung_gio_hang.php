
<?php 
	$so_luong=0;
	if(isset($_SESSION['id_them_vao_gio']))
	{
		for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
		{
			$so_luong=$so_luong+$_SESSION['sl_them_vao_gio'][$i];
		}
	}
?>

<br><br>
<a href="?thamso=gio_hang"><h4 style="margin-top: 0px;">Giỏ hàng : <?php echo $so_luong; ?></h4></a>
