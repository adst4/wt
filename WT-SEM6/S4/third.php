<?php 

    session_start();

    echo "<br>Employee Number : ".$_SESSION['no'];
    echo "<br>Employee Name : ".$_SESSION['name'];
    echo "<br>Employee Address : ".$_SESSION['addr'];

    echo "<br><br>Employee Salary :: ";

    echo "<br>Basic Salary : ".$_SESSION['basic'];
    echo "<br>DA Salary : ".$_SESSION['da'];
    echo "<br>HRA : ".$_SESSION['hra'];
    echo "<br>Total Salary : ".$_SESSION['basic']+$_SESSION['da']+$_SESSION['hra'];

?>