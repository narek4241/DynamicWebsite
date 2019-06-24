<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Shop</title>
<?php 

$aa = mysqli_connect('localhost','root','','shop');
mysqli_set_charset($aa,'utf8');
$ab = 'SELECT * FROM `products` ORDER BY `id` ';
$ag = mysqli_query($aa,$ab);
$ad = mysqli_fetch_all($ag , MYSQLI_ASSOC); 

// echo "<pre>";
// print_r($cols);
// echo "</pre>";

?>
</head>
<body>

		<?php include 'header.php' ?>
		<?php include 'menu.php' ?>
		<div class ="ob">

			<?php  
				$i=0;
				while ($i<count($ad)) {
				?>
					<article>
						<a href="apranq.php?id=<?php echo $ad[$i]['id'] ?>" class="apr">
							<h1 style="text-align: center"><?php echo $ad[$i]['name'] ?></h1>
							<img src="images/<?php echo $ad[$i]['img'] ?>"">
							<h3><?php echo $ad[$i]['price'] ?> $</h3>
						</a>
						<div style="clear: both;"></div>
					</article>


				<?php
					$i++;
				}

			?>
			<div style="clear: both"></div>
		</div>
		<!-- <?php include 'footer.php' ?> -->
	


</body>
</html>