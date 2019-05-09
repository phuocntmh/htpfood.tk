<?php
	$usrname = $_POST['usrname'];
	$password = md5($_POST['password']);
	$sql_query = @mysql_query("SELECT * FROM nguoidung WHERE tendangnhap='{$usrname}'");
	$member = @mysql_fetch_array($sql_query);
	// user name not available
	if (@mysql_num_rows($sql_query)<=0)
	{
		print "Tài khoản không tồn tại. <a href='javascript:history.go(-1)'> Quay lại.</a>";
		exit;
	}
	// check password
	if ($password!=$member['matkhau'])
	{
		print "Nhập sai mật khẩu. <a href='javascript:history.go(-1)'> Quay lại.</a>";
		exit;
	}
	// session init
	$_SESSION['user_id']=$member['iduser'];
	$_SESSION['usrname']=$member['tendangnhap'];
	$_SESSION['admin']=$member['loai'];
	// OK
	print "<SCRIPT LANGUAGE='JavaScript'>alert('Bạn đã đăng nhập thành công!');</script>";
	print "<meta http-equiv='refresh' content='0; index.php'>";
?> 