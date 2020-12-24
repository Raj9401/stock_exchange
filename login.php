<?php

/**
 *  Name : Armaan Singh
 *  ID : 000794766
 *  Statement Of Authorship: I Armaan Singh, 000794766 ensure that all the work done is mine. 
 *      I haven't Copied from someone else and didn't allow someone else to submit
 *  
 *  This is a login.php which checks whether user is logged in or not.
 *  If the paramter of the username and password matches the one in users database table it will have access to ins.php
 *  Where admin inserts new stock record.
 * 
 *  In the file, user is being verified through the username and password.
 *  If the password entered matches the one in encrypted in database 
 * 
 */
session_start();
include "connect.php";
?>
<html>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stock.css">
</head>

<body>

    <?php
    if (isset($_REQUEST['sub'])) {

        //Getting the admin credentials (username and userpassword)
        $user = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        //Sql query for checking the admin user throught pssword 
        $verifyst = "SELECT * FROM users WHERE UserName = ? ";
        $stmt3 = $dbh->prepare($verifyst);
        $param = [$user];
        $success = $stmt3->execute($param);
        $row = $stmt3->fetch();

        ///Verifying the password
        $validpassword = password_verify($password, $row['Password']);

        if ($validpassword && $success && $stmt3->rowCount()) {
            $_SESSION["name"] = $user;

            //Verifying the logged in user
            if (isset($_SESSION["name"])) {
                echo "Welcome " . $_SESSION["name"];
                header("location: ins.php");
            } else {
                echo "<h1>Login Error for Session Name</h1>";
            }
        } else {
            session_unset();
            session_destroy();
            echo "<h1>Login Error.  Session Destroyed</h1>";
            echo "<h1><a href = 'display.php'> Sorry Your password does not matches <a></h1>";
            echo "<h1><a href = 'index.html'> Back to main page <a></h1>";
            session_start();
        }
    }
    ?>
    <h1>Log In</h1>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="User Name" required> <br>
        <input type="password" name="password" placeholder="Password" required> <br>
        <input type="submit" value="Log in" name="sub" id="login">
        <a href="signup.php">Don't have. Create One</a>
    </form>
</body>

</html>