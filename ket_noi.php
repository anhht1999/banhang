<?php
    // mysql_connect("localhost","root","");
    // mysql_select_db("ban_hang");
    // mysql_query('SET NAMES "UTF8"');
    // B1. Kết nối PHP với MySQL Server
$conn = mysqli_connect("localhost", "root", "", "ban_hang");

// B2. Khai báo ngôn ngữ sử dụng trong CSDL cho PHP
mysqli_query($conn, "SET NAMES 'utf8'");

?> 