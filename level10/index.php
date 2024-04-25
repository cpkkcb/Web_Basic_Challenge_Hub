<?php
header("Content-Type:text/html;charset=utf-8");
function GetIP(){
if(!empty($_SERVER["HTTP_CLIENT_IP"]))
    $cip = $_SERVER["HTTP_CLIENT_IP"];
else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
    $cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
else if(!empty($_SERVER["REMOTE_ADDR"]))
    $cip = $_SERVER["REMOTE_ADDR"];
else
    $cip = "0.0.0.0";
return $cip;
}

$GetIPs = GetIP();
if ($GetIPs=="1.1.1.1"){
echo "恭喜你获得了FLAG:CTF{YouAreIn}";
}
else{
echo "错误！你的IP不在访问列表之内！";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Level 10</title>
    <script>
        function viewSource() {
            // 将PHP源码作为预格式化文本显示在页面上
            document.getElementById("sourceCode").style.display = "block";
        }
    </script>
    <style>
        /* 隐藏源码区域 */
        #sourceCode {
            display: none;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<!-- 错误提示信息 -->
<div id="error-message">
    错误！你的IP不在访问列表之内！
</div>

<!-- 按钮，点击时调用 viewSource 函数 -->
<button onclick="viewSource()">查看源码</button>

<!-- 源码展示区域 -->
<pre id="sourceCode">
&lt;?php
function GetIP(){
    if(!empty($_SERVER[&quot;HTTP_CLIENT_IP&quot;]))
        $cip = $_SERVER[&quot;HTTP_CLIENT_IP&quot;];
    else if(!empty($_SERVER[&quot;HTTP_X_FORWARDED_FOR&quot;]))
        $cip = $_SERVER[&quot;HTTP_X_FORWARDED_FOR&quot;];
    else if(!empty($_SERVER[&quot;REMOTE_ADDR&quot;]))
        $cip = $_SERVER[&quot;REMOTE_ADDR&quot;];
    else
        $cip = &quot;0.0.0.0&quot;;
    return $cip;
}

$GetIPs = GetIP();
if ($GetIPs==&quot;1.1.1.1&quot;){
    echo &quot;Great! Key is *********&quot;;
}
else{
    echo &quot;错误！你的IP不在访问列表之内！&quot;;
}
?&gt;
</pre>

</body>
</html>