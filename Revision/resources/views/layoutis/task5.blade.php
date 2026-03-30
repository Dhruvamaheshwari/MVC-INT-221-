<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
</head>
<body>
    
    <nav style="display: flex; gap: 20px;">
        <h2>Blog</h2>
        <h2>About</h2>
        <h2>Contact</h2>
    </nav>
    <h1>Welcome back!!</h1>
    @yield('childData')
    <footer>created by Dhruva Maheshwari</footer>
</body>
</html>