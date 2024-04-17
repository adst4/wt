<?php 

    $name = $_GET['name'];
    $array = array("Rohit","Virat","Dhoni","Ashwin","Harbhajan");
    if(empty(($name)))
    {
        echo "Stranger , Plese Tell Yor Name";
    }
    else if(in_array($name,$array))
    {
        echo "Hello, master !";
    }
    else
    {
        echo "I don’t know you!";
    }
    

?>