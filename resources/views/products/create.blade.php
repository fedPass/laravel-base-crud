{{-- mi riporto la struttura --}}
@extends('layout.main')
{{-- definisco la section per il title --}}
@section('page-title','Product - Create')
{{-- definisco la section per il contenuto --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Inserisci un nuovo prodotto</h1>
                <form method="post" action="{{ route('products.store')}}">
                    @csrf
                  <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
                  </div>
                  <div class="form-group">
                    <label for="name">Descrizione</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Descrizione">
                  </div>
                  <div class="form-group">
                    <label for="name">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Prezzo">
                  </div>
                  <button type="submit" class="btn btn-primary">Crea</button>
                </form>
            </div>
        </div>
    </div>
@endsection
