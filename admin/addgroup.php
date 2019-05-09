<script language="JavaScript">
	function CheckData(form)
	{
		if (form.name.value=="")
		{
			alert("Tên nhóm sản phẩm không được để trống!");
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
	    <form method="POST" action="?thread=do_addgroup" onsubmit="return CheckData(this)" enctype="multipart/form-data">
			<table style="width: 50%;" align="center">
				<th colspan="2"><center><h4><b>Thêm một nhóm hàng</b></h4></center></th>
				<tr>
					<td style="width: 30%; text-align: left;">Tên nhóm sản phẩm: </td>
					<td> <input class="inputname" type="text" name="name"> </td>
				</tr>
				<tr>
					<td style="width: 30%; text-align: left;">Hình ảnh: </td>
					<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
				</tr>
				<tr>
		            <td colspan="2" align = "center">
		                <input type="submit" name="submit" value="Thêm nhóm sản phẩm">
		            </td>
		        </tr>
			</table>
		</form>
  	</div>
</div>      