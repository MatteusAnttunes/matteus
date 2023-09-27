@extends('layouts.main')

@section('title', 'TCC Matteus')

@section('content')

<div class="col-md-10 offset-md1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/White.png{{ $post->image }}" class="img-fluid" alt="{{ $post->name }}">
        </div>
        <div id="info-conatiner" class="col-md-6">
            
            <h1>{{ $post->name }}</h1>
            <p class="post-tipo"><ion-icon name="game-controller-outline"></ion-icon></p>
            <p class="post-ower"><ion-icon name="person-outline"></ion-icon>Quem postou:</p>
            <a href="#" class="bnt bnt-primary" id="jogo-sumit">Baixar o Jogo</a>
        </div>
        <div class="col-md-12" id="descripion-container">
            <h3>Sobre o Jogo:</h3>
            <p class="post descripion">{{ $post->description }}</p>
        </div>
        
    </div>
</div>

@endsection
