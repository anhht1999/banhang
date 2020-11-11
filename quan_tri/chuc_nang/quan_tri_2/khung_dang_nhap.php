<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<br><br>
<link rel="stylesheet" href="giao_dien/login.css">
<main>
            <div class="container">
            <div class="login-form">
                <form  method="post">
                    <h1>Đăng nhập quản trị</h1>
    
                    <div class="input-box">
                        <i ></i>
                        <input type="text" placeholder="Nhập tài khoản" name="ky_danh">
                    </div>
                    <div class="input-box">
                        <i ></i>
                        <input type="password" placeholder="Nhập mật khẩu" name="mat_khau">
                    </div>
                    <div class="btn-box">
					<input type="submit" value="Đăng nhập" style=" height: 20px; width: 100px; border-radius: 0.5em; background: #009999;color:white;">
					<input type="hidden" name="dang_nhap_quan_tri" value="dang_nhap_quan_tri" >
                    </div>
                </form>
            </div>
            </div>
        </main>


