<?php
if(!isset($_SESSION))
{
	session_start();
	
	
	    if(!isset($_SESSION['Cart']))
        {  $_SESSION['Cart'] = array(); }
	require('model/model.php');
}

$action = filter_input(INPUT_GET, 'action');  
if ($action == NULL) {
    $products = getProducts();
    include 'home.php';

}

//cart start at the beggingin of the session

if($action == "product") {
	$product = getProduct($id)
	include "product.php";
}
if($action == "add") {
	$name = filter_input(INPUT_GET, 'name');
	$price = filter_input(INPUT_GET, 'price');
	$picture = filter_input(INPUT_GET, 'picture');
	$description =  filter_input(INPUT_GET, 'description');
	$product = array();
	array_push($product, $picture, $name, $price);
	$products = array($product);
	$_SESSION['Cart'][] = $products;
	include "product.php";
}
if($action == "goCart") {
		$cart = $_SESSION['Cart'];
		include "cart.php";
	
}
if($action == "delete") {
	
	session_destroy();
	include "products.php";
}
if($action == "order"){
	$total = filter_input(INPUT_GET, 'total');
	include "order.php";
}
if($action == "confirm") {  include "confirm.php"; }

?>
