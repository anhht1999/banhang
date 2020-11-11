<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$so_dong_tren_mot_trang=20;
	if(!isset($_GET['trang'])){$_GET['trang']=1;}
	
	$tv="select count(*) from thong_tin_quan_tri";
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);
	
	$vtbd=($_GET['trang']-1)*$so_dong_tren_mot_trang;
	$tv="select * from thong_tin_quan_tri order by id limit $vtbd,$so_dong_tren_mot_trang";
	$tv_1=mysqli_query($conn,$tv);
?>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>

<div style="width:990px;text-align:left;margin-bottom:15px;margin-top:20px"> 
	<a href="?thamso=them_thanh_vien" class="lk_c2" style="border:1px solid black; background-color:lightblue;border-radius:0.25em" >Thêm thành viên</a><br>
</div>

<table width="990px" class="tb_a1" >
	<tr style="background:#CCFFFF;height:40px;" >
		<td width="197px" ><b>Tài khoản</b></td>
        <td width="197px" ><b>Họ và tên</b></td>
        <td width="197px" ><b>Quyền</b></td>
		<td align="center" width="200px" ><b>Sửa</b></td>
		<td align="center" width="199px" ><b>Xóa</b></td>
	</tr>
	<?php 
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$id=$tv_2['id'];
            $tk=$tv_2['ky_danh'];
            $hoten=$tv_2['hoten'];
            $quyen=$tv_2['quyen'];
			$link_sua="?thamso=sua_thanh_vien&id=".$id;
			$link_xoa="?xoa_thanh_vien=co&id=".$id;
			?>
				<tr class="a_1" >
					<td>
						<a href="<?php echo $link_sua; ?>" class="lk_a1" ><?php echo $tk; ?></a>
					</td><td>
						<a href="<?php echo $link_sua; ?>" class="lk_a1" ><?php echo $hoten; ?></a>
					</td>
                    <td>
						<a href="<?php echo $link_sua; ?>" class="lk_a1" ><?php echo $quyen; ?></a>
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
	<tr>
		<td colspan="5" align="center" >
			<br>
			<?php 
				for($i=1;$i<=$so_trang;$i++)
				{
					$link_phan_trang="?thamso=quan_ly_thanh_vien&trang=".$i;
					echo "<a href='$link_phan_trang' class='phan_trang' >";
						echo $i;
					echo "</a> ";
				}
			?>
			<br><br>
		</td>
	</tr>
</table>