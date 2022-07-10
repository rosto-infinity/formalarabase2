<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
   public function index () {
        $posts = [
            'Mon super 1er titre',
            'Mon super 2nd titre',
        ];
        // $title = 'Mon super titre';
        return view('articles', compact('posts'));
    }
    public function show(int $id){

         $posts = [
         1 =>'Mon  1er titre N°1',
         2 =>'Mon  2nd titre N°2',
         ];

         $post = $posts[$id] ?? 'pas de titre';

        return view('article',compact('post'));
    }
  public function contact(){
    return view('contact');
  }  

}
