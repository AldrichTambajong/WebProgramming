<html>
    <head>
        <title>No Validation Page</title>
        <link rel="stylesheet" href="HW3Style.css">
    </head>
    <body>
        <?php
         $name = $_GET['name'];
         $zip = $_GET['zip'];
         $birthday = $_GET['birthday'];
         $age = $_GET['age'];
         $email = $_GET['email'];
         $state = $_GET['state'];
        
        echo "
            Email: $email <br>
            First name: $name <br>
            Birthday: $birthday <br>
            Age: $age <br>
            State: $state <br>
            Zip: $zip <br>
            
            ";
        ?>
    </body>
</html>