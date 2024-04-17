<?php 

    session_start();
    $usr = $_GET['usr'];
    $pass = $_GET['pass'];

    if(!isset($_SESSION['cnt1']))
    {
        $_SESSION['cnt1']=0;
    }

    if($_SESSION['cnt1']<3)
    {
        if($usr==$pass)
        {
            echo "Welcome ".$usr;
            $_SESSION['cnt1']=0;
        }
        else
        {
            echo "only ".(3-$_SESSION['cnt1'])." Are Left";
            $_SESSION['cnt1']++;
        }
    }
    else
    {
        echo "Your Attempt Are Ends";
    }

?>
