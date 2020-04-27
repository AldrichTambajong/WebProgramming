<?php
$user = "atambajong1";
$password = "atambajong1";
$conn = mysqli_connect("localhost", $user, $password,"atambajong1")
    or die ("Sorry - unable to connect to MySQL");

$supplierID = $_POST['supplierID'];
$purchaseDate = $_POST['purchaseDate'];
$quantity = $_POST['quantity'];
$itemDesc = $_POST['itemDescription'];
$unitPrice = $_POST['unitPrice'];

$sql = "INSERT INTO Purchases(supplierID, purchaseDate, quantity, itemDesc, unitPrice) VALUES('$supplierID','$purchaseDate','$quantity','$itemDesc','$unitPrice') ";

if ($conn->query($sql) === TRUE) {
    header("location: display.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>