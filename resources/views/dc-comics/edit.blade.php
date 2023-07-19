@extends("layouts.main-layout")

@section('content')
    <div class="container mt-5 ">
        <h2>Inserisci nuovo prodotto </h2>
        <form method="POST" action="{{ route('dc-comics.update', $comic -> id) }}">
        
            @csrf
            @method('PUT')

            <div class="form-group">
              <label for="title">Titolo:</label>
              <input type="text" class="form-control" name="title" id="title" value="{{ $comic -> title }}">
            </div>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        
            <div class="form-group">
                <label for="description">Descrizione:</label>
                <input type="text" class="form-control" name="description" id="description" value="{{ $comic -> description }}">
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        
            <div class="form-group">
                <label for="price">Prezzo:</label>
                <input type="text" class="form-control" name="price" id="price" value="{{ $comic -> price }}">
            </div>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="series">Serie:</label>
                <input type="text" class="form-control" name="series" id="series" value="{{ $comic -> series }}">
            </div>
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="sale_date">Data:</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" value="{{ $comic -> sale_date }}">
            </div>
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="type">Tipologia:</label>
                <input type="text" class="form-control" name="type" id="type" value="{{ $comic -> type }}">
            </div>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="thumb">immagine:</label>
                <input type="text" class="form-control" name="thumb" id="thumb" value="{{ $comic -> thumb }}">
            </div>
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        
            <button type="submit" class="btn btn-primary" >Invia</button>
        </form>
    </div>
@endsection