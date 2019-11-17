
<?php
	$angka=array(2,7,11,15);
	$jumlah='13';
	foreach($angka as $val){
		foreach($angka as $val2){
			if($val + $val2==$jumlah){
				echo('output:'.$val.'dan'.$val2).'<br>';
			}	
		}
	}
	
?>
