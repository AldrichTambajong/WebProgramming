<?php
$user = "atambajong1";
$password = "atambajong1";
$conn = mysqli_connect("localhost", $user, $password,"atambajong1")
    or die ("Sorry - unable to connect to MySQL");

$supplierID = $_POST['supplierID'];

$sql = "SELECT purchaseDate, itemDesc, unitPrice FROM Purchases WHERE supplierID = '$supplierID'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table border=1px; align='center';text-align='center'>";
    echo "<tr style='background-color:#FF941B'>";
        echo "<th>Purchase Date</th>";
        echo "<th>Item Description</th>";
        echo "<th>Unit Price</th>";
    echo "</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
            echo "<td>" .$row["purchaseDate"]. "</td>";
            echo "<td>" .$row["itemDesc"]. "</td>";
            echo "<td>" .$row["unitPrice"]. "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<div>Supplier has not made any purchases.<div>";
}

$conn->close();
?>
