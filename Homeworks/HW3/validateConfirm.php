<html>
   <head>
      <title>Validation Confirm</title>
      <link href="HW3Style.css" rel="stylesheet" type="text/css">

   </head>
   <body>
         <?php include 'validateUtilities.php';
         
         //Retrieve inputs (using helper function)
         $name = $_GET['name'];
         $zip = $_GET['zip'];
         $birthday = $_GET['birthday'];
         $age = $_GET['age'];
         $email = $_GET['email'];
         $state = $_GET['state'];
         $button = $_GET['novalidate'];

         //set validation flag
         $IsValid = true;
       
        if($button){
            echo "
            Email: $email <br>
            First name: $name <br>
            Birthday: $birthday <br>
            Age: $age <br>
            State: $state <br>
            Zip: $zip <br>
            
            ";
        }
        else{
            if (!fIsValidZipCode($zip)) {
            echo "Invalid zip<br>";
            $IsValid = false;
         }
       
         if (validDate($birthday)) {
            echo "Invalid birthday<br>";
            $IsValid = false;
         }
       
         if (!fIsValidRange($age, 18, 100)) {
            echo "Invalid age<br>";
            $IsValid = false;
         }

         echo "</p>";
         if (!$IsValid) {
            echo "<br><br><p><input type='button' class='button' value='<< Go Back <<' onClick='history.back()'><br></p>";
            exit();
         }
            
            echo "
            Email: $email <br>
            First name: $name <br>
            Birthday: $birthday <br>
            Age: $age <br>
            State: $state <br>
            Zip: $zip <br>
            
            ";
        }
         ?>
   </body>
</html>
