<?php 
    session_start();
    if(isset($_SESSION['cnt']))
    {
        $_SESSION['cnt']++;
    }
    else
    {
        $_SESSION['cnt']=0;
    }
    echo "Page Access Time : ".$_SESSION['cnt'];
?>