
       function login() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var flagContainer = document.getElementById('flagContainer');
            
            if (username === "" || password === "") {
                alert("用户名和密码不能为空！");
                return;
            }
            
            // 模拟登录检查
            if (username === "admin" && password === "secret") {
                window.location.href = 'dashboard.html';
                flagContainer.classList.remove('hidden');
            } else {
                alert("用户名或密码错误！");
            }
        }
	function onKeyDown(event) {
            // 检查键码是否为13，即回车键
            if (event.keyCode === 13) {
                // 阻止默认行为，避免在按下回车时跳到下一页
                event.preventDefault();
                // 调用登录函数
                login();
            }
        }