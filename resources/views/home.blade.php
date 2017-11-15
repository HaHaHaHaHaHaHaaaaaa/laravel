<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>前端</title>
   
</head>
<body>
    <div id="app"></div>
    <script src="{{mix('js/app.js')}}"></script>
</body>
</html> -->
@extends('welcome')
@section('body_script')
<link href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
@endsection
@section('body_w')

<p>这是在home模板中追加到welcome模板中的。</p>
<input class="form-group" type="text" name="username" id="username" placeholder="注册账户">
    <input class="form-group" type="password" name="password" id="password" placeholder="注册密码">
    <button class="btn btn-default" type="submit">登录</button>
@endsection

@section('name_w')
    <h1>这不是yield吗</h1>
@endsection