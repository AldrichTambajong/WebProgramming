<?php
$user = "atambajong1";
$pass = "atambajong1";
$db_list = "";

$conn = mysqli_connect("localhost",$user,$pass,"atambajong1") or die("Sorry, unable to connect to MySQL");
$sql = "SELECT * FROM Purchases";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table align = 'center' border=2px; style='border-collapse:collapse'>";
    echo "<tr style='background-color:#FF941B'>";
        echo "<th>Purchase Number</th>";
        echo "<th>Supplier ID</th>";
        echo "<th>Purchase Date</th>";
        echo "<th>Quantity</th>";
        echo "<th>Item Description</th>";
        echo "<th>Unit Price</th>";
    echo "</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
            echo "<td>" .$row["purchaseNo"]. "</td>";
            echo "<td>" .$row["supplierID"]. "</td>";
            echo "<td>" .$row["purchaseDate"]. "</td>";
            echo "<td>" .$row["quantity"]. "</td>";
            echo "<td>" .$row["itemDesc"]. "</td>";
            echo "<td>" .$row["unitPrice"]. "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Connection</title>
    </head>
    <body>
        <h3><?php echo $db_list;?></h3>
    </body>
</html>