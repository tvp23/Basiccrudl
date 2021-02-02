<?php

//info
$host = 'localhost';
$dbname = 'basiccrud';
$username = 'root';
$password = '';

//constr
$conStr = "mysql:host=$host;dbname=$dbname";
$con = new PDO($conStr, $username, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);