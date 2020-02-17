{{-- mi riporto la struttura --}}
@extends('layout.main')
{{-- definisco la section per il title --}}
@section('page-title','Product Index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Lista prodotti</h1>
                @forelse ($products as $product)

                @empty
                    <p>Non ci sono prodotti da visualizzare</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
