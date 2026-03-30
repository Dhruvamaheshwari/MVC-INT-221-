<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
</head>
<body>

    <h1>This is the navbar</h1>
    <img src="{{ asset('images\image1.png') }}" alt="">
    @yield('childData')
    <footer>Created by Dhruva Maheshwari</footer>
    
</body>
</html>