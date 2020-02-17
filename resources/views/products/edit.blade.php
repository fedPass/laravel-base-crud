{{-- mi riporto la struttura --}}
@extends('layout.main')
{{-- definisco la section per il title --}}
@section('page-title','Product - Edit Details')
{{-- definisco la section per il contenuto --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="mt-3">Modifica dettagli prodotto</h1>
                <form method="post" action="{{ route('products.update', ['product'=>$product->id]) }}">
                    @csrf
                    @method('PUT') {{-- stiamo specificandop il method --}}
                      <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nome" value="{{ $product->name }}" required>
                      </div>
                      <div class="form-group">
                        <label for="name">Descrizione</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Descrizione" value="{{ $product->description }}">
                      </div>
                      <div class="form-group">
                        <label for="name">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Prezzo" value="{{ $product->price }}" required>
                      </div>
                      <button type="submit" class="btn btn-primary">Modifica</button>
                </form>
            </div>
        </div>
    </div>
@endsection
