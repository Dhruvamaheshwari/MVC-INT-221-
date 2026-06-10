<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- this is the first way -->
    <h1>{{ __('messages.welcome') }}</h1>
    <h2>{{ __('messages.about') }}</h2>
    <h2>{{ __('messages.info') }}</h2>

    <!-- this is the second way -->
    <form action="">
        <select name="" id="" onchange="window.location.href=this.value">
            <option value="">Select form it </option>
            <option value="/lang/en">English</option>
            <option value="/lang/hi">Hindi</option>
            <option value="/lang/pa">Punjabi</option>
            <option value="/lang/sp">Spanish</option>
        </select>   
    </form>
</body>

</html>