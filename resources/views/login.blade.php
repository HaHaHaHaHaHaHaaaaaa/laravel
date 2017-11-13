<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>登录界面</h1>
    <form method="post" action="">
    <input type="hidden" name="csrf_token" id="csrf_token" value="{{ csrf_token() }}" />
    <input type="text" name="username" id="username" placeholder="注册账户">
    <input type="password" name="password" id="password" placeholder="注册密码">
    <button type="submit" onclick="goLogin()">登录</button>
    </form>
   
    <script>
        function goLogin(){
           /*  console.log('点击了登录') */
        }
    </script>
</body>
</html>