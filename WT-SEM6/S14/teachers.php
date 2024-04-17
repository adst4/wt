<?php 

    $name = $_GET['name'];

    $con = mysqli_connect("localhost", "root", "", "jdbc");

    $result = mysqli_query($con, "SELECT * FROM teacher WHERE name='$name'");

    while ($row = mysqli_fetch_array($result))
    {
        echo "<br>TNo : " . $row[0];
        echo "<br>Name : " . $row[1];
        echo "<br>Qualification : " . $row[2];
        echo "<br>Salary : " . $row[3];
    }

    

?>
