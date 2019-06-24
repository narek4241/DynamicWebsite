<?php 

$id = $_GET['id'];
$grwr = mysqli_connect('localhost','root','','shop');

mysqli_set_charset($grwr,'utf8');

$grr = "SELECT * FROM `products` WHERE `id`=$id";

$grc = mysqli_query($grwr,$grr);

$wrest = mysqli_fetch_all($grc, MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style_admin.css">
	<meta charset="utf-8">
	<title>EDIT</title>
</head>
<body>

<main>
	<form action="action.php" method="post" class="insertTable" enctype="multipart/form-data">
	<h1>Edit item</h1>
	<table>
		<tr>
		<td>ID:</td>
		<td><input readonly type="text" name="aydi" value="<?php echo $_GET['id'] ?>"></td>
		</tr>
		<tr>
		<td>Name:</td>
		<td><input type="text" name="anun" value="<?php echo $wrest[0]['name'] ?>"></td>
		</tr>

		<tr>
		<td>Price:</td>
		<td><input type="number" name="gin" value="<?php echo $wrest[0]['price'] ?>"></td>
		</tr>
		<tr>
		<td>Image:</td>
		<td><input type="file" name="nkar" "></td>
		</tr>
		<tr>
		<td>Text:</td>
		<td><textarea name="nkaragrutyun"><?php echo $wrest[0]['description'] ?></textarea></td>
		</tr>
		<tr>
		<td></td>
		<td><input type="submit" name="edit" value="Edit"></td>
		</tr>
	</table>
</form>


</body>
</html>