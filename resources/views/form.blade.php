@extends('layouts.app')
       @section ('content') 
         <h1>Créer un nouveau post</h1>

<div class="flex items-center justify-center">
   
        <form action="{{route('posts.store')}}" method="post">
           @csrf
        Titre du post : <input type="text" name="title" class="border-2 border-gray-600"/>
         Contenu du post : <textarea name="content"   cols="30" rows="10"class="border-2 border-gray-600"></textarea>
          <button type="submit" class="bg-green-700">Créer</button>
        </form>
        </div>

        

       @endsection
