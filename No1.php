
<?php 
		$a = ("hello");
		$b = ("World");
		
	$total = strlen($a);
	$total2 = strlen($b);
	
	for($i=0;$i< $total; $i++){
		for($j=0;$j<$total2; $j++){
			if($a[$i] == $b[$j]){
				$c[] = $b[$j];
				$total3 = count($c);
				
				$t = 0;
				for($k=0;$k<$total3; $k++){
					
					if($b[$j] == $c[$k]){
						$t += 1;
					} 
				}
				if($t>1){
					echo (" dan ");
				}
				if($t == 1){
					echo $b[$j];
				}
			}
		}
	}

	for($i=0;$i< $total; $i++){
		for($j=0;$j<$total2; $j++){

			if($a[$i] != $b[$j]){
				$c[] = $b[$j];
				$total3 = count($c);
				
				$x = 0;
				for($k=0;$k<$total3; $k++){
					
					if($b[$j] != $c[$k]){
						$x += 1;
					} 
				}
				if($x == 1){
					echo ("NO");
				}
			}
		}
	}
		
	
	
	
	/*var_dump($simpan);
	die;*/
?>