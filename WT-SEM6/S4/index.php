<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <form action="index.php">
        Enter Employee Number :
        <input type="text" name="no">
        <br>
        Enter Employee Name : 
        <input type="text" name="name">
        <br>
        Enter Employee Address :
        <input type="text" name="addr">
        <br>
        <input type="submit" value="Next">
    </form>
</body>
</html>

<?php 

    session_start();
    if(isset($_GET['no']) && isset($_GET['name']) && isset($_GET['addr']))
    {
        $_SESSION['no']=$_GET['no'];
        $_SESSION['name']=$_GET['name'];
        $_SESSION['addr']=$_GET['addr'];
        header("Location: second.php");
        exit();
    }

?>