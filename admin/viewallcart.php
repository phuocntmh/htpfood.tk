<?php
    require_once("mysql.php");  
    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
    mysqli_set_charset($conn, 'UTF8');
    if ($conn->connect_error) 
    { 
        die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
    }
    $result = $conn->query("SELECT idgiohang,hoten,tensp,soluong,g.giatien,diachi from giohang g INNER JOIN nguoidung n ON g.iduser=n.iduser INNER JOIN sanpham s ON g.idsanpham=s.idsanpham");   
?>

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
    <div>
      <div style="text-align: center;">
        <p><h4><b>Danh sách giỏ hàng</b></h4></p>
      </div>
    </div>
    <table style="width: 90%;">
      <thead>
        <th style="text-align: center;">#</th>
        <th style="text-align: center;">Tên khách hàng</th>
        <th style="text-align: center;">Địa chỉ</th>
        <th style="text-align: center;">Tên sản phẩm</th>
        <th style="text-align: center;">Số lượng</th>
        <th style="text-align: center;">Giá tiền</th>
        <th style="text-align: center;">Chức năng</th>
      </thead>
      <tbody>
        <?php
          $i=1;
          while($row = $result->fetch_assoc())
          {
        ?>
        <tr>
          <td><?php echo $i++; ?></td>
          <td><?php echo $row['hoten']; ?></td>
          <td><?php echo $row['diachi']; ?></td>
          <td><?php echo $row['tensp']; ?></td>
          <td><?php echo $row['soluong']; ?></td>
          <td><?php echo number_format($row['giatien'])." VNĐ"?></td>
          <td><a href="?thread=deletecart&idcart=<?php echo $row['idgiohang']; ?>">Xoá</a></td>
        </tr>
        <?php
          }
        ?>
      </tbody>
    </table> 
  </div>
</div>      