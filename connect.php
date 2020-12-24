<?php


/**
 * Name: Armaan Singh
 * ID: 000794766
 * Statement Of Authorship: I Armaan Singh, 000794766 ensure that all the work done is mine. I haven't Copied from someone else and didn't allow someone else to submit
 **/
try {
    $dbh = new PDO(
        "mysql:host=localhost;dbname=000794766",
        "000794766",
        "19991105"
    );
} catch (Exception $e) {
    die("ERROR: Couldn't connect. {$e->getMessage()}");
}
?>