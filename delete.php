<?php 
include('_partials/header.php');

$id     = $_GET['id'];

$product = new Product($id);
$product->delete($id);


?>