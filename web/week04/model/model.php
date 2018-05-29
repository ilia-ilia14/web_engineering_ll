<?php

require 'database.php';

function getProduct($id)
{
	global $db;
	$query = 'SELECT * FROM assignmentProducts WHERE id = :id';
              $statment = $db->prepare($query);
              $statment->bindValue(':id', $id);
              $statment->execute();
              $product = $statment->fetch();
              $statment->closeCursor();
              return $product;
              
}

function getProducts()
{
	/*
	global $db;
	$query = 'SELECT * FROM assignmentProducts';
              $statment = $db->prepare($query);
              $statment->execute();
              $products = $statement->fetchAll();
              $statment->closeCursor();
              return $products;
			  */
			  echo "here";
              
}
function search($keyword)
{
  
}

?>