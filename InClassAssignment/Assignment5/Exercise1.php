<html>
    <head>
        <title>Assignment5</title>
    </head>
    <body>
        <?php
            //Problem 1
             print("\"Good morning, Dave,\" said Hal");
            
            //Problem 2
            $radius = 2;

            print(M_PI*$radius*$radius);

            //Problem 3
            
    
            //Problem 4
            $sentence = " PHP is fun ";
            $count =0;
            for($i = 0; $i < strlen($sentence);$i++){
                    if(($i==0 && substr($sentence,$i,1) == " ")){
                        continue;
                    }
                    elseif(($i==(strlen($sentence)-1) && substr($sentence,$i,1) == " ")){
                        continue;
                    }
                    else{
                        $count++;
                    }
            }
            print("String has $count characters");telne
        

            //Problem 5
            
        ?>
    </body>
</html>