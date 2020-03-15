<?php
session_start();
$username = fameda;
$password = thisisabadpassword;
$postback = $_POST['postback'];
if(isset($_POST['submit'])){
    if($username != $_POST['user'] || $password != $_POST['password']){
        $postback = true;
        if($_POST['user'] == ""){
            $errorUser = "Please Enter a Username";
        }
        elseif($username != $_POST['user']){
            $errorUser = "Invalid Username";
        }
        if($_POST['password'] == ""){
            $errorPass = "Please Enter a Password";
        }
        elseif($password != $_POST['password']){
            $errorPass = "Invalid Password";
        }
    }
    else{
        $_SESSION['USER'] = $username;
        $_SESSION['PASS'] = $password;
        header("location: ProjHome.html");
    }
}
elseif(isset($_POST['novalidate'])){
    header("location: ProjHome.html");
}
elseif(isset($_POST['reset'])){
    header("location: login.php");
}
?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="ProjSheet.css">
    </head>
    <body>
        <div class="welcome">
            <h1>Welcome to ClickIt.com</h1>
        </div>
        <div class="login">
            <h1>Login</h1>
            <form method="post">
                <?php
                if(isset($_POST['submit'])){
                  echo $errorUser;
                }
                ?>
                <div class="loginInputs">
                    <label name="Username">Username: </label>
                    <input type="text" name="user" placeholder="Username">
                </div>
                <?php
                if(isset($_POST['submit'])){
                  echo $errorPass ;
                }
                ?>
                <div class="loginInputs">
                    <label name="Password">Password:</label>
                    <input type="password" name="password" placeholder="Password">
                    <br>
                    <input type="submit" name="submit" value="Login">
                    <input type="submit" name="novalidate" value="Login as guest" formnovalidate>
                    <br>
                    <input type="submit" name="reset" value="Refresh Page">
                </div>
            </form>
        </div>
    </body>
</html>