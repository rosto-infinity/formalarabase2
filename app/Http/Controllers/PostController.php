<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use App\Models\Comment;
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
        $video = Video::find(1);
        /**
         * On récupère le titre de la page
        */
        // dd($posts);
        /**
         * On rend la vue
         */
      
        return view('articles', compact('posts','video'));
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
    /**
     * On récupère les données du formulaire
     *  
    */
    Post::create([
      'title' => $request->title,
      'content' => $request->content,
    ]);
    /**
     * On redirige vers la page d'accueil
     */
  //  dd('post crée');
  }  



    public function register(){
      $post = Post::find();
      $video = Video::find(1);
      // $post = Post::find(11);
      // $video = Video::find(1);

      // dd($post);

      $comment = new Comment();
     
      // $comment1 = new Comment(['content' =>'Commentaire1']);
      // $comment2 = new Comment(['content' =>'Commentaire2']);
     
      $post->comments()->saveMany($comment);
      // $post->comments()->saveMany([
      //   $comment1,
      //   $comment2
      // ]);

      $commentV = new Comment(['content' =>'Commentaire video']);
      $video->comments()->save($commentV);

    }
}
