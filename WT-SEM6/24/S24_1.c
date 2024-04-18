//S24.1(XML)

 <?xml version="1.0" encoding="UTF-8"?>
<?xml-stylesheet type="text/css" href="stud.css"?>
<student>
<info>
<sno>101</sno>
<name>om</name>
<course>bcs</course>
<college>rbnb</college>
</info>
<info>
<sno>102</sno>
<name>sai</name>
<course>bcs</course>
<college>rbnb</college>
</info>
<info>
<sno>103</sno>
<name>ram</name>
<course>bca</course>
<college>cdj</college>
</info>
</student>



<html>
    <form method="post" action="stud.php">
        enter course to search:
        <input type="text" name="t1"><br>
        <input type="submit" value="search">
    </form>
</html>
 
stud.php
 
<?php
$ob=simplexml_load_file("stud.xml");
if($ob==false)
    die("file not found");
$c=$_POST["t1"];
echo"<table border=1";
echo"<tr><th>rno<th>name<th>course<th>college</tr>";
foreach($ob->info as $a)
{
    if($a->course==$c)
    {
    echo"<tr><td>".$a->sno;
    echo"<td>".$a->name;
    echo"<td>".$a->course;
    echo"<td>".$a->college;
    echo"</tr>";
}
}
echo"</table>";
?>