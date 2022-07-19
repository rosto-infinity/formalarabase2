@extends('layouts.app')
       @section ('content') 
         <h1>Créer un nouveau post</h1>

<div class="flex items-center justify-center">
  
        <form action="" method="post">
        Titre du post : <input type="text" name="title" class="border-2 border-gray-600"/>
         Contenu du post : <textarea name="content"   cols="30" rows="10"class="border-2 border-gray-600"></textarea>
          <button type="submit" class="bg-green-700">Créer</button>
        </form>
        </div>
        
        <div class="flex items-center justify-center">
        <span class="border-2 border-gray-600 bg-red-400">a</span>
        <span class="border-2 border-gray-600 bg-red-400">b</span>
        <span class="border-2 border-gray-600 bg-red-400">c</span>
        <span class="border-2 border-gray-600 bg-red-400">d</span>
        </div>

       @endsection
