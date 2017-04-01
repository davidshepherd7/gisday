<?php

function connect() {
    $servername = "localhost";
    $username = "david";
    $password = "123";
    $dbname = "gisday";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $conn;
}

?> 