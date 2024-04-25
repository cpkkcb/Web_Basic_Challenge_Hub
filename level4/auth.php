<?php
header("Content-Type:text/html;charset=utf-8");
// 定义flag变量，实际应用中应保密
$flag = '恭喜你获得了FLAG: CTF{BasicAuthChallengePassed}';

// 预期的用户名和密码
$expectedUsername = 'admin';
$expectedPassword = 'secret';

// 将预期的用户名和密码进行Base64编码
$expectedCredentials = base64_encode($expectedUsername . ':' . $expectedPassword);

// 从请求头中获取Authorization字段
$authorizationHeader = isset($_SERVER['HTTP_AUTHORIZATION']) ? $_SERVER['HTTP_AUTHORIZATION'] : '';

// 检查Authorization头是否符合预期
if (isset($authorizationHeader) && strpos($authorizationHeader, 'Basic ') === 0) {
    // 解码接收到的Base64凭据
    $receivedCredentials = base64_decode(substr($authorizationHeader, 6));

    // 检查解码后的凭据是否与预期相符
    if ($receivedCredentials === $expectedUsername . ':' . $expectedPassword) {
        echo $flag;
    } else {
        // 凭据不匹配，返回401 Unauthorized响应
        header('WWW-Authenticate: Basic realm="CTF Challenge"');
        header('HTTP/1.1 401 Unauthorized');
        echo "Unauthorized - Invalid credentials.";
    }
} else {
    // Authorization头不存在或格式不正确，返回401 Unauthorized响应
    header('WWW-Authenticate: Basic realm="CTF Challenge"');
    header('HTTP/1.1 401 Unauthorized');
    echo "Unauthorized - Authorization header missing or malformed.";
}

// 终止脚本执行
exit();
?>