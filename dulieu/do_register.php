<?php
	$usrname=$_POST['usrname'];
	$name=$_POST['name'];
	$password=md5($_POST['password']); 
	$address=$_POST['address'];
	$email=$_POST['email'];

	require_once("mysql.php");  
    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
    mysqli_set_charset($conn, 'UTF8');
    if ($conn->connect_error) 
    { 
        die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
    }
    $result = $conn->query("INSERT INTO nguoidung (tendangnhap,hoten,matkhau,diachi,email,loai) VALUES ('{$usrname}','{$name}','{$password}','{$address}','{$email}',0)");
	if ($result)
	{
		print "<script language='JavaScript'>alert('Đăng ký tài khoản thành công.');</script>";
		print "<meta http-equiv='refresh' content='0; index.php'>";
	}
	else
	{
		print "<script language='JavaScript'>alert('Đăng ký tài khoản thất bại. Vui lòng thử lại.');</script>";
		print "<meta http-equiv='refresh' content='0; index.php?thread=register'>";
	}
?>