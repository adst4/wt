<?php 

    $name = $_GET['name'];

    $doc = simplexml_load_file("books.xml");
    $allbooks = $doc->book;

    foreach($allbooks as $book)
    {
       if($book->title == $name)
       {
            echo "<br>Title : ".$book->title;
            echo "<br>Author : ".$book->author;
            echo "<br>Year : ".$book->year;
            echo "<br>Price : ".$book->price;
       }
    }

?>