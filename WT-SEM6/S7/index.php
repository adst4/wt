<?php 

    $dom = new DOMDocument();
    $dom->load("movie.xml");

    $movies = $dom->getElementsByTagName("movie");
    foreach($movies as $movie)
    {
        echo "<br><br>Movie Number : ".$movie->getElementsByTagName("number")->item(0)->nodeValue;
        echo "<br>Movie Title : ".$movie->getElementsByTagName("title")->item(0)->nodeValue;
        echo "<br>Movie Actor : ".$movie->getElementsByTagName("actor")->item(0)->nodeValue;
        echo "<br>Movie Year : ".$movie->getElementsByTagName("year")->item(0)->nodeValue;
    }

?>