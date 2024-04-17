<?php 

    $name = $_GET['name'];

    $con = mysqli_connect("localhost","root","","jdbc");
    $result = mysqli_query($con,"select * from employee where name='$name'");
    while($row=mysqli_fetch_array($result))
    {
        echo "<br>Eno : ".$row[0];
        echo "<br>Name : ".$row[1];
        echo "<br>Destignation : ".$row[2];
        echo "<br>Salary : ".$row[3];
    }

?>