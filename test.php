<?php


require './config.php';

$obj = new Admin();
$condition_arr = array("admin_email"=>"umeshsharma258@gmail.com",);
$result = $obj->select("tbl_admin","*",$condition_arr);
echo "<pre>";
print_r($result);
?>