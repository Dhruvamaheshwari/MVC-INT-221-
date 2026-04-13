<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
</head>
<body>
    <h1>This is the header part of the web-page</h1>
    <img style="width: 150px; height: 150px;" src="{{ asset('image/image1.png') }}" alt="">
    @yield('data')
    <footer>Created by Dhruva Maheshwari</footer>
</body>
</html>