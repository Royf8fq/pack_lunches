<?php
$servername = "localhost";
$username = "root";
$password = "root";

//create connection
$conn=new PDO("mysql:host=$servername", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE DATABASE IF NOT EXISTS pack_lunch";
$conn->exec($sql);
echo("Database created successfully");
$conn->exec($sql);
echo("Database selected successfully");
$stmt=$conn->prepare("DROP TABLE IF EXISTS Tbluser;
CREATE TABLE Tbluser
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
forename VARCHAR(30) NOT NULL,
surname VARCHAR(30) NOT NULL,
house VARCHAR(30) NOT NULL,
year INT(2) NOT NULL,
balance DECIMAL(5,2) NOT NULL,
password VARCHAR(200) NOT NULL,
role TINYINT(1) NOT NULL,
username VARCHAR(30) NOT NULL)
");
?>