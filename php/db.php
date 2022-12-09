<?php

$conn = new mysqli('localhost','root','mysql','astro');
if(!$conn){
    echo "Connection Succesfull!". mysqli_connect_error();
}
?>