<?php

    $dbServerName = "localhost";
    $dbUsername = "test1_jasper";
    $dbPassword = "1234567";
    $databaseName = "test1_jasper";

    $db = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $databaseName);

    if (!$db) {
        die("Connection Failed ! " . mysqli_connect_errno());
    }
