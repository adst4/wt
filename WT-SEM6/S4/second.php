<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
    <form action="second.php">
        Enter Basic Earning :
        <input type="number" name="basic">
        <br>
        Enter DA :
        <input type="number" name="da">
        <br>
        Enter HRA :
        <input type="number" name="hra">
        <br>
        <input type="submit" value="SUBMIT">
    </form>

</body>
</html>

<?php 

    session_start();
    if(isset($_GET['basic']) && isset($_GET['da']) && isset($_GET['hra']))
    {
        $_SESSION['basic']=$_GET['basic'];
        $_SESSION['da']=$_GET['da'];
        $_SESSION['hra']=$_GET['hra'];
        header("Location: third.php");
        exit();
    }

?>