@extends("layouts.main-layout")

@section('content')
@dump($errors->all())
    <div class="container mt-5 ">
        <h2>Inserisci nuovo prodotto </h2>
        <form method="POST" action="{{ route('dc-comics.store') }}">
        
            @csrf

            <div class="form-group">
              <label for="title">Titolo:</label>
              <input type="text" class="form-control" name="title">
            </div>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        
            <div class="form-group">
                <label for="description">Descrizione:</label>
                <input type="text" class="form-control" name="description">
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        
            <div class="form-group">
                <label for="price">Prezzo:</label>
                <input type="text" class="form-control" name="price">
            </div>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="series">Serie:</label>
                <input type="text" class="form-control" name="series">
            </div>
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="sale_date">Data:</label>
                <input type="text" class="form-control" name="sale_date">
            </div>
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="type">Tipologia:</label>
                <input type="text" class="form-control" name="type">
            </div>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="thumb">immagine:</label>
                <input type="text" class="form-control" name="thumb">
            </div>
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
@endsection