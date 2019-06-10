<?php
/*
 * Hsuan PHP函式庫  
 * 張睿玹版權所有
 * https://github.com/dwcoop/Hsuan PHP Library/license.html
 * 檔案: HTTPVariable.php
 * 版本: V1.0.0
 * 日期: 2019-06-08T15:27Z
 */
define("REQ_METHOD",$_SERVER['REQUEST_METHOD']);
define("REQ_RAW_DATA",file_get_contents("php://input",'r'));
define("REQ_JSON_DATA",json_decode(API_RAW_DATA, true));
define("REQ_OPTION",$_REQUEST['op']);
?>