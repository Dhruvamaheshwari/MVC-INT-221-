<h1>My name is  {{ $name }} and my age is {{ $age }}</h1>
@if($age > 18)
    <p>Adult</p>
@else
    <p>Minor</p>
@endif
