<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Jogo;
use App\Models\Jogos;

class JogoController extends Controller
{
   public function index(){

      $search = request('search');

      if($search) {

      }else {
         $jogo = Post::where([
            ['nome', 'like', '%'.$search.'%']
         ])->get();
      }

   $jogo = Post::all();

    return view('welcome',['jogos'=> $jogo, 'search' => $search]);

   } 

   public function create(){
    return view('jogo.create');
   }

   public function store(Request $request){
      $jogo = new Post;

      $jogo->nome = $request-> nome;
      $jogo->content = $request-> content;
      $jogo->description = $request-> description;
      $jogo->image = $request-> image;
      $jogo->video = $request-> video;
      $jogo->link = $request-> link;

      // Imagens
      if($request->hasFile('image') && $request->file('image')->isValid()){
         
         $requestImage= $request->image;

         $extencion =$requestImage->extencion();

         $imageName = md5($requestImage->getClientOriginalName(). strtotime("now")).".". $extencion;

         $request->image->move(public_path('/img/jogo'), $imageName);

         $jogo->image = $imageName;

      

      $jogo->save();
      }
      return redirect("/")->with('msg', 'Jogo cadastrado com sucesso!');
      }

   public function show($id){
      $jogo = Post::findOrFail($id);

      return view('jogo.show',['post'=> $jogo]);
   }

public function dashboard(){

$user = auth()->user();

$jogo = $user->Jogo;

return view('jogo.deshborad', ['jogos'=> $jogo]);

}

public function update(Request $request){
   Post::findOrFail($request->id)->update($request->all());

   
}

}



