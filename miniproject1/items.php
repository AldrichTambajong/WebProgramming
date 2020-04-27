<?php
$quant = "quantity";
$quantity = $_POST['quantity'];
setcookie($quant,$quantity);
?>
<html>
<head>
    <link href="ProjSheet.css" rel="stylesheet" type="text/css">
</head>
<body id="bodyforitems">
    <div id="header">
            <a href=""><img id="amazonlogo" alt="Amazon Logo" src="amazonlogo.png"></a>
            <a href="ProjHome.html"><img alt="home" src="gohome.png"></a>
            <a href="AccountInfo.html"><img alt="account" src="user.png"></a>
        </div>
    <div class="description">
        <?php
            $price=1049;
            $amount=$price*$quantity;
            echo "Congratulations you have ordered a: Nikon D850 FX-format Digital SLR Camera Body w/ AF-S NIKKOR 24-120MM F/4G ED VR Lens";
            echo "<br>";
            echo "<br>";
            echo "Your subtotal is $$amount";
            
        ?>
    </div>
    <div class="description">
        Select your payment method:
        <form name ="cardOption" method ="post" action ="items.php">
          <input type="radio" id="credit" name="card" value="credit">
          <label for="credit">Credit</label>
          <input type="radio" id="debit" name="card" value="debit">
          <label for="debit">Debit</label>
        <input type = "submit" value="Submit">
        </form>
    </div>

</body>
</html>