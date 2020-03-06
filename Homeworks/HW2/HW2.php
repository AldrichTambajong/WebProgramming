<html>
    <head>
        <title>Homework 2</title>
    </head>
    <body>
        <?php
        //Question 1
        function isBitten(){
            $bit = rand(0,1);
            if($bit == 1){
                return true;
            }
            else{
                return false;
            }
        }
        $answer = isBitten();
        if($answer == true){
            echo "Charlie ate my lunch! \n";
        }
        else{
            echo "Charlie did not eat my lunch! \n";
        }
        
        //Question 2
        function checkerBoard(){
            $count = 0;
            echo '<table style="width:300px" border="1px" cellspacing="1px" cellpadding="1px" >';
            for($i = 0;$i < 9;$i++){
                echo "<tr>";
                for($j = 0;$j < 9;$j++){
                    $count++;
                    if($count%2 == 0){
                        echo '<td height="35" width="35" style="background-color: red"></td>';
                    }
                    else{
                        echo '<td height="35" width="35" style="background-color: black"></td>';
                    }
                }
                echo "</tr>";
            }
            echo "</table></html>";
        }
        checkerBoard();
        echo"\n";
        //Question 3
        //Part1
        $month = array('January', 'February', 'March', 'April', 'May' , 'June', 'July', 'August',
                       'September', 'October', 'November', 'December');
        
        for($i = 0; $i < count($month);$i++){
            print $month[$i] . ' ';
        }
        echo "\n";
        
        //Part 2
        sort($month);
        for($i = 0; $i < count($month);$i++){
            print $month[$i] . ' ';
        }
        echo "\n";
        
        //Part 3
        $month = array('January', 'February', 'March', 'April', 'May' , 'June', 'July', 'August',
                       'September', 'October', 'November', 'December');
        foreach($month as $char){
            print $char . ' ';
        }
        echo "\n";
        
        sort($month);
        foreach($month as $char){
            print $char . ' ';
        }
        
        //Question 4
        $restaurants =array("Chama Gaucha" => 40.50,"Aviva by Kameel" => 15.00, "Bone’s Restaurant" => 65.00, "Umi Sushi Buckhead" => 40.50, "Fandangles" => 30.00,
                            "Capital Grille" => 60.50, "Canoe" => 35.50, "One Flew South" => 21.00, "Fox Bros. BBQ" => 15.00, "South City Kitchen Midtown" => 29.00);
        
        function restaurantTable($Restaurant){
            echo'<table border = "1px ">';
            echo'<tr>';
            echo'<th>Restaurant Name</th>';
            echo'<th>Average Cost</th>';
            echo'</tr>';
            
            foreach($Restaurant as $Name=>$Cost){
                echo'<tr>';
                echo '<td>' . $Name . '</td>';
                echo '<td>' . $Cost . '</td>';
                echo'</tr>';
            }
            echo'</table>';
        }
        restaurantTable($restaurants);
        echo "\n";
        asort($restaurants);
        restaurantTable($restaurants);
        echo "\n";
        krsort($restaurants);
        restaurantTable($restaurants);
        echo "\n";
        ?>
        <!-->Question 5<-->
        <form action="codd.cs.gsu.edu" method = "get">
            <div>
                How many hamburgers would you like?:
                <input type="number" name = "burgers">
                <br>
                How many shakes would you like?:
                <input type="number" name = "shakes">
                <br>
                How many colas would you like?:
                <input type="number" name = "colas">
                <input type = "submit">
            </div>
        </form>
        <br>
        <?php
            $bill = 4.95*$_GET["burgers"] + 1.95*$_GET["shakes"] + .85*$_GET["colas"];
            $taxAmount = $bill * .075;
            $tip = $bill * .016;
            echo 'Total bill = ' . ($bill + $taxAmount + $tip) ;
        ?>
    </body>
</html>