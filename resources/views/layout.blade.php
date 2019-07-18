<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: Raleway;
        }
    </style>
</head>
<body>
<div class="container">
    @yield('content')
</div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
