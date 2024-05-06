{{--@json($daten, JSON_PRETTY_PRINT) /** 'daten'=>$data */

 {{$name}} /** 'name'=>'Ivan',  */ 

<h1>{{$egal_blade}}</h1> /** 'egal_blade'=>$egal_php] */

/** {{ print_r($users) }}  'users'=>$user, */ --}}


{{$name}}

@if ($name == 'Ivan')
    I have one record!
@elseif (count($records) > 1)
    I have multiple records!
@else
    I don't have any records!
@endif

@foreach ($users as $user)
    <p>This is user {{ $user['email'] ??'leer'}}</p>
@endforeach



<form method="GET" action="/wert1">
    @csrf
    <input type="hidden" value="1" name="wert"/>
    <input type="text" value="{{$vorname}}" name="vorname"/>
    <input type="text" value="{{$nachname}}" name="nachname"/>
    <input type="submit"/>
</form>