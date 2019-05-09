<header>
	<?php 
  		session_start();
  		header('Content-Type: text/html; charset=UTF-8');
  		require_once("dulieu/mysql.php"); 
	?>
		<nav class="navbar navbar-default">
			<div class="container">
			<div class="navbar-header">
	      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        		<span class="sr-only">Toggle navigation</span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	      		</button>
	      		<a class="navbar-brand" href="?thread=home"><img src="img/logo.png"></a>
	    	</div>
	    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    		<ul class="nav navbar-nav">
	    			<li><a href="?thread=home"><i class='glyphicon glyphicon-home'></i>  TRANG CHỦ</a></li>
	    			<li><a href="?thread=shop"><i class='glyphicon glyphicon-th'></i>  CỬA HÀNG</a></li>
	    			<li><a href="?thread=contact"><i class='glyphicon glyphicon-phone-alt'></i>  LIÊN HỆ</a></li>
	    			<?php
	    				if (isset($_SESSION['admin']) && $_SESSION['admin']==1)
  						{
					?>
	    					<li><a href="?thread=admin"><i class='glyphicon glyphicon-calendar'></i>  QUẢN LÝ</a></li>
	    			<?php
	    				}
	    				if (isset($_SESSION['user_id']))
	    				{
	    			?>
	    					<li><a href="?thread=viewcart"><i class='glyphicon glyphicon-shopping-cart'></i></a></li>
	    			<?php
	    				}
	    			?>
	    		</ul>
	    		<ul class="nav navbar-nav navbar-right">
	    			<?php
	    				if (!isset($_SESSION['user_id']))
	    				{
	    			?>
							<li class='login-dn'><a href='?thread=login'><i class='glyphicon glyphicon-log-in'></i>  Đăng nhập</a></li>
							<li><a href='?thread=register'><i class='glyphicon glyphicon-edit'></i>  Đăng ký</a></li>
					<?php	
						}
						else
						{
					?>
							<li class='login-dn'><a href=''><i class='glyphicon glyphicon-user'></i>  Xin chào: <?php echo $_SESSION['usrname']; ?>
							<li><a href='?thread=logout'><i class='glyphicon glyphicon-remove'></i>  Thoát</a></li>
					<?php
						}
					?>
	    		</ul>
	    	</div>
	    	</div>
	    </nav>
	</header>