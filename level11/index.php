<?php
header("Content-Type:text/html;charset=utf-8");
// 隐藏密码，避免直接在HTML中显示
$hidden_password = "424178";

// 检查表单提交
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 获取用户输入的密码
    $user_password = isset($_POST['password']) ? $_POST['password'] : "";

    // 密码验证
    if ($user_password == $hidden_password) {
        // 密码正确，可以进行后续操作，例如重定向到另一个页面
        // header("Location: success_page.php"); // 取消注释以启用重定向
        echo "<script>alert('密码正确！');</script>";
        echo "恭喜你获得了FLAG:CTF{123123123}";
    } else {
        // 密码错误，显示错误信息
        echo "<script>alert('密码错误，请重试，忘记密码可使用密保问题找回。');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Level 11</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .login-box {
            width: 300px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 100px auto;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .login-box input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .login-box button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #5cb85c;
            color: white;
            cursor: pointer;
        }
        .login-box button:hover {
            background-color: #4cae4c;
        }
        .error-message {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>设备调试系统登录</h2>
        <form action="" method="post">
            <div class="error-message" id="error-message"></div>
            <input type="password" id="password" name="password" placeholder="输入出厂调试密码" required>
            <button type="submit">Login</button>
        </form>
    </div>

    <script>
        function showError(message) {
            document.getElementById('error-message').innerText = message;
        }
    </script>

<!--    
document.oncontextmenu=function(){return false};
    var a,b,c,d,e,f,g;
    a = 3.14;
    b = a * 2;
    c = a + b;
    d = c / b + a;
    e = c - d * b + a;
    f = e + d /c -b * a;
    g = f * e - d + c * b + a;
    a = g * g;
    a = Math.floor(a);

    function check(){
        if(document.getElementById("txt").value==a){
            return true;
        }else{
            alert("密保问题回答错误");
            return false;
        }
    } -->

</body>
</html>