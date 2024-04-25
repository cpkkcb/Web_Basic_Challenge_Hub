<?php
header("Content-Type:text/html;charset=utf-8");
// 定义flag变量，实际应用中应保密
$flag = 'CTF{ThisIsTheHiddenFlag}';

// 设置一个自定义HTTP头来传递flag
header("X-Flag: " . $flag);

// 使用302状态码重定向回首页
header("HTTP/1.1 302 Found");
header("Location: index.php");

// 终止脚本执行，确保不输出额外内容
exit();
?>