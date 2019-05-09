<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HTP FOOD - Cửa hàng trái cây tươi</title>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>
      $(function () 
      {
        $('[data-toggle="tooltip"]').tooltip()
      })
  </script>
 </head>
 <body>
 	<div id="warraper">
    <div class="header">
      <?php include_once("dulieu/header.php"); ?>
    </div>
    <div style="clear:both;"></div>
    <div class="content">
      <?php include_once("dulieu/content.php"); ?>
    </div>
    <div style="clear:both;"></div>
    <div class="footer">
      <?php include_once("dulieu/footer.php"); ?>
    </div>
 	</div>
 </body>
</html>