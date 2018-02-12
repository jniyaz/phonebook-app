<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PhoneBook App | Simple App by Laravel & Vue</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>    
    <div id="app">
        <header-component></header-component>
        <router-view></router-view>
        <footer-component></footer-component>
    </div>
    </nav>
    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>