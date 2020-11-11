<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$tv="select * from slideshow order by id ";
	$tv_1=mysqli_query($conn,$tv);
?>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<div style="width:990px;text-align:left;margin-bottom:15px;margin-top:20px"> 
	<a href="?thamso=them_slideshow" class="lk_c2" style="border:1px solid black; background-color:lightblue;border-radius:0.25em" >Thêm slide</a><br>
</div>
<table width="990px" class="tb_a1" >
	<tr style="background:#CCFFFF;height:40px;" >
		<td width="710px" style="text-align:center"><b>Hình ảnh</b></td>
		<td align="center" width="140px" ><b>Sửa</b></td>
		<td align="center" width="140px" ><b>Xóa</b></td>
	</tr>
	<?php 
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$id=$tv_2['id'];
			$link_hinh="../hinh_anh/slideshow/".$tv_2['hinh'];
			$link_sua="?thamso=sua_slideshow&id=".$id;
			$link_xoa="?xoa_slideshow=co&id=".$id;
			?>
				<tr class="a_1" >
					<td align="center" >
						<a href="<?php echo $link_sua; ?>" >
							<img src="<?php echo $link_hinh; ?>" style="width:600px;margin-top:10px;margin-bottom:10px;" border="0" >
						</a>
					</td>
					<td align="center" >
						<a href="<?php echo $link_sua; ?>" class="lk_a1" >Sửa</a>
					</td>
					<td align="center" >
						<a href="<?php echo $link_xoa; ?>" class="lk_a1" >Xóa</a>
					</td>
				</tr>
			<?php 
		}
	?>

</table>