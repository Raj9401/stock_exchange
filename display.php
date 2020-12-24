<!-- 
    Name : Armaan Singh
    ID : 000794766
    Statement Of Authorship: I Armaan Singh, 000794766 ensure that all the work done is mine.
                             I haven't Copied from someone else and didn't allow someone else to submit.


    This is display.php which displays the stocks of the StockUpdate table which is a list of stock list.
    Here, user can view the all the stocks of the table.
    
    Here all the data is in the stocklist array which is been json encoded and sent to insert.js .
    There it prints all the data of stocklist and prints on the screen.

    Also, the data printed is according to december.
-->
<?php
include "connect.php"

?>

<html>

<head>
    <title>Display</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stock.css">
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="js/insert.js"></script>
</head>

<body>
    <h1> Neywork Stock Exchange</h1>
    <?php
    class Stocks
    {
        public $StockName, $CurrentPrice, $date;
        // Construcotr for the stock
        function __construct($StockName, $CurrentPrice, $date)
        {
            $this->StockName = $StockName;
            $this->CurrentPrice = $CurrentPrice;
            $this->date = $date;
        }
        /// Getter method for StockName ID
        function get_StockName()
        {
            return $this->StockName;
        }
        /// Getter method for CurrentPrice
        function get_CurrentPrice()
        {
            return $this->CurrentPrice;
        }
        /// Getter method for Date Last played
        function get_date()
        {
            return $this->date;
        }
    }
    $stockslist = [];
    $cmd = "SELECT * FROM stockupdates ORDER BY UpdateDateTime DESC";
    $stmt = $dbh->prepare($cmd);
    $success = $stmt->execute();
    while ($row = $stmt->fetch()) {
        $i = new Stocks($row["StockName"], $row["CurrentPrice"], $row["UpdateDateTime"]);
        array_push($stockslist, $i);
    }



    echo "<table >";
    echo "<tr>";
    echo "<th>Stock Name</th>";
    echo "<th>Current Price</th>";
    echo "<th>Last Date Updated</th>";
    echo "</tr>";

    for ($i = 0; $i < count($stockslist); $i++) {
        echo "<tr>";
        echo "<td>" . $stockslist[$i]->get_StockName() . "</td>";
        echo "<td>" . $stockslist[$i]->get_CurrentPrice() . "</td>";
        echo "<td>" . $stockslist[$i]->get_date() . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    json_encode($stockslist);


    ?>

    <a href="index.html" id="main">Main Page</a><br>
    <span id="insert">

    </span>

</body>

</html>