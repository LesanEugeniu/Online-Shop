<?php

$conn = mysqli_connect("localhost", "root", "mysql", "astro");

if(!$conn){
    echo "Connection Failed";
}
mysqli_close($conn);