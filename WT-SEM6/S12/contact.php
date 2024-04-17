<?php

    $fname = $_REQUEST['fname'];
    $fp = fopen($fname,"r");

    echo "<table border=1>";
    echo "<tr>";
    echo "<th>SR.</th>";
    echo "<th>NAME</th>";
    echo "<th>MOBILE</th>";
    echo "</tr>";

    while($line = (fgets(($fp))))
    {
        $cont = explode(" ",$line);
        echo "<tr>";
        echo "<td>".$cont[0]."</td>";
        echo "<td>".$cont[1]."</td>";
        echo "<td>".$cont[2]."</td>";
    }
    echo "</table>";


?>
