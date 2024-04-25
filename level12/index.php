<title>Level 12</title>
<?php
header("Content-Type:text/html;charset=utf-8");
// 定义一个函数来检查Referer
function isTrustedReferer() {
    // 获取HTTP Referer头信息
    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

    // 检查Referer是否包含baidu.com
    if (strpos($referer, 'baidu.com') !== false) {
        // 输出FLAG
        echo "恭喜你获得了FLAG: CTF{RefererReferer}";
        return true;
    }

    return false;
}

// 检查Referer头，并根据结果输出信息
if (isTrustedReferer()) {
    // 如果来源是baidu.com，显示FLAG
    // 已经在上面的isTrustedReferer函数中完成
} else {
    // 如果来源不是baidu.com，显示拒绝访问的提示
    echo "访问错误：只有从baidu.com来的访客才能访问此页面。";
}
?>