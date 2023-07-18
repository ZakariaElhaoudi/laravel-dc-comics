@extends('layouts.main-layout')

@section('content')
    <div class="container ">
         <h1>
            DC COMICS
            <a href="{{ route('dc-comics.create') }}">+</a>
        </h1>

         @foreach ($comics as $comic)
        <div class="card my-4">
                
          
            <div class="card-img" style="max-width:300px;">
                <img style="max-width:100%;" src="{{ $comic -> thumb }}" alt="">

            </div>
            <div class="card-header">  
                <h2 class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('dc-comics.show', $comic -> id) }}">
                        {{ $comic -> title }}
                    </a>
                    <div>
                        <a class="btn btn-dark" href="{{ route('dc-comics.edit', $comic -> id) }}">Modifica</a>
                       
                        <form method="POST" action="{{ route('dc-comics.destroy', $comic -> id) }}">

                            @csrf
                            @method('DELETE')
    
                            <input  class="btn btn-danger" type="submit" value="DELETE">
                        </form>
                    </div>
                </h2>
        
            </div>
            <div class="card-body">
                <p>Descrizione {{ $comic -> description }}</p>
                <h4> Prezzo {{ $comic -> price }}</h4>
                <p> Serie {{ $comic -> series }}</p>
                <p> Tipologia {{ $comic -> type }}</p>

            </div>
        
            
                    
                      
             </div>
            @endforeach
            
       
    </div>
@endsection