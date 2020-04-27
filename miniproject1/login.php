<?php
session_start();
$username = $_POST['user'];
$password = $_POST['password'];
$postback = $_POST['postback'];
$_SESSION['isLogged'] = true;
$conn = mysqli_connect("localhost", "fhossain6", "fhossain6","fhossain6")
    or die ("Sorry - unable to connect to MySQL");
$checkUser = "SELECT username FROM Users where username = '$username' ";
$checkPass = "SELECT password FROM Users where username = '$username' ";
$result=$conn->query($checkUser);
$resultPass = $conn -> query($checkPass);
$row = mysqli_fetch_assoc($resultPass);
    
if(isset($_POST['submit'])){
 if($result->num_rows > 0){
if($row['password'] == $password){
	$_SESSION['USER'] = $username;
       		$_SESSION['PASS'] = $password;
        		setcookie('username',$_SESSION['USER']);
        		header("location: ProjHome.php");
}
else if($password != $row){
	$errorPass = "password: ". $password . "resultPass:" . $row['password'];
}
    }
  else{
	$errorUser = "Invalid username";  
  }
}
elseif(isset($_POST['novalidate'])){
    $_SESSION['isLogged'] = false;
    setcookie('logged',$_SESSION['isLogged']);
    header("location: ProjHome.php");
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
    <body id="body3">
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
                    <br>
                    <a href="CreateAccount.html">Don't have an account? Create one here!</a>
                    
                    <br>
                    <br>
                    Login: fameda
                    <br>
                    Password: thisisabadpassword
                </div>
            </form>
        </div>
    </body>
</html>