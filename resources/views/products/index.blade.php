@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Products</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <a class="btn btn-secondary" href="{{route('products.create')}}">Aggiungi Prodotto</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Codice</th>
                            <th scope="col">Quantità</th>
                            <th scope="col">Peso</th>
                            <th scope="col">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->code}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->weight}}</td>
                                <td>
                                    <a href="{{ route('products.show', ['product' => $product->id ]) }}"
                                        class="btn btn-info">
                                        Dettagli
                                    </a>
                                    <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="btn btn-warning">
                                        Modifica
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
