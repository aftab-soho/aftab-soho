<?php

echo "Armstrong number in B/W 1 to 1000 </br>" ;

for ($i=1; $i <=1000 ; $i++) { 
	
		$j=$i;

		$k=0;

		while ($j>0) {
			
			$k= $k+($j%10)*($j%10)*($j%10);
			$j=$j/10;

		
}


if ($k==$i) 
	echo $i . " ,";
}
?>