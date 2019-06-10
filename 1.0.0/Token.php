<?php
/*
 * Hsuan PHP函式庫  
 * 張睿玹版權所有
 * https://github.com/dwcoop/Hsuan PHP Library/license.html
 * 檔案: Token.php
 * 版本: V1.0.0
 * 日期: 2019-06-08T15:27Z
 */
define("__hsuan_view_token__",md5(uniqid(rand(), true)));
function getToken(){
  return md5(uniqid(rand(), true));
}
?>