<?php for ($i=1; $i <=30; $i++){
	$a = 0;
	for ($j=1; $j<=$i;$j++){
		if ($i %$j ==0)
			{$a++;
			}
	}

	if ($a == 2){
		 echo $i;
	}
}

 ?>
