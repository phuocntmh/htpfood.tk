<?php
	require_once("mysql.php");	
 	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
 	mysqli_set_charset($conn, 'UTF8');
    if ($conn->connect_error) 
    { 
        die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
    }
?>

<div class="container">
	<div class="main-block col-md-3">
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
	<!-- end -->
	<div class="main-block col-lg-9 col-md-9 col-sm-9 col-xs-12">
		<p class="title col-lg-12 col-md-12 col-sm-12 col-xs-12">Tất cả các sản phẩm</p>
			<?php
				$result1=$conn->query("SELECT * FROM sanpham");
				while($row1 = $result1->fetch_assoc())
				{
					$sale=$row1['giatien']-($row1['giamgia']*$row1['giatien']/100);
					$path="?thread=viewdetail&idproduct=".$row1['idsanpham'];
			?>
					<div class="categories-content col-lg-3 col-md-3 col-sm-6 col-xs-12" style="height:315px;">
					<div class="img-mini-content col-lg-3 col-md-6 col-sm-6 col-xs-12" style="width:100%;height:200px;float:left;">
						<a href="<?php echo $path; ?>"> <img src="<?php echo $row1['hinh']; ?>"></a>
					</div>
					<p class="categories-name" style="width:100%;height:42px;float:left;"><?php echo $row1['tensp']; ?></p>
					<p class="price"><span><?php echo number_format($sale); ?></span> - <span class="discount"><?php echo number_format($row1['giatien']); ?></span></p>
					<?php
						if (isset($_SESSION['user_id']))
						{
					?>
							<a class="add-cart" href="?thread=addcart&userid=<?php echo $_SESSION['user_id']; ?>&idproduct=<?php echo $row1['idsanpham']; ?>"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
					<?php
						}
					?>
				</div>
			<?php
				}
			?>
			</div>
	</div>
</div>