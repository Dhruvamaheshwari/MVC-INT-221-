<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Placement Record data</h1>
    <table border="5">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        @foreach($data as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->name}}</td>
                <td>{{$d->email}}</td>
                <td> <a href="/delete/{{$d -> id}}">Delete</a> </td>
                <td> <a href="/edit/{{$d -> id}}">edit</a> </td>
        </tr>
            @endforeach
    </table>
</body>

</html>