{{-- mi riporto la struttura --}}
@extends('layout.main')
{{-- definisco la section per il title --}}
@section('page-title','Product - Index')
{{-- definisco la section per il contenuto --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-2">
                <h1 class="float-left">Lista prodotti</h1>
                <a href="{{ route('products.create')}}" class="btn btn-primary float-right mb-2 mt-2">Inserisci prodotto</a>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Nome</th>
                      <th scope="col">Descrizione</th>
                      <th scope="col">Prezzo</th>
                      <th scope="col" class="text-center">Action</th>
                    </tr>
                  </thead>
                    @forelse ($products as $product)
                          <tbody>
                            <tr>
                              <td>{{ $product->id }}</td>
                              <td>{{ $product->name }}</td>
                              <td>{{ $product->description }}</td>
                              <td>{{ $product->price }}</td>
                              <td class="float-right">
                                  {{-- passo alla href due param: la route e l'id --}}
                                  <a href="{{ route('products.show', ['product'=>$product->id]) }}" class="btn btn-outline-success">Dettagli</a>
                                  <a href="{{ route('products.edit', ['product'=>$product->id]) }}" class="btn btn-success">Modifica</a>
                                  <form class="d-inline" method="post" action="{{ route('products.destroy', ['product'=>$product->id]) }}">
                                      @csrf
                                      @method('DELETE')
                                      <input type="submit" value="Elimina" class="btn btn-danger">
                                  </form>
                              </td>

                            </tr>
                    @empty
                        <p colspan="5">Non ci sono prodotti da visualizzare</p>
                    @endforelse
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
