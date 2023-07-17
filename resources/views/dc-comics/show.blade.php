@extends("layouts.main-layout")

@section('content')
    <div class="container ">
        <h1>
        DC COMICS
        <a href="{{ route('dc-comics.create') }}">+</a>
        </h1>

        <div class="card">
            <div class="card-header">  
                <h2>
                    <a href="{{ route('dc-comics.show', $comic -> id) }}">
                        {{ $comic -> title }}
                    </a>
                </h2>
        
            </div>
            <div class="card-body">
                <p>Descrizione {{ $comic -> description }}</p>
                <h4> Prezzo {{ $comic -> price }}</h4>
                <p> Serie {{ $comic -> series }}</p>
                <p> Tipologia {{ $comic -> type }}</p>

            </div>
        </div>
    </div>
@endsection