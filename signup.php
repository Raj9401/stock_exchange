<?

/**
 * Name: Armaan Singh
 * ID: 000794766
 * Statement Of Authorship: I Armaan Singh, 000794766 ensure that all the work done is mine. I haven't Copied from someone else and didn't allow someone else to submit
 * 
 * This is signup.php file which just asks for the user parameters.
 * Here, the seession of the users start.
 * This page directs to register.php. Where new user record is inserted.
 */

session_start();
include "connect.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Create New Account</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stock.css">
</head>

<body>

    <h1> Let's Create Administrative Account </h1>
    <!-- 
    Asking for the parameters of the users for creating new account
-->
    <form action="register.php" method="post">
        <input type="text" name="fullname" placeholder="Full Name" required><br>
        <input type="text" name="name" placeholder="User Name" required> <br>
        <input type="password" name="password" placeholder="Password" required> <br>
        <input type="password" name="password" placeholder="Confirm Password" required> <br>
        <input type="submit" value="Register">
    </form>

</body>

</html>