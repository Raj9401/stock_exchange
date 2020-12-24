<?

/**
 * Name: Armaan Singh
 * ID: 000794766
 * Statement Of Authorship: I Armaan Singh, 000794766 ensure that all the work done is mine. 
 *      I haven't Copied from someone else and didn't allow someone else to submit
 *
 * This file creates random 10 stocks using stockarray which selects random stock name.
 * Then, they are all inserted in the database.
 * Also, at last it includes display.php
 * Which displays all the data for the stocks.
 * Session management is used for the user.
 * 
 *
 */
?>
<html>

<head>
   <link rel="stylesheet" href="css/stock.css">
   <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
   <script src="js/insert.js"></script>
	

</head>

<?php
session_start();
echo "<h1 id = 'h11'>Welcome " . $_SESSION['name'] . "</h1>";
include "connect.php";
date_default_timezone_set('EST');
$x = 1;
if (isset($_REQUEST['subb'])) {

   //Making array for the stock name
   $stockarray = [
      "Nike", "Alphabet", " McDonald's", "PayPal", "Netflix", "American Express", "Boeing", "Caterpillar", "MMM", "CVX", "CSCO", "KO", "XOM", "GS", "HD", "IBM", "INTC",
      "JNJ", "JPM", "MCD", "MSFT", "NKE", "PFE", "PG", "TRV", "UTX", "UNH", "VZ", "WMT", "WBA", "HDFC", "CIPLA",
      "SBI", "INFOSYS", "KOTAK", "ICICI", "RELIANCE", "TATA MOTOR",
   ];

   //for loop to insert 10 random stocks
   for ($x = 0; $x < 9; $x++) {

      //Setting random dates
      $startingDate = strtotime("01 January 2020");
      $endingDate = strtotime("16 April 2020");
      $timestamp = mt_rand($startingDate, $endingDate);


      $stockrandom = $stockarray[mt_rand(0, 32)];
      //Setting the random price of the stock
      $stockprice = rand(50, 1500);

      //Insert query for the inserting new stock in the database table
      $insertst = "INSERT INTO stockupdates(StockName, CurrentPrice,UpdateDateTime) values (?,?,?)";
      $stmt4 = $dbh->prepare($insertst);
      $params = [$stockrandom, $stockprice, date("Y-m-d", $timestamp)];
      $stmt4->execute($params);
      
   }
   include "display.php";
}
?>

<body>

   <!-- From for submitting new records-->
   <form action="" method="POST">
      <input type="submit" id="subb" name="subb" value="Add 10 Stocks">
   </form>


</body>

</html>