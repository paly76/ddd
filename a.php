<?php
function getDirFile($dir, &$arr = []) {
	if(!is_dir($dir)) return false ;
	$fp = opendir($dir);
	while(false!==($fileName = readdir($fp))) {
		if($fileName != '.' && $fileName != '..') {
			$subFile = $dir. '/' .$fileName ;
			if(is_file($subFile)) $arr[] = $subFile ;
			if(is_dir($subFile)) getDirFile($subFile);
		}
	}
	closedir($fp);
	return $arr ;
}

function getArrSort(array $arr) {
	if(!is_array($arr)) return false ;
	$len = count($arr);
	for($i=0; $i< $len; $i++) {
		for($j=$len-i; $j>=i; $j--) {
			if($i<=$i-1) {
				$temp = $arr[$i] ;
				$arr[$i] = $arr[$i-1];
			       	$arr[$i-1] = $temp;	
			} 
		}
	}
	return $arr;
}

