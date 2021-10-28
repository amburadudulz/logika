<?php
//cari perbedaan dari 2 array,, contoh case bisa dipakai untuk verifikasi yang sudah verifikasi
$a=explode(".","1.19.14.10");
$b=explode(".","1.14");

$result=array_diff($a,$b);
foreach ($result as $a) {
	
    echo $a;
};
?>
