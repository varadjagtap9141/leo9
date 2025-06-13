<?php
$hostname="localhost";
$username="root";
$password="sql1234";
$dbname="leo9";

$conn=mysqli_connect($hostname,$username,$password,$dbname);

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
?>