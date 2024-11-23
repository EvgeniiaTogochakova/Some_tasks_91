@extends('layouts/default')

@section('content')
<h2>Имя: {{$name}}</h2>

@if ($age<18) 
<p class="warning">Возраст: UNDERAGE</p>
@else
<p>Возраст: {{$age}}</p>
@endif

<p>Род занятий: {{$position}}</p>
<p>Адрес: {{$address}}</p>
@stop