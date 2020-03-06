<html>
    <head>
        <title>InClassAssignment6</title>
        <link rel="stylesheet" href="Assignment6Sheet.css">
    </head>
    
    <body>
        <form action="InClassAssignment6.php" method="post">
            Fonts:<select name="Fonts" >
            <option value="Arial">Arial</option>
            <option value="times new roman">Times New Roman</option>
            <option value="Courier">Courier</option>
            </select>
            <br>
            <br>
            Styles:<select name="Style">
                <option value="normal">Normal</option>
                <option value ="italic">Italics</option>
                <option value="oblique">Oblique</option>
            </select>
            <br>
            <br>
            Color:<select name="Color">
                <option value ="red">Red</option>
                <option value ="blue">Blue</option>
                <option value ="green">Green</option>
            </select>
            <br>
            <br>
            Textbox:<input type="text" name="Textbox">
            <br>
            <br>
            <br>
            <br>
            <input type="submit" name="enter">
        </form>
        <?php
        if(isset($_POST['enter'])){
            $font = $_POST['Fonts'];
            $style = $_POST['Style'];
            $color = $_POST['Color'];
            $text = $_POST['Textbox'];
            echo "<div style ='font-family:$font;font-style:$style;color:$color;'>
            $text
            </div>";   
        }
        ?>
    </body>
</html>