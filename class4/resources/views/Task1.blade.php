<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
</head>

<body>
    <form action="" method="" enctype="multipart/form-data">
        @csrf

        <label for="">Name: </label>
        <input type="text" name="name" value="{{old('name')}}">
        <br><br>
        <label for="">Email: </label>
        <input type="email" name="emial" value="{{old('email')}}">
        <br><br>
        <label for="">Password</label>
        <input type="password" name="password" value="{{old('password')}}">
        <br><br>
        <label for="">Current Password</label>
        <input type="password" name="Cpassword" value="{{old('Cpassword')}}">
        <br><br>
        <label for="city">select the City: </label>
        <select name="city" id="city">
            <option value="Delhi">Delhi</option>
            <option value="kanpur">kanpur</option>
            <option value="Kolkata">Kolkata</option>
        </select>
        <label for="gender" id="gender">Gender: </label>
        <input type="radio" name="gender" id="gender">M
        <input type="radio" name="gender" id="gender">F

        <input type="file" name="file" value="{{old('file')}}">
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>