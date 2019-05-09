<?php
	$idproduct=$_GET['idproduct'];
	require_once("mysql.php");	
 	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
 	mysqli_set_charset($conn, 'UTF8');
    if ($conn->connect_error) 
    { 
        die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
    }
?>

<div class="container">
	<div class="main-block col-md-2">
		<table class="table table-hover">
			<thead>
				<tr><th style="text-align: center; background: #147e40; color: #fff;">Nhóm sản phẩm</th></tr>
			</thead>
			<tbody>
			<?php
				$result=$conn->query("SELECT tennhomsp,idnhomsp FROM nhomsp");
				while($row = $result->fetch_assoc())
				{
					$sql_query = @mysql_query("SELECT count(*) FROM sanpham WHERE idnhomsp='{$row['idnhomsp']}'");
					$a = @mysql_fetch_array($sql_query);
			?>				
					<tr><td class="group"><a href="?thread=groupview&idgroup=<?php echo $row['idnhomsp']; ?>"> <?php echo $row['tennhomsp']." (".$a['count(*)'].")"; ?> </a></td></tr>
			<?php
				}
			?>
			</tbody>
		</table>
	</div>
	<?php 
		$result1=$conn->query("SELECT * FROM sanpham s INNER JOIN nhomsp n ON s.idnhomsp=n.idnhomsp WHERE idsanpham={$idproduct}");
		while($row1 = $result1->fetch_assoc())
		{
				$sale=$row1['giatien']-($row1['giamgia']*$row1['giatien']/100);
	?>
			<div class="main-block col-md-10">
				<p class="title col-md-12"><?php echo $row1['tensp']; ?></p>
				<div class="categories-content col-md-12">
					<div class="production-imgcol-md-6">
						<img style="width:initial; max-width:100%; margin:20px 0;" src="<?php echo $row1['hinh']; ?>">
					</div>
					<div style="text-align:left;" class="production-detail col-md-6">
						<p style="font-size:20px; font-weight:bold;">Thông tin sản phẩm</p>
						<p>- Nhóm sản phẩm: <?php echo $row1['tennhomsp']; ?></p>
						<p>- Xuất sứ: <?php echo $row1['nhacc']; ?></p>
						<p>- Giá thị trường: <span class="discount"><?php echo number_format($row1['giatien'])." VNĐ"; ?></span> - <span style="color: blue;"><i>Giảm giá: <?php echo $row1['giamgia']."%"; ?></i></span></p>
						<p style="font-size: 20; color: red;"><b>- Giá đặc biệt tại cửa hàng: <?php echo number_format($sale)." VNĐ"; ?></b></p>
						<p>- Chi tiết:</p>	
						<p><?php echo $row1['chitiet']; ?></p>
						<?php
							if (!isset($_SESSION['user_id']))
							{
						?>
								<p><a href="?thread=addcart&userid=<?php echo $_SESSION['user_id']; ?>&idproduct=<?php echo $row1['idsanpham']; ?>" class="btn btn-info disabled" role="button">Thêm vào giỏ hàng</a></p>
						<?php
							}
							else
							{
						?>
								<p><a href="?thread=addcart&userid=<?php echo $_SESSION['user_id']; ?>&idproduct=<?php echo $row1['idsanpham']; ?>" class="btn btn-info" role="button">Thêm vào giỏ hàng</a></p>
						<?php 
							}
						?>
					</div>
				</div>
			</div>
	<?php
		}
	?>
</div>