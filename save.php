<?php 
include('_partials/header.php');

$name       	= $_POST['name'];
$sku     		= $_POST['sku'];
$category     	= $_POST['category'];
$price         	= $_POST['price'];
$description   	= $_POST['description'];

$id        		= $_POST['id'];

$product = new Product($name, $sku, $category, $price, $description);

if(!isset($id) OR $id == ""){
	$product->insert();

}else{
	$product->update($id);
}
?>