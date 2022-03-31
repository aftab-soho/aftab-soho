<?php


$n=8;
$flag= 0;

for ($i=2; $i < $n ; $i++) { 
	

	if($n%$i==0){

		$flag=1;
}
}

if ($flag==1) {
	echo "Not prime number";

}
else{
	echo "Prime number";
}



