@extends('layouts.main')

@section('title', 'TCC Matteus')

@section('content', )



<div id="search-conatiner" class="col-md-12"></div>
<h1>Pesquise pelo seu jogos <ion-icon name="search-circle-outline"></ion-icon></h1>
<form action="/" method="GET">
    <input type="texte" id="search" name="search" class="form-control" placeholder="Procurar...">
</form>
</div>
<div id="jogos-conatiner" class="cold-md-12"></div>
  @if($search)
  <h2>Buscando por: {{ $search }}</h2>
  @else
  <h2>Jogos cadastrados</h2>
@endif
<p class="subtiltle">Jogos disponiveis </p>
<div id="cards-container" class="row">

   @foreach ($jogos as $jogo)
   <div class="card col-md-3">
     <img src="/img/jogo/{{ $jogo->image }}"alt="{{$jogo->title}}">
       <div class="card-body">
        <p class="card-date">{{ date('d/m/Y', strotime($post->date)) }}</p>
        <h5 class="card-title"></h5>
        <p class="card tipo">Tipo de jogo</p>
        <a href="/jogo/{{ $jogo->id }}"class="btn btn-primary">Saber mais</a>
       </div>

   </div>
       
   @endforeach
   
@if (count($jogos)==0 && $search)
<p> Game Over {{$search}}! <a href="/" class="">Voltar ao inicio da fase!</a> </p>
  
@elseif(count($jogos)==0)
<p>you lose</p>
@endif
</div>

@endsection