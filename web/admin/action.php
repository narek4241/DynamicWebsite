<meta charset="utf-8">
<?php  

if( isset($_POST['ins']) ){

$name = $_POST['NAME'];
$price = $_POST['PRICE'];
$img = $_FILES['PICTURE']['name'];
$des = $_POST['DESCRIPTION'];

$grwr = mysqli_connect('localhost','root','','shop');

mysqli_set_charset($grwr,'utf8');

$grr = "INSERT INTO `products` (`name`,`price`,`img`,`description`)
	VALUES('$name','$price','$img','$des')";
mysqli_query($grwr,$grr);

move_uploaded_file($_FILES['PICTURE']['tmp_name'], "../images/".$img);

echo "<h1 style='text-align:center' >Ապրանքը ավելացված է</h1>";
}	

//--Narek-Admin-----Delete

if( isset($_GET['del']) ){
// Delete code here

$del = $_GET['del'] ; 

$grwr = mysqli_connect('localhost','root','','shop');

mysqli_set_charset($grwr,'utf8');


$grr = "DELETE FROM `products` WHERE `id` = $del"	;

mysqli_query($grwr,$grr);

echo " <h1 style='text-align:center'>Ապրանքը ջնջված է</h1>";
}	


// ------Narek-Editing-Products

if( isset($_POST['edit']) ){

$id = $_POST['aydi'];
$name = $_POST['anun'];
$price = $_POST['gin'];
$img = $_FILES['nkar']['name'];
$description = $_POST['nkaragrutyun'];

// $edit = $_GET['edit'] ; 

$grwr = mysqli_connect('localhost','root','','shop');


mysqli_set_charset($grwr,'utf8');


$grr = "UPDATE `products` SET 
`name`='$name',
`price`=$price ,  	
`img`='$img' ,  	
`description`= '$description'

WHERE `id` = $id;

";
		
mysqli_query($grwr,$grr);


echo "<h1 style='text-align:center'>Ապրանքը փոփոխված է</h1>";
}	

?>

