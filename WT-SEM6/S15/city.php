<?php 

    $name = $_GET['name'];
    $array = array("nashik","mumbai","pune","kolhapur","Deola","Kalvan","Malegoan","Sangli","Vani","Satana","Lohoner","KOtbel","Khirmani");

    for($i=0;$i<count($array);$i++)
    {
        echo "<option>".$array[$i]."</option>";
    }

?>