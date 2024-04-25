
    // 当页面加载完成后执行
        window.onload = function() {
            // 定义flag变量，实际应用中应保密
            var flag = '恭喜你获得了FLAG: CTF{ThisIsTheHiddenFlag}';
            
            // 在页面上显示flag和提示
            var overlay = document.getElementById('overlay');
            overlay.style.display = 'block';
            overlay.innerHTML = 'Flag:</strong> ' + flag;
            
            // 1秒后隐藏flag和提示
            setTimeout(function() {
                overlay.style.display = 'none';
            }, 500);
        };
