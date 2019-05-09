<?php
    require_once("mysql.php");  
    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
    mysqli_set_charset($conn, 'UTF8');
    if ($conn->connect_error) 
    { 
        die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
    }
    $result = $conn->query("SELECT * from giohang g inner join sanpham s on g.idsanpham=s.idsanpham where g.iduser={$_SESSION['user_id']}");   
?>

<div style="text-align: center;">
    <h4><b>Giỏ hàng của <?php echo $_SESSION['usrname']; ?></b></h4>
</div>
<div class="tm-box-body">
    <table cellpadding="0" cellspacing="0" border="0" class="data-table-short" align="center">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên mặt hàng</th>
                <th>Giá tiền</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i=1; $sumall=0;
                while($row = $result->fetch_assoc())
                {
                    $price=$row['giatien']-($row['giamgia']*$row['giatien']/100);
                    $s_price=$price*$row['soluong'];
                    $sumall+=$s_price;
            ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['tensp']; ?></td>
                        <td><?php echo number_format($price); ?></td>
                        <td><?php echo $row['soluong']; ?></td>
                        <td><?php echo number_format($s_price); ?></td>
                        <td><a href="?thread=delproduct&idcart=<?php echo $row['idgiohang']; ?>">Xoá</a></td>
                    </tr>
            <?php
                }
            ?>
                    <tr>
                        <td colspan="4" align="center"><b>Tổng thành tiền</b></td>
                        <td colspan="2" align="center"><b><?php echo number_format($sumall)." VNĐ"; ?></b></td>
                    </tr>
        </tbody>
    </table>
    <div style="text-align: right; padding-right: 15em;">
        <p><a href="?thread=paying" class="btn btn-info" role="button">Tiến hành đặt hàng</a></p>
    </div>
</div>