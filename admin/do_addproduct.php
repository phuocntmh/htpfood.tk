<?php
	$idgroup=$_POST['idgroup'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$price=$_POST['price'];
	$discount=$_POST['discount'];
	$detail=$_POST['detail'];
	//upload image file
	$target_dir="img/sanpham/";
	$target_file=$target_dir.basename($_FILES["fileToUpload"]["name"]);
	$uploadOk=1;
	$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if file already exists
	if (file_exists($target_file)) 
	{
	    print "<script language='JavaScript'>alert('File ảnh sản phẩm đã tồn tại!');</script>";
	    print "<meta http-equiv='refresh' content='0; index.php?thread=addproduct'>";
	}
	//upload file
	if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
	    $uploadOk=0;
    //update database
    require_once("mysql.php");  
    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
    mysqli_set_charset($conn, 'UTF8');
    if ($conn->connect_error) 
    { 
        die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
    }
    $result = $conn->query("INSERT INTO sanpham (idnhomsp,tensp,nhacc,giatien,giamgia,hinh,chitiet) VALUES ('{$idgroup}','{$name}','{$address}','{$price}','{$discount}','{$target_file}','{$detail}')");
	if ($result && $uploadOk==1)
	{
		print "<script language='JavaScript'>alert('Thêm sản phẩm thành công.');</script>";
		print "<meta http-equiv='refresh' content='0; index.php?thread=viewallproduct'>";
	}
	else
	{
		print "<script language='JavaScript'>alert('Thêm sản phẩm KHÔNG thành công.');</script>";
		print "<meta http-equiv='refresh' content='0; index.php?thread=addproduct'>";
	}
?>