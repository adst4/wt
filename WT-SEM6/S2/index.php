<!DOCTYPE html>
<html lang="en">
<body>
    <form action="index.php">
        Enter Text :
        <input type="text" name="text">
        <input type="submit" value="Next">
    </form>
</body>
</html>

<?php 

    if(isset($_GET['text']))
    {
        setcookie('text',$_GET['text']);
        header("Location: first.php");
        exit();
    }

?>
