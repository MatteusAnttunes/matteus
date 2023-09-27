@extends('layouts.main')

@section('title', 'TCC Matteus')

@section('content', )

<h1>Seus Jogos</h1>
   @if ($id != null)
   @endif

<p> Lista de Jogos: {{ $id }} </p>
@if ($busca = !'')
<p>O jogo é:{{ $busca }}</p>    
@endif
@endsection()