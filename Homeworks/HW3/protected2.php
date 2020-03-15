<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location: protected.php");
}

if(isset($_POST['logout']) && $_POST['abandon']){
    header("location: protected.php");
}
?>
<html>
    <head>
        <title>Proected2.php</title>
        <link rel="stylesheet" href="HW3Style.css">
    </head>
    
    <body>
        <div class="orderDiv">
            <h2>Welcome <?php echo $_SESSION["username"]?></h2>
            <br>
            <br>
            <br>
            <form target="_self" method="post">
                <button type="submit" name="logout">logout</button>
                <input type="hidden" name="abandon" value="true">
            </form>
        </div>
    </body>
</html>