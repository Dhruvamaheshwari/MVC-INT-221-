<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    @vite('resources/css/app.css')
</head>

<body>
    <form method="POST" action="/submit" class="m-10 bg-gray-400 border-2 p-10 w-100 rounded-2xl mx-auto font-bold">
        @csrf
        <label for="">Name: </label>
        <input type="text" name="name" value="{{ old('name') }}" class="border-2 m-2">

        @error('name')
        <div class="text-xl bg-red-400 font-bold w-auto h-10 rounded-2xl pl-7 pt-1">{{ $message }}</div>
        @enderror

        <br>
        <br>
        <label for="">email</label>
        <input type="email" name="email" value="{{ old('email') }}" class="border-2 m-2">
        @error('email')
        <div class="text-xl bg-red-400 font-bold w-auto h-10 rounded-2xl pl-7 pt-1">{{ $message }}</div>
        @enderror
        <br>
        <br>
        <label for="">Phone: </label>
        <input type="tel" name="phone" value="{{ old('phone') }}" class="border-2 m-2">
        @error('phone')
        <div class="text-xl bg-red-400 font-bold w-auto h-10 rounded-2xl pl-7 pt-1">{{ $message }}</div>
        @enderror
        <br>
        <br>
        <button type="submit" class="border-2 rounded-xl mx-23 w-35 h-12 bg-green-300 ">Submit</button>
    </form>
</body>

</html>