<?php
header("Content-Type:text/html;charset=utf-8");
// 设置初始Cookie，如果用户没有设置auth Cookie
if (!isset($_COOKIE['auth'])) {
    setcookie('auth', 'user', time() + 3600); // 设置Cookie，有效期1小时
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Level 3</title>
</head>
<body>
    <h1>认证挑战</h1>
    <!-- 提供一个按钮，点击后将发送带有Cookie的请求 -->
    <form action="check_access.php" method="POST">
        <button type="submit">获取Flag</button>
    </form>
</body>
</html>