<?php
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['model'])){
    setcookie('name', $_SESSION['name']);
    setcookie('model' , $_SESSION['model']);
}
else{
    header("location: Order1.php");
}

if(isset($_POST['next'])){
    $_SESSION['color'] = $_POST['color'];
    setcookie('color',$_SESSION['color']);
    header("location: Order3.php");
}
?>
<html>
   <head>
      <title>Select Color</title>
      <link href="HW3Style.css" rel="stylesheet">
   </head>
   <body>
      <div class="orderDiv">
         <h2 >Select Color</h2>

         <div>
            <form method="post">
               <div>
                  <label>Car color:</label>
                  <div>
                     <select name="color" required>
                        <option style="background-color: blue"  value="blue">Blue</option>
                        <option style="background-color: red" value="red">Red</option>
                        <option style="background-color: yellow" value="yellow">Yellow</option>
                     </select> 
                  </div>
               </div>
               <div >
                  <label></label>
                  <button type="submit" name="next"> >> Next >> </button>
               </div>
               <div >
                  <button type="submit" formnovalidate>Submit without validation</button><br><br>
                  <a href="Order2.php">Reload page</a>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>