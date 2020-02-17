{{-- mi riporto la struttura --}}
@extends('layout.main')
{{-- definisco la section per il title --}}
@section('page-title','Product - Show Details')
{{-- definisco la section per il contenuto --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="mt-3">Visualizza dettagli prodotto</h1>
                <div class="card mt-3">
                      <div class="card-header">
                        Dettagli prodotto ID: {{ $product->id }}
                      </div>
                      <ul class="list-group list-group-flush">
                            <li class="list-group-item">Nome: {{ $product->name }}</li>
                            <li class="list-group-item">Descrizione: {{ $product->description }}</li>
                            <li class="list-group-item">Prezzo: {{ $product->price }}</li>
                            <li class="list-group-item">Creato il: {{ $product->created_at }}</li>
                            <li class="list-group-item">Aggiornato il: {{ $product->updated_at }}</li>
                      </ul>
                </div>
                <a href="{{ route('products.index') }}" class="btn btn-success mt-3">Torna alla Home</a>
            </div>
        </div>
    </div>
@endsection
