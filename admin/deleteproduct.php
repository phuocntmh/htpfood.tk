<?php
	$idproduct=$_GET['idproduct'];

	$sql_query = @mysql_query("SELECT * FROM sanpham WHERE idsanpham={$idproduct}");
	$b=@mysql_fetch_array($sql_query);
	$link=$b['hinh'];
	unlink($link);
	$a=mysql_query("DELETE FROM sanpham WHERE idsanpham={$idproduct}");
	if ($a)
	{
		print "<script language='JavaScript'>alert('Xoá thành công sản phẩm!');</script>";
		print "<meta http-equiv='refresh' content='0; index.php?thread=viewallproduct'>";
	}
	else
	{
		print "<script language='JavaScript'>alert('Xoá không thành công!');</script>";
		print "<meta http-equiv='refresh' content='0; index.php?thread=viewallproduct'>";
	}
?>