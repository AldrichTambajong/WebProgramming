<?php
$user = "fhossain6";
$password = "fhossain6";
$db_list = "";
$conn = mysqli_connect("localhost", $user, $password,"fhossain6")
    or die ("Sorry - unable to connect to MySQL");

$username = $_POST['username'];
$password = $_POST['password'];
$firstLast = $_POST['firstLast'];
$shipping = $_POST['shipping'];

$sql = "INSERT INTO Users(username, password, firstLast, shipping) VALUES('$username','$password','$firstLast','$shipping')";

if ($conn->query($sql) === TRUE) {
    header("location:login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<html>
<head>
</head>
<body>
</body>
</html>