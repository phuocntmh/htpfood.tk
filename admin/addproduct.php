<?php
    require_once("mysql.php");  
    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
    mysqli_set_charset($conn, 'UTF8');
    if ($conn->connect_error) 
    { 
        die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
    }
    $result = $conn->query("SELECT * from nhomsp");   
?>

<script language="JavaScript">
	function CheckData(form)
	{
		if (form.name.value=="")
		{
			alert("Tên sản phẩm không được để trống!");
			return false;
		}
		if (form.address.value=="")
		{
			alert("Xuất sứ không được để trống!");
			return false;
		}
		if (form.price.value=="")
		{
			alert("Giá tiền không được để trống!");
			return false;
		}
		if (form.discount.value=="")
		{
			alert("Giảm giá không được để trống!");
			return false;
		}
		return true;
	}
</script>

<div class="row">
  	<div class="col-md-3">
    	<table class="table table-hover" style="width: 70%; margin-left: 20%;">
      		<thead>
        		<tr><th style="text-align: center; background: #147e40; color: #fff;">Quản lý</th></tr>
      		</thead>
      		<tbody>
      			<tr><td style="text-align: left;"><a href="?thread=viewalluser">Xem danh sách người dùng</a></td></tr>
		        <tr><td style="text-align: left;"><a href="?thread=viewallgroup">Xem Nhóm sản phẩm</a></td></tr>
		        <tr><td style="text-align: left;"><a href="?thread=viewallproduct">Xem Danh sách sản phẩm</a></td></tr>
		        <tr><td style="text-align: left;"><a href="?thread=viewallcart">Xem Danh sách giỏ hàng</a></td></tr>
		        <tr><td style="text-align: left;"><a href="?thread=addgroup">Thêm Nhóm sản phẩm</a></td></tr>
		        <tr><td style="text-align: left;"><a href="?thread=addproduct">Thêm sản phẩm</a></td></tr>
      		</tbody>
    	</table>
  	</div>
  	<div class="col-md-9">
    	<div style="text-align: center;">
      		<h3><b>HTP FOOD - CỬA HÀNG TRÁI CÂY TƯƠI - GIAO DIỆN QUẢN TRỊ</b></h3>
      		<p><h4>Trái cây tươi sạch - Vì sức khoẻ người tiêu dùng!</h4></p>
      		<p>--------------------</p>
    	</div>
	    <form method="POST" action="?thread=do_addproduct" onsubmit="return CheckData(this)" enctype="multipart/form-data">
			<table style="width: 50%;" align="center">
				<th colspan="2"><center><h4><b>Thêm một mặt hàng</b></h4></center></th>
				<tr>
					<td style="width: 30%; text-align: left;">Nhóm sản phẩm: </td>
					<td>
						<select id="idgroup" name="idgroup">
							<?php
								while($row = $result->fetch_assoc())
		          				{
		          			?>
									<option value="<?php echo $row['idnhomsp']; ?>"><?php echo $row['tennhomsp']; ?></option>
							<?php
								}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td style="width: 30%; text-align: left;">Tên sản phẩm: </td>
					<td> <input class="inputname" type="text" name="name"> </td>
				</tr>
				<tr>
					<td style="width: 30%; text-align: left;">Xuất sứ: </td>
					<td> <input class="inputname" type="text" name="address"> </td>
				</tr>
				<tr>
					<td style="width: 30%; text-align: left;">Giá tiền: </td>
					<td> <input class="inputname" type="text" name="price"> </td>
				</tr>
				<tr>
					<td style="width: 30%; text-align: left;">Giảm giá (%): </td>
					<td> <input class="inputname" type="text" name="discount"> </td>
				</tr>
				<tr>
					<td style="width: 30%; text-align: left;">Hình ảnh: </td>
					<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
				</tr>
				<tr>
					<td style="width: 30%; text-align: left;">Chi tiết: </td>
					<td> <input class="inputname" style="height: 5em;" type="text" name="detail"> </td>
				</tr>
				<tr>
		            <td colspan="2" align = "center">
		                <input type="submit" name="submit" value="Thêm sản phẩm">
		            </td>
		        </tr>
			</table>
		</form>
  	</div>
</div>      