@extends('layouts/default')

@section('content')
<p>Адрес: {{$address}}</p>
<p>Индекс: {{$post_code}}</p>

@if ($email==='')
<p class="warning">Email address was not specified</p>
@else    
<p>Электронный адрес: {{$email}}</p>
@endif

<p>Телефон: {{$phone}}</p>
@stop




