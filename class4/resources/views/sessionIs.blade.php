@if(session()->has('name'))
    <p>
        Welcome , {{session('name')}}
        <a href="/logout">Logout</a>
    </p>
@else
    <p>Welcome <a href="/login">LogIn</a> </p> 
@endif
