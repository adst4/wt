//S29.1(php)


<html>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
	Enter the no :<input type="number" name="n"><br>
	Operations to perform: fibonnaci<input type=checkbox value="1" name="o">
							Sum of Digits :<input type=checkbox value="2" name="o">
	<input type="submit" value="submit" name="submit"><br>
</form>
</body>
</html>
<?php
	
	if(isset($_GET['submit']))
	{
		$n=$_GET['n'];
	    $o=$_GET['o'];
		switch($o)
		
		{
			case 1:$num = 0;  
                   $n1 = 0;  
                   $n2 = 1;  
                   echo "<h3>Fibonacci series for first $n numbers: </h3>";  
                   echo "\n";  
                   echo $n1.' '.$n2.' ';  
                   while ($num < $n-2 )  
                  {  
                     $n3 = $n2 + $n1;  
                     echo $n3.' ';  
                     $n1 = $n2;  
                     $n2 = $n3;  
                     $num = $num + 1;  
                   }
				   break;
			case 2:$sum=0;
          		   $rem=0;  
				   $num=$n;
                  for ($i =0; $i<=strlen($num);$i++)  
                 {  
                  $rem=$num%10;  
                  $sum = $sum + $rem;  
                  $num=$num/10;  
                 }  
                   echo "Sum of digits $n is $sum";
					break;
        }
	}
?>
