<?php 
$nama = "Aioee";
$string = strtolower($nama);
$hurufarray = str_split($string);
$arr1=[];
	foreach ($hurufarray as $p){
		$arr1[]=$p;
		}
    echo "nama anda ",$nama;
    if ( ( $arr1[0] == 'a') || 
    ( $arr1[0] == 'e' ) ||
    ( $arr1[0] == 'i' ) ||
    ( $arr1[0] == 'u' ) ||
    ( $arr1[0] == 'o' )) {
        echo "<br>";
        echo "nama anda berawalan dari huruf vokal";
    }
    else {
            echo "<br>";
            echo "nama anda berawalan bukan dari huruf vokal";
          }
?>