<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title> <!-- создаем yield который будет маркером и подставлять шаблон который указан в скобках -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="mt-5 mb-4 text-center">Blog</h1>
    @yield('content')
</div>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
