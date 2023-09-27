@extends('layouts.main')

@section('title', 'Editar seus Jogos')

@section('content')

    <div id="jogo_create-container" class="col-md-6 offset-md-3">
        <h1>Reditando seus dados</h1>
    <form action="/jogo/update/{{$jogo->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-grup">
            <label for="image">Imagem do jogo:</label>
            <input type="file" id="image" class="form-control-file">
            <img src="/img/jogo/{{$jogo->image}}" alt="#" class="img-preview">
               </div>
        <div class="form-grup">
         <label for="title">Jogo:</label>
         <input type="text" class="form-control" id="title" name="title" placeholder="Nome do jogo:"value="{{$jogo->title}}">
            </div>
            <div class="form-grup">
                <label for="title">Dia do lançamento:</label>
                <input type="date" class="form-control" id="date" name="date">
                   </div>
    <form action="/jogo" method="POST">
        <div class="form-grup">
        <label for="title">Conteudo:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Como é o jogo?">
            </div>
    <form action="/jogo" method="POST">
        <div class="form-grup">
         <label for="title">Descrição:</label>
       <textarea name="description" id="descrition" class="form-control" placeholder="Descreva como é o Jogo:"></textarea>
             </div>
   
     <form action="/jogo" method="POST">
         <div class="form-grup">
        <label for="title">Video:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Video sobre o jogo:">
             </div>
    <form action="/jogo" method="POST">
        <div class="form-grup">
        <label for="title">link:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Onde baixar:">
            </div>
    <input type="submit"class="btn btn-primary" value="Registrar jogo">
 
        </form>
    </div>

@endsection
