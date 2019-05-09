<script language="JavaScript">
	function CheckData(form)
	{
		if (form.usrname.value=="")
		{
			alert("Tên đăng nhập không được để trống!");
			return false;
		}
		if (form.name.value=="")
		{
			alert("Họ và tên không được để trống!");
			return false;
		}
		if (form.password.value=="")
		{
			alert("Mật khẩu không được để trống!");
			return false;
		}
		if (form.address.value=="")
		{
			alert("Địa chỉ không được để trống!");
			return false;
		}
		if (form.email.value=="")
		{
			alert("Email không được để trống!");
			return false;
		}
		if (form.password.value!=form.repassword.value)
		{
			alert("Mật khẩu không trùng khớp!");
			return false;
		}
		return true;
	}
</script>

<form class="frmLogin" method="POST" action="?thread=do_register" onsubmit="return CheckData(this)">
	<table class="registerfrm">
		<th colspan="2"><center><h4><b>Đăng ký</b></h4></center></th>
		<tr>
			<td>Tên đăng nhập: </td>
			<td> <input class="inputname" type="text" name="usrname"> </td>
		</tr>
		<tr>
			<td>Họ và tên: </td>
			<td> <input class="inputname" type="text" name="name"> </td>
		</tr>
		<tr>
			<td>Mật khẩu: </td>
			<td> <input class="inputname" type="password" name="password"> </td>
		</tr>
		<tr>
			<td>Nhập lại mật khẩu: </td>
			<td> <input class="inputname" type="password" name="repassword"> </td>
		</tr>
		<tr>
			<td>Địa chỉ: </td>
			<td> <input class="inputname" type="text" name="address"> </td>
		</tr>
		<tr>
			<td>Email: </td>
			<td> <input class="inputname" type="text" name="email"> </td>
		</tr>
		<tr>
            <td colspan="2" align = "center">
                <input type="submit" name="submit" value="Đăng ký">
            </td>
        </tr>
        <tr>
        	<td colspan="2" align="center"><b>Đã có tài khoản </b><a href="?thread=login">Đăng nhập</a></td>
        </tr>
	</table>
</form>