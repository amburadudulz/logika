<?php
$a=explode(".","1.19.14");
//arraynya di urutkan dari kecil ke besar
sort($a);
$b=count($a);
for ($x = 0; $x < $b; $x++) {
//diganti aksi olah database atau mau dikumpulkan lagi
  //echo bisa dipakai supaya nanti validasi nilai awal sudah sama dengan nilai akhir atau belum
  echo $a[$x];
  
	if($x!=($b-1)){
	echo ".";
	}
};
?>
