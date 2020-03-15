<?php
session_start();

if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
}

if(isset($_POST['submit'])){
    $username="Aldrich";
    $password="guest";
    $postUser = $_POST['user'];
    $postPass = $_POST['password'];
    $postback = $_POST['postback'];
    if($_POST['user'] == $username && $_POST['password'] == $password){
        $_SESSION["username"] = $_POST['user'];
        header("location: protected2.php");
        exit();
    }
    else{
         if($_POST['password'] != $password){
        $errorPass= "Incorrect password";
         }
        if($_POST['user'] != $username){
            $errorName = "Incorrect username";
        }
        
    }
}
elseif(isset($_POST['novalidate'])){
    $postUser = $_POST['user'];
    $postPass = $_POST['password'];
    $_SESSION["username"] = $_POST['user'];
    header("location: protected2.php");
}
?>
<html>
    <head>
        <title>Protected.php</title>
        <link rel="stylesheet" href="HW3Style.css">
    </head>
    <body>
        <div class="orderDiv">
            <h1>Login</h1>
            <form target="_self" method="POST">
                <label>Username:</label> <input type="text" name="user" placeholder="Username" value="<?php echo $postUser?>">
                <br>
                <?php
                if($postback && strlen($postUser) < 1){
                    echo "Please enter your name. <br>";
                }
                else{
                    echo $errorName . "<br>";
                }
                ?>
                <br>
                <label>Password:</label> <input type="password" name="password" placeholder="Password" value="<?php echo $postPass ?>">
                <br>
                <?php
                if($postback && strlen($postPass) < 1){
                    echo "Please enter a password. <br>";
                }
                elseif(isset($errorPass)){
                    echo $errorPass . "<br>";
                }
                ?>
                <input type="hidden" name = "postback" value="true">
                <button type="submit" name="submit">Login</button><br><br>
                <button type="submit" name="novalidate" formnovalidate>Login without HTML5 validation</button>
            </form>
            <br>
            <p>Username:s Aldrich/ Password: guest</p>
            <br>
            <a href="protected.php">Go back to protected.php</a>
        </div>
    </body>
</html>