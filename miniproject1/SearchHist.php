<?php
$user = "atambajong1";
$password = "atambajong1";
$conn = mysqli_connect("localhost", $user, $password,"atambajong1")
    or die ("Sorry - unable to connect to MySQL");

$sql = "SELECT * FROM History ORDER BY lastSearch desc";
$result = $conn->query($sql);

if(isset($_POST['delete'])){
    if(isset($_POST['check'])){
        foreach($_POST['check'] as $deleteRow){
            $delete = "DELETE FROM History WHERE name= '".$deleteRow."'";
            mysqli_query($conn,$delete);
            
        }
    }
}
?>
<html>
    <head>
        <title>Search History</title>
        <link rel="stylesheet" href="ProjSheet.css">
    </head>
    <body>
        <div id="header">
            <a href=""><img id="amazonlogo" alt="Amazon Logo" src="amazonlogo.png"></a>
            
            <a href="Cart.html"><img alt="cart" src="shopcart.png"></a>
            <a href="ProjHome.html"><img alt="home" src="gohome.png"></a>
            <span id="headerAbout"><h1>Search History</h1></span>
        </div>
        <div>
            <form action="" method="post">
                <?php
                echo "<table>";
                echo "<tr>";
                    echo "<th class='checkboxTh'></th>";
                    echo "<th class = 'histTh'>Name</th>";
                    echo "<th class = 'histTh'>Last Search Date</th>";
                    echo "<th class = 'histTh'>Price</th>";
                echo"</tr>";
                while($row = $result->fetch_assoc()){
                    echo "<tr>";
                    echo "<th class='checkboxTh'><input type='checkbox' name='check[]' value='".$row["name"]."'></th>";
                    echo "<td>".$row["name"]."</td>";
                    echo "<td>".$row["lastSearch"]."</td>";
                    echo "<td>".$row["price"]."</td>";
                    echo"</tr>";
                }
                echo "</table>";
                ?>
                <div class = "deletion">
                    <input type = "submit" name="delete" value="Delete">
                </div>
            </form>
        </div>
    </body>
</html>