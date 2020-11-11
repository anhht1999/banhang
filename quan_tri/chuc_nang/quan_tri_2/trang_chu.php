<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<style type="text/css" >
	a.lk_1{font-size:22px;text-decoration:none;color:blue;margin-right:30px}
	a.lk_1:hover {color:red}
</style>
<br>
<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<link rel="stylesheet" href="giao_dien/trangchu.css">
<br>
    <nav>
        <ul>
            <li><a href="index.php" title="Trang chủ">Trang chủ</a></li>
            <li><a href="?thamso=quan_ly_thanh_vien">Thành viên</a></li>
            <li><a href="#">Sản phẩm</a>
				<ul>
					<li><a href="?thamso=quan_ly_san_pham" >Quản lý sản phẩm</a></li>
					<li><a href="?thamso=them_san_pham" >Thêm sản phẩm</a></li>
                    <li><a href="?thamso=san_pham_trang_chu" >Trang chủ</a></li>
                    <li><a href="?thamso=san_pham_noi_bat" >Nổi bật</a></li>
                </ul>
			</li>
            <li><a href="?thamso=hoa_don" title="Sản phẩm">Hóa đơn</a></li>
            <li><a href="#" title="Sản phẩm">Bình luận</a></li>
            <li><a href="#" title="Dịch vụ">Menu</a>
                <ul>
                    <li><a href="?thamso=quan_ly_menu_ngang" >Ngang</a></li>
                    <li><a href="?thamso=quan_ly_menu_doc" title="Sản xuất phần mềm">Dọc</a></li>
                </ul>
            </li>
            <li><a href="#">Quảng cáo</a>
				<ul>
					<li><a href="?thamso=sua_banner" >Banners</a></li>
                    <li><a href="?thamso=quan_ly_slideshow" >Silde show</a></li>
					<li><a href="?thamso=sua_quang_cao_phai" >Phải</a></li>
                </ul>
			</li>
			
            <li><a href="?thamso=thoat" style="margin-left:200px">Thoát</a></li>
        </ul>
    </nav>

<?php 
	include("chuc_nang/quan_tri_2/dieu_huong.php");
?>
