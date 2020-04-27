<?php
     $user = "atambajong1";
     $password = "atambajong1";
     $conn = mysqli_connect("localhost", $user, $password,"atambajong1")
    or die ("Sorry - unable to connect to MySQL");

    $name = $_POST['name'];
    $price = $_POST['price'];
    $date = date("Y-m-d");

    $sql="INSERT INTO History VALUES('$name','$date','$price)";
    mysqli_query($conn,$sql);
?>
