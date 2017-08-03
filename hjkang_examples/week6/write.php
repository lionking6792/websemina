<html>
<head>
<title>test</title>
</head>

<body>
<form action="insert.php" method=post>
<table width=500 cellpadding=2 cellspacing=1 bgcolor=#777777>
	<tr>
		<td>
		<font color=white>write</font>
		</td>
	</tr>
	<tr>
		<td bgcolor=white>&nbsp;
		<table>
			<tr>
				<td width=60 align=left>name</td>
				<td align=left>
					<input type=text name=name size=20 maxlength=10>
				</td>
			<tr>
			<tr>
				<td width=60 align=left>email</td>
				<td align=left>
					<input type=text name=email size=20 maxlength=25>
				</td>
			</tr>
			<tr>
				<td width=60 align=left>password</td>
				<td align=left>
					<input type=password name=pass size=9 maxlength=8>
				</td>
			</tr>
			<tr>
				<td width=60 align=left>title</td>
				<td align=left>
					<input type=text name=title size=60 maxlength=35>
				</td>
			</tr>
			<tr>
				<td width=60 align=left>content</td>
				<td align=left>
					<textarea name=content cols=65 rows=15></textarea>
				</td>
			</tr>
			<tr>
				<td colspan=10 align=center>
					<input type=submit value="save"> &nbsp; &nbsp;
					<input type=reset value="reset"> &nbsp; &nbsp;
					<input type=button value="back" onclick = "history.back(-1)">
				</td>
			</tr>
		</table>
		</td>
	</tr>
</table>
</form>
</body>
</html>
