<?php
session_start();
// $username = 'root';
// $dsn = 'mysql:host=localhost; dbname=nnesa';
// $password = '';
// try {
// $db = new PDO($dsn, $username, $password);
// }
// catch (PDOException $ex){
// 	echo "Connection to database failed, please try again later";
// }
$con = mysqli_connect('localhost', 'root', '', 'nnesa');

if (mysqli_connect_errno()) {
	echo "not successful";
}
