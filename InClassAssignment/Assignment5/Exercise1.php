<html>
    <head>
        <title>Assignment5</title>
    </head>
    <body>
        <?php
            print("\"Good morning, Dave,\" said Hal");
             print("\n");
            print("\n");

            //Problem 2
            $radius = 2;
            
            print(M_PI*$radius*$radius);
             print("\n");
            print("\n");
            
            //Problem 3
            $celFahr = 43.55;
            function convert($far){
                return (5/9)*($far-32);
            }
            
            $cel = convert($celFahr);
            print($cel);
             print("\n");
            print("\n");
            
            //Problem 4
            $sentence = " PHP is fun ";
            $count = 0;
            for($i = 0; $i < strlen($sentence);$i++){
                if(($i==0 && substr($sentence,$i,1) == " ")){
                    continue;
                }
                elseif(($i==strlen($sentence)-1) && substr($sentence,$i,1) == " "){
                    continue;
                }
                else{
                    $count++;
                }
            }
            print("\n");
            print("\n");
            
            //Problem 5
            $phrase = "WDWWLWWWLDDWDLL";
            $search = "WWW";
            $pos = strpos($phrase,$search);
            print substr($phrase,$pos+3,1);
             print("\n");
            print("\n");
            
            
            //Problem 6
            $palindrome = "Kayak";
            $lower = strtolower($palindrome);
            $reverse = strrev($lower);
            if($reverse == $lower){
                print "This is a palindrome";
            }
            else{
                print "This is not a palindrome";
            }
            
             print("\n");
            print("\n");
            
            
            //Problem 7
            $num = 7;
            if(($num % 2) == 1){
                print "Odd \n";
            }
            else{
                print "Even \n";
            }
            
            print("\n");
            print("\n");
            
            //Problem 8
            $currentYear = 2020;
            $leapYear = date('L', mktime(0,0,0,1,1,$currentYear));
            echo $currentYear . ' ' . ($leapYear ? 'is' : 'is not') . ' a leap year';
        ?>
    </body>
</html>