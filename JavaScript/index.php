
<?php

/*

$a=$_POST["penz"];
$b=$a/4;

  echo $a," lej egyenlo  " ,$b, " dollarral " ;
  echo "</br>";
  $b=$a*66.66;
  
  echo $a," lej egyenlo  " ,$b, " forinttal" ;
  
  $b=$a/5;
  echo "</br>";
  echo $a," lej egyenlo  " ,$b, " euroval" ;

*/

$a=$_POST["sorok_szama"];
$b=$_POST["oszlopok_szama"];

$c=1;

echo "<table border=1  bgcolor =yellow >";

for($i = 0;$i< $a;$i++)
{
	echo "<tr>";
       for($j = 0;$j<$b;$j++)
	   {
		   
		   if($c%2==0){
			   
			    echo "<td bgcolor=red>",$c++,"</td>";
		   }
		   else{
			    echo "<td bgcolor=green>",$c++,"</td>";
		   }
	      
	   }
	echo "</tr>";	        
		   
  }
  
  echo "</table>";


?>

