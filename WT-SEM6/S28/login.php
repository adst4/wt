<?php 

    $usr = $_GET['usr'];
    $pass = $_GET['pass'];

    $usrv = 0;
    $passv = 0;

    $con = mysqli_connect("localhost","root","","jdbc");
    $result = mysqli_query($con,"select * from user where usr='$usr'");
    while($row=mysqli_fetch_array($result))
    {
        $usrv=1;
        if($row[1]==$pass)
        {
            $passv=1;
            echo "<b style=\"color:green\">Login Successfully</b>";
        }
    }

    if($usrv==0)
        echo "<b style=\"color:red\">User Not Found</b>";
    else if($passv==0)
         echo "<b style=\"color:red\">Incorect Password</b>";
    
    
?>