<?php
header("Content-Type:text/html;charset=utf-8");
// 定义flag变量，实际应用中应保密
$flag = '恭喜你获得了FLAG: CTF{YOUAREGREAT}';

// 检查是否通过GET或POST方法提交了'secret'参数
if (isset($_GET['secret']) && $_GET['secret'] === 'true') {
    // 输出解码后的flag
    echo ($flag);
    exit; // 退出脚本以防止进一步的输出
} elseif (isset($_POST['secret']) && $_POST['secret'] === 'true') {
    // 处理POST请求
    echo ($flag);
    exit;
}

// 如果没有通过GET或POST方法提交正确的'secret'参数，则不输出任何内容
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Level 1</title>
</head>
<body>
    <div class="container">
        <h2>可以说的秘密</h2>
        <p>通过GET或POST方法提交参数为secret，参数值为true的请求,即可获得秘密！</p>
    </div>
</body>
</html>