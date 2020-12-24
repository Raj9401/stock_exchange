<?php

/**
 * Name: Armaan Singh
 * ID: 000794766
 * Statement Of Authorship: I Armaan Singh, 000794766 ensure that all the work done is mine. I haven't Copied from someone else and didn't allow someone else to submit
 * 
 * This is register.php file which registers the account of user in users table
 * and directs it to ins.php..
 * 
 * Here, the password entered by the user is being hased so that 
 * there is an encrypted password in the users database.
 * 
 * Also, use of session management is being sone so that the user remains logged in.
 * This file insert new user in users database table.
 * 
 * 
 */
session_start();
include "connect.php";


?>

<!DOCTYPE html>
<html>

<head>
    <title>Create Account</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <linl rel="stylesheet" href="css/stock.css">
</head>

<body>
    <?php

    //Fetching the  users credentials from the signup.php
    $user = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    //Hashing the password
    $hash = password_hash($password, PASSWORD_DEFAULT);

    //Session management for user
    $_SESSION["name"] = $user;

    //Registers new user in the users table
    $comm = "INSERT INTO users(UserName,Password) values (?,?)";
    $stmt2 = $dbh->prepare($comm);
    $param = [$user, $hash];
    $sucess = $stmt2->execute($param);

    if ($stmt2->rowCount() && $sucess) {
        echo "You are registered as an Admin user now <br>";
        header("location: ins.php");
        echo "<a href='ins.php'>You can insert new Stocks </a><br>";
    } else {

        echo "<a href='display.php'>Sorry failed</a><br>";
    }
    ?>
</body>

</html>