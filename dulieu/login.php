<script language="JavaScript">
	function CheckData(form)
	{
		if (form.usrname.value=="")
		{
			alert("Tên đăng nhập không được để trống!");
			return false;
		}
		if (form.password.value=="")
		{
			alert("Mật khẩu không được để trống!");
			return false;
		}
		return true;
	}
</script>

<form class="frmLogin" method="POST" action="?thread=do_login" onsubmit="return CheckData(this)">
	<table class="loginfrm">
		<th colspan="2"><center><h4><b>Đăng nhập</b></h4></center></th>
		<tr>
			<td>Tên đăng nhập: </td>
			<td> <input class="inputname" type="text" name="usrname"> </td>
		</tr>
		<tr>
			<td>Mật khẩu: </td>
			<td> <input class="inputname" type="password" name="password"> </td>
		</tr>
		<tr>
            <td colspan="2" align = "center">
                <input type="submit" name="submit" value="Đăng nhập">
            </td>
        </tr>
         <tr>
        	<td colspan="2" align="center"><b>Chưa có tài khoản </b><a href="?thread=register">Đăng ký</a></td>
        </tr>
	</table>
</form>