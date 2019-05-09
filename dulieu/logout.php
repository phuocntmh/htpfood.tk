<?php
	if (session_destroy())
	{	
		echo"<SCRIPT LANGUAGE='JavaScript'>alert('Bạn đã đăng xuất!');</script>";
	 	echo"<meta http-equiv='refresh' content='0; index.php'>";
	}
	else
		echo "Đăng xuất bị lỗi. Vui lòng thử lại!";
		echo '<br><a href="index.php">Về trang chủ.<br></a>';
?>