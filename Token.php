<?php
/*
 * AIRpollution 空氣汙染外掛 
 * 張睿玹版權所有
 * https://github.com/dwcoop/Hsuan PHP Library/license.html
 * 版本: V1.0.1-TW
 * 日期: 2019-06-08T15:27Z
 */
define("_lib_token_VIEW_TOKEN",md5(uniqid(rand(), true)));
function getToken(){
  return md5(uniqid(rand(), true));
}
?>