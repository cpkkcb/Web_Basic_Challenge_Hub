<?php
// 定义flag变量，实际应用中应保密
header("Content-Type:text/html;charset=utf-8");
$flag = '管理员您好！恭喜你获得了FLAG:：CTF{TheFlag}';

// 检查Cookie中的内容，如果为'admin'则提供flag
if (isset($_COOKIE['auth']) && $_COOKIE['auth'] === 'admin') {
    echo $flag;
} else {
    // 如果用户不是管理员，返回一条消息表明没有权限获取flag
    echo "抱歉！user用户权限不足，请联系admin用户进行信息查询！";
}

// 终止脚本执行，确保不输出额外内容
exit();
?>