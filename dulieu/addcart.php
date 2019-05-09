<?php
	$userid=$_GET['userid'];
	$productid=$_GET['idproduct'];
	
	require_once("mysql.php");	
 	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
 	mysqli_set_charset($conn, 'UTF8');
    if ($conn->connect_error) 
    { 
        die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
    }

    $result=$conn->query("SELECT giatien,giamgia FROM sanpham WHERE idsanpham={$productid}");
    while($row = $result->fetch_assoc())
	{
		$price=$row['giatien']-($row['giamgia']*$row['giatien']/100);
	}

	$a=mysql_query("INSERT INTO giohang (iduser,idsanpham,soluong,giatien) VALUES ('{$userid}','{$productid}',1,'{$price}')");
	if ($a)
	{
		print "<script language='JavaScript'>alert('Thêm thành công sản phẩm!');</script>";
		print "<meta http-equiv='refresh' content='0; index.php?thread=shop'>";
	}
?>