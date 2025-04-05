<?php
$host="localhost";
$user="root";
$pass="";
$dbname ="plateform-de-livraison-de-repas";

$conn = new mysqli($host,$user,$pass,$dbname);

if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}

?>