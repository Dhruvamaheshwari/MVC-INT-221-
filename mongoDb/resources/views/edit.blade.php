<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>   

<body>
    <h2>Edit detail</h2>
    <form action="/abc/{{$data1 -> id}}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" value="{{$data1 -> name}}" name="name">
        <br><br>
        <input type="email" value="{{$data1 -> email}}" name="email">
        <br><br>
        <button type="submit">Edit</button>

    </form>
</body>

</html>