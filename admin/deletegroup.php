<?php
	$idgroup=$_GET['idgroup'];
 	
 	$sql_query = @mysql_query("SELECT * FROM nhomsp WHERE idnhomsp={$idgroup}");
	$b=@mysql_fetch_array($sql_query);
	$link=$b['hinhnhom'];
	unlink($link);
	$a=mysql_query("DELETE FROM nhomsp WHERE idnhomsp={$idgroup}");
	if ($a)
	{
		print "<script language='JavaScript'>alert('Xoá thành công nhóm sản phẩm!');</script>";
		print "<meta http-equiv='refresh' content='0; index.php?thread=viewallgroup'>";
	}
	else
	{
		print "<script language='JavaScript'>alert('Xoá không thành công!');</script>";
		print "<meta http-equiv='refresh' content='0; index.php?thread=viewallgroup'>";
	}

?>
