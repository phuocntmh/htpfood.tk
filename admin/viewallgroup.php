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
        <p><h4><b>Danh sách nhóm sản phẩm</b></h4></p>
      </div>
    </div>
    <table style="width: 90%;">
      <thead>
        <th style="text-align: center;">#</th>
        <th style="text-align: center;">Tên nhóm sản phẩm</th>
        <th style="text-align: center;">Số lượng sản phẩm</th>
        <th style="text-align: center;">Xem danh sách</th>
        <th style="text-align: center;">Chức năng</th>
      </thead>
      <tbody>
        <?php
          $i=1;
          while($row = $result->fetch_assoc())
          {
            $sql_query = @mysql_query("SELECT count(*) FROM sanpham WHERE idnhomsp='{$row['idnhomsp']}'");
            $a = @mysql_fetch_array($sql_query);
        ?>
        <tr>
          <td><?php echo $i++; ?></td>
          <td><?php echo $row['tennhomsp']; ?></td>
          <td><?php echo $a['count(*)']; ?></td>
          <td><a href="?thread=groupview&idgroup=<?php echo $row['idnhomsp']; ?>">Xem</a></td>
          <td><a href="?thread=deletegroup&idgroup=<?php echo $row['idnhomsp']; ?>">Xoá</a></td>
        </tr>
        <?php
          }
        ?>
      </tbody>
    </table> 
  </div>
</div>      