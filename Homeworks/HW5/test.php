<?php
    $user = "atambajong1";
    $password = "atambajong1";
    $database = "atambajong1";
    $db_list = "";

    $conn = mysqli_connect("localhost",$user,$password) or die("Sorry unable to connect to MySQL.\n");
    
    $rs = mysqli_select_db($conn,$database) or die("Cannot connect to database");

    if($conn){
        $msg = "Congratulations " . $user . ", you connected to MySQL";
    }
    
    if($rs){
        $msg = $msg . "\nCongratulations " . $user . ", you also connected to " . $database . " database\n";
    }

   if($stmt = $conn->query("SHOW DATABASES")){
       while ($row = $stmt->fetch_assoc()) {
           $db_list.= $row['Database']."</br>";
       }
   }else{
       echo $conn->error;
}

?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Connection</title>
    </head>
    <body>
        <h3><?php echo($db_list);?></h3>
    </body>
</html>
