@extends('layouts.layout')

@section('platzhalter-inhalt')

<table border="1">
<tr>
    <td>Flight Number</td>
    <td>Flight Destination</td>
    <td>Flight arrival time</td>
    <td>Flight Miles</td>
</tr>

@foreach ($abc as $flight)
<tr>
    <td><p>{{ $flight->flight_number }}</p></td>
    <td><p>{{ $flight->destination_airport}}</p></td>
    <td><p>{{ $flight->destination_time }}</p></td>
    <td><p>{{ $flight->fly_miles }}</p></td>
</tr>     

@endforeach
</table>

@endsection