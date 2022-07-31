
   @extends('layouts.app')
        
       @section ('content') 
         <h1>Liste des articles</h1>
        @if ($posts->count()>0) 
           @foreach ($posts as $post) 
               <h3><a href="{{route('posts.show', ['id' => $post->id])}}">{{$post->title}}</a></h3>
           @endforeach
        @else 
          <span>Aucun post en base de donnéés</span>
        @endif

        <hr>
        <b><h1>Liste des Vidéos</h1></b>


                @forelse ($video->comments as $comment)

                <div> {{ $comment->content }} | crée le {{ $comment->created_at->format('d/M/Y')}}</div>

                @empty
                   <span> Aucun commentaire pour cette vidéo</span>
                @endforelse
       @endsection
