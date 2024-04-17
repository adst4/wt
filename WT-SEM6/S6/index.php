<?php 

    $doc = simplexml_load_file("book.xml");
    $books = $doc->book;
    foreach($books as $book)
    {
        echo "<br><br>Book Title : ".$book->title;
        echo "<br>Book Author : ".$book->author;
        echo "<br>Book Year : ".$book->year;
        echo "<br>Book Price : ".$book->price;
        echo "<br>Book pages : ".$book->pages;
        //  echo "<br>Book pages : ".$book["pages"];
    }

?>