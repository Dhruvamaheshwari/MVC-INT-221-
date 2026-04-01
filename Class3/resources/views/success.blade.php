{{-- @foreach($name as $n)
        <p>{{ $n }}</p>
@endforeach --}}


@if($age < 18)
    <p>you are not allowed
    to casts vote</p>
    @elseif($age > 18 && $age <=65)
        <p>you are allowed to caste vote</p>
    @else
        <p>you need special permission, senior citizen</p>
@endif