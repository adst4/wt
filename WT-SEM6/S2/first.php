<!DOCTYPE html>
<html lang="en">
<body>
    <form action="first.php">
        Choose Font Family :
        <select name="font">
            <option value="Courier New">Courier New</option>
            <option value="Gill Sans">Gill Sans</option>
            <option value="Calibri">Calibri</option>
        </select>
        <br>
        Enter font size :
        <input type="number" name="size">
        <br>
        Enter Font Color :
        <input type="text" name="color">
        <br>
        Enter Background Color :
        <input type="text" name="bcolor">
        <br>
        <input type="submit" value="Submit" >
    </form>
</body>
</html>

<?php 
    if(isset($_GET['font']) && isset($_GET['size']) &&
        isset($_GET['color']) &&isset($_GET['bcolor']))
    {
            setcookie('font',$_GET['font']);
            setcookie('size',$_GET['size']);
            setcookie('color',$_GET['color']);
            setcookie('bcolor',$_GET['bcolor']);
            
            header("Location: second.php");
            exit();
    }
?>
