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
	global $db;
	var_dump($db);
	/*
	$query = 'SELECT * FROM assignmentProducts';
              $statment = $db->prepare($query);
              $statment->execute();
              $products = $statement->fetchAll();
             // $statment->closeCursor();
			 // $arr = $statement->errorInfo();
			 // var_dump($arr);
              //return $products;
			  */
	/*		  
$stmt = $db->prepare('SELECT * FROM table WHERE id=:id AND name=:name');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
*/
              
}
function search($keyword)
{
  //git push heroku master
}

?>