<?php
    $hostname = "localhost";
    $bancodedados = "hotel";
    $user = "root";
    $pass = "";
    $con = mysqli_connect($hostname,$user,$pass,$bancodedados) or die('Ah não! ' . mysqli_connect_error());

    $con->set_charset("utf8");