@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">

<h1>Meus Jogos</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-jogos-container">
    @if (count($posts) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Tipo</th>
            </tr>
        </thead>
    </table>
    <tbody>
        @foreach ($jogos as $jogo)
            <tr>
                <th scope="row">{{ $loop->index + 1}}</th>
                <td><a href="/jogo/{{ $jogo->id}}">{{ $jogo->titile }}</a></td>
            </tr>
            <td>

                <a href="/jogo/edit/{{$jogo->id}}"class='btn btn-info edit-btn'><ion-icon name="create-outline"></ion-icon>>Editar</a>
                <form action="/jogo/{{ $jogo->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger delet-btn"><ion-icon name="trash-outline"></ion-icon> </button>
                </form>
            </td>
        @endforeach
    </tbody>
    @else
    <p>you lose, <a href="/jogo/create"> <ion-icon name="play-outline">Press Start Button</ion-icon></a></p>
        
    @endif
</div>

@endsection