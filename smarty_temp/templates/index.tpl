<html>

<head>
<title> Homepage : File Upload</title>
</head>

<body>

<font color="green">{$success}</font>
<font color="red">{$error}</font>

<h2>Upload Logo</h2>
<table>
<form action="index.php" method="post" enctype="multipart/form-data">
<tr><td>Logo</td><td><input type="file" name="logo" ></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="Submit" /></td></tr>
</form>
</table>

</body>

</html>