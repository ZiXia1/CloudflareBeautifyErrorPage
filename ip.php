<?php
$IFcdn=empty($_SERVER['HTTP_CDN_LOOP']);
$JSON['status']=$IFcdn?"未启用CDN":"CDN启用";
$JSON['cdnip']=$_SERVER['REMOTE_ADDR'];
$JSON['realip']=$IFcdn ? $_SERVER['REMOTE_ADDR']:$_SERVER['HTTP_X_FORWARDED_FOR'];
echo json_encode($JSON);
?>