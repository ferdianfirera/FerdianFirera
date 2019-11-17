<?php 
	
	$angka = array(6,1,1,6,2,3,3,5,5);
	
	foreach($angka as $val){
		$b = 0;
		foreach($angka as $val2){
			
			if($val == $val2){
				$b += 1;
			}
		}
		if($b == 1){
			echo $val;
		}
	}
	
