<?php

//DB Connection
    $servername = "localhost";
    $username = "root";
    $password = "pass123";
    $dbname = "flipkart";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE ".$dbname;

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();


$tableName = "TvPrices";

$sql = "CREATE TABLE ". $tableName."(
id VARCHAR(20)  PRIMARY KEY,
title VARCHAR(50) NOT NULL,
mrp INT(5) NOT NULL,
sp INT(5),
url VARCHAR(150) NOT NULL,
brand VARCHAR(30) NOT NULL,
image VARCHAR(150) NOT NULL
)";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating Table: " . $conn->error;
}


$conn->close();
?>