<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Level 4</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        a {
            color: #0645ad;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        h2 {
            color: #333;
        }
        p {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>欢迎来到CTF基础认证挑战！</h2>
        <p>
            在这个关卡中，你将学习到HTTP基础认证的工作原理，以及如何使用Base64编码。你的目标是通过认证来获取flag。
        </p>
        <p>
            <strong>提示：</strong>认证需要用户名和密码。尝试使用不同的组合来通过认证。你可以使用浏览器的开发者工具、命令行工具或代理工具来构造带有认证信息的请求。
        </p>
        <p>
            一旦你知道了如何构造请求，你应该访问以下URL来尝试获取flag：
        </p>
        <p>
            <a href="auth.php" target="_blank">点击这里开始挑战</a>
        </p>
        <p>
            <strong>注意：</strong>暴力破解可能会违反某些服务的使用条款，本实验仅用于教育目的，务必遵守所有相关的法律和规定。
        </p>
    </div>
</body>
</html>