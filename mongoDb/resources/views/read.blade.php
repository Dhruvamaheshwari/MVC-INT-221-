<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>All Record</h2>
    <a href="/abc/create">Add</a>
    <table border="5" cellspacing="10">
        <tr>
            <th>name</th>
            <th>email</th>
            <th>Action</th>
        </tr>   
        @foreach($data as $d)
        <tr>
            <td>{{$d -> name}}</td>
            <td>{{$d -> email}}</td>
            <td><a href="abc/{{$d -> id}}/edit">edit</a>
                <a href="abc/{{$d -> id}}">show</a>
                <form action="/abc/{{$d->id}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>