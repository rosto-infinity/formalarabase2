
   @extends('layouts.app')
        
       @section ('content') 
        
                <h1>{{$post->content}}</h1>

                <span>{{$post->image? $post->image->path : "pas d'image"}}</span>
               
                <hr>
                {{-- @forelse ($post->comments as $comment)

                <div> {{ $comment->content}} | crée le {{ $comment->created_at->format('d/M/Y')}}</div>

                @empty
                   <span> Aucun commentaire pour ce post</span>
                @endforelse --}}
                <hr>
                
                @foreach ($post->tags as $tag)
                    <span class="">{{$tag->name}}</span>
                    
                @endforeach
           
       @endsection 