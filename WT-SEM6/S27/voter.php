<?php 

    $name = $_GET['name'];  
    $age = $_GET['age'];  
    $nationality = $_GET['nationality'];  
    $cnt=0;

    if(!ctype_upper($name))
    {
        echo "<br><b>Name Must Be Uppercase</b>";
        $cnt++;
    }

    if($age<18)
    {
        echo "<br><b>Age Must Be Grater Than 18</b>";
        $cnt++;
    }

    if(!($nationality=="Indian" || $nationality=="indian" || $nationality=="INDIAN"))
    {
        echo "<br><b>nationality Must Be Indian</b>";
        $cnt++;
    }

    if($cnt==0)
    {
        echo "<br><b style=\"color:green\">User Are Eligible For Votting...<b>";
    }
    else
    {
        echo "<br><b style=\"color:red\">User Are Not Eligible For Votting...<b>";
    }

?>

