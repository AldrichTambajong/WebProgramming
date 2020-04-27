
<?php
$user = "fhossain6";
$password = "fhossain6";
$db_list = "";
$conn = mysqli_connect("localhost", $user, $password,"fhossain6")
    or die ("Sorry - unable to connect to MySQL");

$firstLast = $_POST['firstLast'];
$rec = $_POST['rec'];
$rating = $_POST['rating'];
$comments = $_POST['comments'];

$sql = "INSERT INTO Feedback(firstLast, rec, rating, comments) VALUES('$firstLast','$rec','$rating','$comments')";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$average = "SELECT AVG(rating) AS average FROM Feedback";
$resultAvg = $conn -> query($average);
$row = mysqli_fetch_assoc($resultAvg);

$conn->close();
?>
<html>
    <head>
        <title>Response</title>
        <link rel="stylesheet" href="ProjSheet.css" type="text/css">
    </head>
    <body id="bodyforitems">
        <div id="header">
            <a href=""><img id="amazonlogo" alt="Amazon Logo" src="amazonlogo.png"></a>
            <a href="ProjHome.php"><img alt="home" src="gohome.png"></a>
            <a href="AccountInfo.html"><img alt="account" src="user.png"></a>
            <span id="headerAbout">
            <h1>Response Form</h1>
            </span>
        </div>
        
        <div class="description">
            <h2>Thank you for your response.</h2>
            <?php
                echo "Our average user rating is ". $row['average'];
            ?>
    </div>
    </body>
</html>
