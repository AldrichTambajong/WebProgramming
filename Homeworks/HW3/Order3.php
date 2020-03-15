<?php
session_start();
?>
<html>
   <head>
      <title>Order Confirmation</title>
      <link href="HW3Style.css" rel="stylesheet" >
   </head>
   <body>
      <div class="orderDiv">
          <?php
            function carSelection($color, $model){
                if($color=="red" && $model=="Mustang"){
                    echo '<img src="mustangRed.jpg">';
                }
                elseif($color=="red" && $model=="Corvette"){
                    echo '<img src="corvetteRed.jpg">';
                }
                elseif($color=="red" && $model=="Subaru"){
                    echo '<img src="subaruRed.jpg">';
                }
                elseif($color=="blue" && $model=="Mustang"){
                    echo '<img src="mustangBlue.jpg">';
                }
                elseif($color=="blue" && $model=="Corvette"){
                    echo '<img src="corvetteBlue.jpg">';
                }
                elseif($color=="blue" && $model=="Subaru"){
                    echo '<img src="subaruBlue.jpg">';
                }
                elseif($color=="yellow" && $model=="Mustang"){
                    echo '<img src="mustangYellow.jpg">';
                }
                elseif($color=="yellow" && $model=="Corvette"){
                    echo '<img src="corvetteYellow.jpg">';
                }
                else{
                    echo '<img src="subaruYellow.jpg">';
                }
            }
          
            echo "<h2>Order Confirmed</h2>";
         
            echo "<h3> Congratulations, " . $_COOKIE['name'] . " you
            have ordered a " . $_COOKIE['color'] . " " . $_COOKIE['model'] . "</h3><br>";
          
            carSelection($_COOKIE['color'], $_COOKIE['model']);
          
          echo "<br>";          
        
          ?>
          <a href="Order1.php">Place another order</a>
      </div>
   </body>
</html>