<?php  

$grwr = mysqli_connect('localhost','root','','shop');

mysqli_set_charset($grwr,'utf8');

$grr = "SELECT * FROM `products`";

$grc = mysqli_query($grwr,$grr);

$wrest = mysqli_fetch_all($grc, MYSQLI_ASSOC);

// echo "<pre>";
// print_r($arr);
// echo "</pre>";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin +</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<meta charset="utf-8">
<style>
	table.tbl{
	border-collapse: collapse;	
	padding: 4px 50px;
	text-align: left;
}
.tbl img:hover{
	box-sizing: border-box;
	padding: 2px;
	border-radius: 10px;
	box-shadow: 0 0 20px gray;
}
</style>



</head>
<body>

	
	
<main class="obs">
	<form action="action.php" method="post" class="insert" enctype="multipart/form-data">
	<h1>Insert item</h1>
	<table>
		<tr>
		<td>Name:</td>
		<td><input type="text" name="NAME"></td>
		</tr>
		<tr>
		<td>Price:</td>
		<td><input type="number" name="PRICE"></td>
		</tr>
		<tr>
		<td>Image:</td>
		<td><input type="file" name="PICTURE" value="upload file" 	></td>
		</tr>
		<tr>
		<td>Text:</td>
		<td><textarea name="DESCRIPTION"></textarea></td>
		</tr>
		<tr>
		<td></td>
		<td><input type="submit" name="ins" value="Add"></td>
		</tr>
	</table>
</form>


<table border="1" cellpadding="22" class="tbl">
	<tr>
	<th>Name</th>
	<th>Price</th>
	<th>Delete</th>
	<th>Edit</th>
	</tr>

	<?php  
	$i = 0;
	while($i<count($wrest)){
	?>
	<tr>
	<td><?php echo $wrest[$i]['name'] ?></td>
	<td><?php echo $wrest[$i]['price'] ?></td>
	<td>
		<a href="action.php?del=<?php echo $wrest[$i]['id'] ?>">
		<img src="img/icon_delete.png" width="50px">
		</a>
	</td>
	<td>
		<a href="edit.php?id=<?php echo $wrest[$i]['id'] ?>">
		<img src="img/icon_edit.png" width="45px">
		</a>
	</td>
	</tr>

	<?php
		$i++;
	}

	?>

	
</table>




</main>

	
</body>
</html>




















