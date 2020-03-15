
<html>
    <head>
        <title>Form Validation</title>
        <link rel="stylesheet" type="text/css" href="HW3Style.css">
    </head>
    <body>
            <h2>Form Validation</h2>
            <p>HTML5 and server-side validation</p>
           <form action="validateConfirm.php" method="get">
                Email: <input type="email" name="email" placeholder="Email"><br><br>
                First Name: <input type="text" name="name" placeholder="Name"><br><br>
                Birthday: <input type="date" name="birthday" ><br><br>
                Age: <input type="text" name="age" placeholder="Age"><br><br>
                State: <input type="text" name="state" placeholder="State"><br><br>
                Zip: <input type="text" name="zip" placeholder="Zip"><br><br>
                <input type="submit" name="Submit form"><br>
               <br>
               <br>
               <input type="submit" name = "novalidate" value="Submit without HTML5 validation" formnovalidate="formnovalidate">
            </form>

    </body>
</html>