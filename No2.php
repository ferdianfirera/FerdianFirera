
<?php
	$angka=array(1,2,3,4,5,6,7,8,8);
	foreach ($angka as $val) {
		{
		foreach($angka as $val2){
			if($val==$val2){
				$unik[] = ('TRUE');
				echo($unik[0]);
				multi_unique($unik);
					}
				}
		}
	}

	foreach($angka as $val){
		$b = 0;
		foreach($angka as $val2){
			
			if($val == $val2){
				$b += 1;
			}
		}
		if($b == 1){
			$x[]='FALSE';
			echo($x[0]);
			multi_unique($unik);
		}
	}
	
?>
