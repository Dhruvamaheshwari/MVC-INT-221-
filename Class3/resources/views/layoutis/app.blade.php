3<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('title') // this is palaceholder for includeing the child data

</head>
<body>
    <h2>this is my navigation bar</h2>
    <img src="{{ asset('images/image1.png') }}" alt="">
    @yield('childdata')
    <footer>@2026 allright sersedved</footer>
</body>
</html>