<?php
	$idcart=$_GET['idcart'];

	$a=mysql_query("DELETE FROM giohang WHERE idgiohang={$idcart}");
	if ($a)
	{
		print "<script language='JavaScript'>alert('Xoá thành công sản phẩm!');</script>";
		print "<meta http-equiv='refresh' content='0; index.php?thread=viewcart'>";
	}
	else
	{
		print "<script language='JavaScript'>alert('Xoá không thành công!');</script>";
		print "<meta http-equiv='refresh' content='0; index.php?thread=viewcart'>";
	}
?>