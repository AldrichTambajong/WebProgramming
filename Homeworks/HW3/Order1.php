<?php
session_start();
if(isset($_POST['submit'])){
    if(strlen($_POST['fname']) < 1){
        $error = "Please input name for order!";
    }
    else{
        $_SESSION['name'] = $_POST['fname'];
        $_SESSION['model'] = $_POST['model'];
        header("location: Order2.php");
    }
}
?>
<html>
   <head>
      <title>Select Model</title>
      <link href="HW3Style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
       <div class="orderDiv">
         <h2 >Select Model</h2>

         <form method="post">
            <div >
               <label>First name:</label>
               <input type="text" name="fname" placeholder="First name" title="first name" maxlength="20" pattern="[A-Za-z'-]{2,20}" />
            </div>
            <div >
               <label> Car model:</label>
               <div >
                  <input type="radio" name="model" value="Mustang">Ford Mustang<br>
                  <input type="radio" name="model" value="Subaru">Subaru WRX STI<br>
                  <input type="radio" name="model" value="Corvette">Corvette<br>
               </div>

            </div>
            <div>
               <label></label>
               <button type="submit" name="submit"> >> Next >> </button>
            </div>
                <button type="submit" formnovalidate>Submit without HTML5 validation</button>
                <br><br>
             <?php
             if(strlen($_POST['fname']) < 1){
                 echo $error;
             }
             ?>
             <br><br>
            <a href="Order1.php">Reload page</a>            
            
        </form>
       </div>
</body>
</html>
