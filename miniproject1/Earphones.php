<?php
$user = "fhossain6";
$password = "fhossain6";
$conn = mysqli_connect("localhost", $user, $password,"fhossain6")
    or die ("Sorry - unable to connect to MySQL");

$sql = "SELECT * FROM AutoSuggest WHERE category = 'Earphones'";
$result = $conn->query($sql);

?>
<html>
    <head>
        <title>Cellhones</title>
        <link rel="stylesheet" href="ProjSheet.css">
    </head>
    <body>
        <div id="header">
            <a href=""><img id="amazonlogo" alt="Amazon Logo" src="amazonlogo.png"></a>
            
            <a href="Cart.html"><img alt="cart" src="shopcart.png"></a>
            <a href="ProjHome.html"><img alt="home" src="gohome.png"></a>
            <span id="headerAbout"><h1>Cellphones</h1></span>
        </div>
        <div>
                <?php
                echo "<table>";
                echo "<tr>";
                    echo "<th class = 'histTh'>Name</th>";
                    echo "<th class = 'histTh'>Price</th>";
                echo"</tr>";
                while($row = $result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row["name"]."</td>";
                    echo "<td>".$row["price"]."</td>";
                    echo"</tr>";
                }
                echo "</table>";
                ?>
        </div>
    </body>
</html>