<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>welcome to php</h1>
    <h2>have a good day</h2>
    @for ($i = 0; $i < count($ct); $i++)
    <h3>密码:{{$ct[$i]->username}}</h3>
    <h3>账号:{{$ct[$i]->password}}</h3>
    @endfor

   

 
</body>
</html>