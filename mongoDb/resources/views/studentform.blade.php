<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/abc" method="POST">
        @csrf

        Name: <input type="text" placeholder="enter name" name="name">
        <br><br>
        Emai: <input type="email" placeholder="enter email" name="email">
        <br><br>
        <button type="submit">Insert</button>
    </form>
</body>
</html>