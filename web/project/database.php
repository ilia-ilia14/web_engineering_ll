<?php
$dbUrl = getenv('postgres://kmvcasrhbaqbpb:9ad6033621581f9819aa3ab7a526842f63bf3a5f16b02fd950a80d827be47af0@ec2-54-235-132-202.compute-1.amazonaws.com:5432/d6pvfb79n04ha4');

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["ec2-54-235-132-202.compute-1.amazonaws.com"];
$dbPort = $dbopts["5432"];
$dbUser = $dbopts["kmvcasrhbaqbpb"];
$dbPassword = $dbopts["9ad6033621581f9819aa3ab7a526842f63bf3a5f16b02fd950a80d827be47af0"];
$dbName = ltrim($dbopts["d6pvfb79n04ha4"],'/');
    try {       
$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "trying";
    } catch (PDOException $e) {

        echo "database connection error ".$dsn;
        //$error_message = $e->getMessage();
        //include('../errors/database_error.php');
        exit();
    }
?>