<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php include('header.php') ?>
	<?php include('menu.php') ?>


<?php  

$id = $_GET['id'];

$aa = mysqli_connect('localhost','root','','shop');
mysqli_set_charset($aa,'utf8');
$ab = "SELECT * FROM `products` WHERE `id`=$id";
$ag = mysqli_query($aa,$ab);
$ad = mysqli_fetch_all($ag, MYSQLI_ASSOC);

// echo "<pre>";
//  print_r($ad);
//  echo "</pre>";
$aa=mysqli_connect()
?>

<div class="ss">
<?php 
$a=0;
while ($a<count($ad)) {
	 ?>


<h1><?php echo $ad[$a]["name"]; ?></h1>
<img src="images/<?php echo $ad[$a]["img"] ?>" alt="">
<h3><?php echo $ad[$a]["price"]; ?></h3>
<p><?php echo $ad[$a]["description"]; ?></p>


<?php 
$a++;
}
?>
</div>
	<?php include('footer.php') ?>	 
</body>
</html>