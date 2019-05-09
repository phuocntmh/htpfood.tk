<?php
	require_once("mysql.php");	
 	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
 	mysqli_set_charset($conn, 'UTF8');
    if ($conn->connect_error) 
    { 
        die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
    }
?>

<content>
	<div class="slide-block container">
		<div class="carousel slide" data-ride="carousel">
	  		<div class="carousel-inner" role="listbox">
	    		<div class="item active">
	      			<a href="?thread=shop"><img class="img-responsive" src="img/slide/1.jpg"></a>
	    		</div>
	    		<div class="item">
					<img class="img-responsive" src="img/slide/2.jpg">
	    		</div>
	    		<div class="item">
					<a href="?thread=contact"><img class="img-responsive" src="img/slide/3.jpg"></a>
	    		</div>
	  		</div>
	  		<!-- <a class="left carousel-control" href="#" role="button" data-slide="prev">
	    		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    		<span class="sr-only">Previous</span>
	  		</a>
	  		<a class="right carousel-control" href="#" role="button" data-slide="next">
	    		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    		<span class="sr-only">Next</span>
	  		</a> -->
		</div>
	</div>
	<!-- end slide -->
	<div style="padding-top: 10px;"></div>
	<div class="main-block container">
		<p class="title col-md-12">CÁC NHÓM SẢN PHẨM CHÍNH</p>
			<?php
				$result=$conn->query("SELECT * FROM nhomsp");
				while($row = $result->fetch_assoc())
				{
					$link="?thread=groupview&idgroup=".$row['idnhomsp'];
			?>	
					<a class="categories-content col-md-3" href="<?php echo $link; ?>">
					<img src="<?php echo $row['hinhnhom']; ?>">
					<p class="categories-name"><?php echo $row['tennhomsp']; ?></p>
					<?php
						$sql_query = @mysql_query("SELECT count(*) FROM sanpham WHERE idnhomsp='{$row['idnhomsp']}'");
						$a = @mysql_fetch_array($sql_query);
					?>
					<p class="count"><?php echo $a['count(*)']." sản phẩm"; ?></p>
					</a>	
			<?php
				}
			?>			
	</div>

	<div class="main-block container">
		<p class="title col-md-12">SẢN PHẨM MỚI</p>
		<?php
				$result1=$conn->query("SELECT idsanpham,tensp,giatien,hinh,giamgia FROM sanpham GROUP BY idsanpham,tensp,giatien,hinh ORDER BY idsanpham DESC LIMIT 0, 8");
				while($row1 = $result1->fetch_assoc())
				{
					$sale=$row1['giatien']-($row1['giamgia']*$row1['giatien']/100);
					$path="?thread=viewdetail&idproduct=".$row1['idsanpham'];
			?>	
					<a class="categories-content col-md-3" href="<?php echo $path; ?>">
					<img src="<?php echo $row1['hinh']; ?>">
					<p class="categories-name"><?php echo $row1['tensp']; ?></p>
					<p class="price"><span><?php echo number_format($sale); ?></span> - <span class="discount"><?php echo number_format($row1['giatien']); ?></span></p>
					</a>	
			<?php
				}
			?>		
	</div>
	<div style="text-align: center;">
		<img src="img/product.jpg">
	</div>
</content>