<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Freelance Connnect | Admin</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div>
        <h1>Hallo.... Selamat datang</h1>
        <h1>{{Auth :: user()->name}} </h1>
    </div>
    <div>
        <a href='logout'> logout </a>
    </div>
</body>
</html>