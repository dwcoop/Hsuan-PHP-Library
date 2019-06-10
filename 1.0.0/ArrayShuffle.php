<?php
/*
 * Hsuan PHP函式庫  
 * 張睿玹版權所有
 * https://github.com/dwcoop/Hsuan PHP Library/license.html
 * 檔案: ArrayShuffle.php
 * 版本: V1.0.0
 * 日期: 2019-06-10T15:27Z
 */
//copied from http://changelog.ca/log/2012/02/16/php_shuffle_array_preserve_keys
function shuffle_assoc($array){
    $shuffled_array = array();
	$shuffled_keys = array_keys($array);
    shuffle($shuffled_keys);
	foreach ( $shuffled_keys AS $shuffled_key ) {
		$shuffled_array[$shuffled_key] = $array[$shuffled_key];
    }
	return $shuffled_array;
}
?>