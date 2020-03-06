<html>
    <head>
        <title>Calender</title>
        <link rel="stylesheet" href="Assignment6Sheet.css">
    </head>
    <body>
        <?php
            $hours_to_show = 12;
            date_default_timezone_set("America/New_York");
        
            function hourString($time){
                $string = "$time:00pm";
                return $string;
            }
        
            echo '<table border = "1px">';
                echo '<tr>';
                echo '<th>'. date("l") ."  ".date("m/d/Y") . "  ".date("h:i").'</th>';
                echo'</tr>';
        
                echo'<tr>';
                    echo '<th></th>';
                    echo '<th>Fameda</th>';
                    echo '<th>Woody</th>';
                    echo '<th>Ajia</th>';
                    echo '<th>Imani</th>';
                echo'</tr>';
                $firstHour=date("h",time());
                
                for($i = 0; $i<= $hours_to_show; $i++){
                    echo '<tr>';
                    echo '<td>'. hourString($firstHour) . '</td>';
                    echo '<td></td>';
                    echo '<td></td>';
                    echo '<td></td>';
                    echo '<td></td>';
                    if($firstHour == 12){
                        $firstHour = 1;
                    }
                    else{
                         $firstHour++;
                    }
                    echo '</tr>';
                }
            echo"</table>";
        ?>
    </body>
</html>