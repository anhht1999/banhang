<?php 
	// $tv="select id,ten,loai_menu from menu_ngang order by id";
	// $tv_1=mysqli_query($conn,$tv);
	// echo "<div class='menu_ngang' >";
	// echo "<a href='index.php'>Trang chủ</a>";
	// while($tv_2=mysqli_fetch_array($tv_1))
	// {
	// 	if($tv_2['loai_menu']==""){$link_menu="?thamso=xuat_mot_tin&id=".$tv_2['id'];}
	// 	if($tv_2['loai_menu']=="san_pham"){$link_menu="?thamso=xuat_san_pham_2";}
	// 	echo "<a href='$link_menu'>";
	// 		echo $tv_2['ten'];
	// 	echo "</a>";
	// }
	// echo "</div>";
?>
 <ul id="main_menu">
    <li><a href="index.php">Trang chủ</a></li>
        <li>
            <a href="#">Sản phẩm</a>
            	<ul class="sub_menu">
					<li>
					<?php 
						$tv="select * from menu_doc order by id";
						$tv_1=mysqli_query($conn,$tv);
						while($tv_2=mysqli_fetch_array($tv_1))
						{
							$link="?thamso=xuat_san_pham&id=".$tv_2['id'];
							echo "<a href='$link'>";
								echo $tv_2['ten'];
							echo "</a>";
						}
						echo "</div>";
					?>
					</li>
				</ul>
    <li><a href="#">Liên hệ</a></li>
	<li><a href="#" style="width:585px">Trò chuyện</a></li>
</ul>