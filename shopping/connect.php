<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="shopping_cart";

    $con=mysqli_connect($host,$user,$password,$db);
    $con->query("SET NAMES UTF8");
?>