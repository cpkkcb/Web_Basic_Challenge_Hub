<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web Basic Challenge Hub</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .header-title {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #333;
        }
        .legal-notice {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #ffffcc;
            border: 1px solid #ffeb3b;
            border-radius: 4px;
            text-align: left;
        }
        .container {
            display: flex; /* 使用Flexbox */
            flex-wrap: wrap; /* 允许换行 */
            max-width: 800px;
            margin: 0 auto;
            padding: 0;
            justify-content: center; /* 水平居中 */
        }
        .card {
            flex: 1 1 calc(33.333% - 20px); /* 使用Flexbox的flex-grow, flex-shrink 和 flex-basis */
            margin: 10px; /* 简化外边距 */
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: white; /* 白色背景 */
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }
        .card h3 {
            margin: 0;
            color: #333;
        }
        .card p {
            color: #666;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- 页面主标题 -->
        <h1 class="header-title">Web Basic Challenge Hub</h1>

        <!-- 法律和道德提醒 -->
        <div class="legal-notice">
            <strong>注意：本实验仅用于教育目的，务必遵守所有相关的法律和规定。</strong>
        </div>
        
        <!-- 关卡卡片 -->
        <div class="card" onclick="location.href='level1/index.php'">
            <h3>Level 1: 方法对决</h3>
            <p>构造GET和POST请求，体会他们之间的不同</p>
        </div>
        <!-- 其他关卡的.card元素按照上面的格式继续添加 -->
        <div class="card" onclick="location.href='level2/index.php'">
            <h3>Level 2: 转瞬即逝</h3>
            <p>302请求转瞬即逝，他到底隐藏了什么秘密</p>
        </div>

        <div class="card" onclick="location.href='level3/index.php'">
            <h3>Level 3: 身份伪装</h3>
            <p>体验Cookie会话管理越权。</p>
        </div>

        <div class="card" onclick="location.href='level4/index.php'">
            <h3>Level 4: 密码突破</h3>
            <p>挑战HTTP基础认证的密码门禁，学习如何安全地传递认证信息。</p>
        </div>

        <div class="card" onclick="location.href='level5/index.html'"> 
            <h3>Level 5: 粗心大意</h3>
            <p>揭开网页源码的面纱，发现隐藏编码中的秘密。</p>
        </div>

        <div class="card" onclick="location.href='level6/index.html'"> 
            <h3>Level 6: 资源宝藏</h3>
            <p>挖掘HTTP响应包中的文件资源，探索响应包中HTML、JS和CSS的隐藏信息。</p>
        </div>


        <div class="card" onclick="location.href='level7/index.html'"> 
            <h3>Level 7: 瞒天过海</h3>
            <p>UserAgent客户端信息识别利用</p>
        </div>
        <div class="card" onclick="location.href='level8/index.html'"> 
            <h3>Level 8: 限制解除</h3>
            <p>前端标签限制是不安全的</p>
        </div>
         <div class="card" onclick="location.href='level9/index.html'"> 
            <h3>Level 9: 按图索骥 </h3>
            <p>体验URL的资源路径构造过程</p>
        </div>

        <div class="card" onclick="location.href='level10/index.php'"> 
            <h3>Level 10: 改头换面 </h3>
            <p>x_forwarded_for应用</p>
        </div>
        <div class="card" onclick="location.href='level11/index.php'"> 
            <h3>Level 11: 巧用调试 </h3>
            <p>认识console调试功能</p>
        </div>

        <div class="card" onclick="location.href='level12/index.php'"> 
            <h3>Level 12: 寻根溯源 </h3>
            <p>referer头应用</p>
        </div>
    </div>
</body>
</html>