<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>
</head>
<body>
<h1>{{$appName}}</h1>
<a href="{{ url('/todo') }}">Смотреть список задач</a>
<a href="{{ url('/todo/create') }}">Создать список задач</a>
</body>
</html>
