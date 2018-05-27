<?php
$db = 'test';
$host = 'localhost';
$username = 'root@localhost';
$password = '';
try {
    $conn = new mysqli($host,$username,$password,$db);
} catch(Exception $e){
    die('failed to query');
}
$conn->set_charset("utf8");
?>