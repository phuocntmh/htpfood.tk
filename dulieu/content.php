<?php
	if(!isset($_GET["thread"]))
	{
	    $_GET["thread"]='home';
	}
	switch ($_GET["thread"])
	{
		case 'home':
		{
			include_once("dulieu/homepage.php");
			break;
		}
		case 'shop':
		{
			include_once("dulieu/shop.php");
			break;
		}
		case 'register':
		{
			include_once("dulieu/register.php");
			break;
		}
		case 'login':
		{
			include_once("dulieu/login.php");
			break;
		}
		case "viewdetail":
		{
			include_once("dulieu/viewdetail.php");
			break;
		}
		case "do_register":
		{
			include_once("dulieu/do_register.php");
			break;
		}
		case "do_login":
		{
			include_once("dulieu/do_login.php");
			break;
		}
		case "logout":
		{
			include_once("dulieu/logout.php");
			break;
		}
		case "contact":
		{
			include_once("dulieu/contact.php");
			break;
		}
		case "groupview":
		{
			include_once("dulieu/groupview.php");
			break;
		}
		case "addcart":
		{
			include_once("dulieu/addcart.php");
			break;
		}
		case "viewcart":
		{
			include_once("dulieu/viewcart.php");
			break;
		}
		case "delproduct":
		{
			include_once("dulieu/delproduct.php");
			break;
		}
		case "paying":
		{
			include_once("dulieu/paying.php");
			break;
		}
		case "admin":
		{
	    	if (isset($_SESSION['admin']) && $_SESSION['admin']==1)
  			{
				include_once("dulieu/admincp.php");
				break;
			}
			else
			{
				print "<script language='JavaScript'>alert('Bạn không có quyền truy cập! Vui lòng đăng nhập.');</script>";
				print "<meta http-equiv='refresh' content='0; index.php?thread=login'>";
			}
		}
		case "viewallgroup":
		{
			include_once("admin/viewallgroup.php");
			break;
		}
		case "viewallproduct":
		{
			include_once("admin/viewallproduct.php");
			break;
		}
		case "viewallcart":
		{
			include_once("admin/viewallcart.php");
			break;
		}
		case "addgroup":
		{
			include_once("admin/addgroup.php");
			break;
		}
		case "addproduct":
		{
			include_once("admin/addproduct.php");
			break;
		}
		case "deleteproduct":
		{
			include_once("admin/deleteproduct.php");
			break;
		}
		case "deletegroup":
		{
			include_once("admin/deletegroup.php");
			break;
		}
		case "viewallcart":
		{
			include_once("admin/viewallcart.php");
			break;
		}
		case "deletecart":
		{
			include_once("admin/deletecart.php");
			break;
		}
		case "do_addproduct":
		{
			include_once("admin/do_addproduct.php");
			break;
		}
		case "do_addgroup":
		{
			include_once("admin/do_addgroup.php");
			break;
		}
		case "viewalluser":
		{
			include_once("admin/viewalluser.php");
			break;
		}
		case "deleteuser":
		{
			include_once("admin/deleteuser.php");
			break;
		}

	}
?>