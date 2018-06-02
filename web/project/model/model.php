<?php

require 'database.php';

function add_member($firstname, $lastname, $email, $password, $phone) {
    global $db;
    $query = 'INSERT INTO member (firstName, lastName, Email, Password, Phone)
              VALUES (:firstName, :lastName, :Email, :Password, :Phone)';



    $statement = $db->prepare($query);
    $statement->bindValue(':firstName', $firstname);
    $statement->bindValue(':lastName', $lastname);
    $statement->bindValue(':Email', $email);
    $statement->bindValue(':Password', $password);
    $statement->bindValue(':Phone', $phone);

    $statement->execute();
    $newID = $db->lastInsertId();
    $statement->closeCursor();    
    return $newID;
}




function delete_member($firstname, $lastname, $email, $password) {
    global $db;
    $query = 'DELETE FROM member
              WHERE Email = :email';
    $statement = $db->prepare($query);

    $statement->bindValue(':firstName', $firstname);
    $statement->bindValue(':lastName', $lastname);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    
    $statement->execute();
    $statement->closeCursor();
}


function getUserByEmail($email)
{
	global $db;
	$query = 'SELECT * FROM member WHERE Email = :email';
              $statment = $db->prepare($query);
              $statment->bindValue(':email', $email);
              $statment->execute();
              $user = $statment->fetch();
              $statment->closeCursor();
              return $user;
              
}

function edit_member($firstname, $lastname, $email, $phone, $hashedPassword, $member_id)
{
  global $db;
    $query = 'UPDATE member 
              SET firstName=:firstname, lastName =:lastname, Email=:email, Phone=:phone, Password=:hashedPassword WHERE 
              memberID=:member_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':firstname', $firstname);
    $statement->bindValue(':lastname', $lastname);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue('hashedPassword', $hashedPassword);
    $statement->bindValue('member_id', $member_id);
    $statement->execute();
    $statement->closeCursor();
}

function search($keyword)
{
  
}

?>