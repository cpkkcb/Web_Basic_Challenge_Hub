<?php
// 定义flag变量
header("Content-Type:text/html;charset=utf-8");
$flag = '恭喜你获得了FLAG: CTF{MobileUserAgentDetected}';

// 从请求头中获取User-Agent
$userAgent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';


// 检查是否为手机UserAgent
if (preg_match('/Mobi|Android/i', $userAgent)) {
    // 如果是手机UserAgent，输出flag
    echo "<br>" . $flag;
} else {
    // 如果不是手机UserAgent，输出提示信息
    echo "<br>请在手机上访问以获取flag。";
}

exit();
?>