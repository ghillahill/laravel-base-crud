@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Dettaglio prodotto {{ $product->id }}</h1>
                <ul>
                    <li>Nome: {{ $product->name }}</li>
                    <li>Codice: {{ $product->code }}</li>
                    <li>Quantità: {{ $product->quantity }}</li>
                    <li>Peso: {{ $product->weight }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
