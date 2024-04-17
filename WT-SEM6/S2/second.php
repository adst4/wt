<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        b{
            background-color: <?=$_COOKIE['bcolor'] ?>;
            color:<?=$_COOKIE['color'] ?>;
            font-size: <?=$_COOKIE['size'] ?>px;
            font-family: <?=$_COOKIE['font'] ?>;
        }
    </style>
</head>
<body>
    <b><?=$_COOKIE['text'] ?></b>
</body>
</html>

