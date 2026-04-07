<h1>This is Demo view</h1>

<a href=" {{ url('/show') }} ">Click here </a>
<br>
<a href=" {{ action([\App\Http\Controllers\EasyController::class , 'showView']) }} ">Click here </a>