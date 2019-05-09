<?php
	$iduser=$_GET['iduser'];

	$a=mysql_query("DELETE FROM nguoidung WHERE iduser={$iduser}");
	if ($a)
	{
		print "<script language='JavaScript'>alert('Xoá thành công người dùng này!');</script>";
		print "<meta http-equiv='refresh' content='0; index.php?thread=viewalluser'>";
	}
	else
	{
		print "<script language='JavaScript'>alert('Xoá không thành công!');</script>";
		print "<meta http-equiv='refresh' content='0; index.php?thread=viewalluser'>";
	}

?>
