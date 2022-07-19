<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
   public function index () {
        // $posts = [
        //     'Mon super 1er titre',
        //     'Mon super 2nd titre',
        // ];
        // $title = 'Mon super titre';
          
        /**
         * On récupère les posts en BDD
         * 
         */
        $posts = Post::all();
        /**
         * On récupère le titre de la page
        */
        // dd($posts);
        /**
         * On rend la vue
         */
      
        return view('articles', compact('posts'));
    }
    public function show(int $id){

        $post = Post::findOrFail($id);
        //  $posts = [
        //  1 =>'Mon  1er titre N°1',
        //  2 =>'Mon  2nd titre N°2',
        //  ];

        //  $post = $posts[$id] ?? 'pas de titre';

        return view('article',compact('post'));
    }
  public function create(){
    return view('form');
  }  
  public function contact(){
    return view('contact');
  }  
  public function store(Request $request)
  {
   dd($request->content);
  }  

}
