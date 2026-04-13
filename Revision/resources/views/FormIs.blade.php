<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="/submit" method="POST">
        @csrf
        <label for="">Name: </label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
        <p>{{ $message }}</p>
        @enderror
        <br><br>
        <label for="">Email: </label>
        <input type="email" name="email" value="{{ old('email') }}"> 
        @error('email')
        <p>{{ $message }}</p>
        @enderror
        <br><br>
        <label for="">Phone : </label>
        <input type="tel" name="phone" value="{{ old('phone') }}">
        @error('phone')
        <p>{{ $message }}</p>
        @enderror
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>