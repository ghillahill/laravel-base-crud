@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Products</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <ul>
                    @foreach ($products as $product)
                        <li>
                            <p>{{$product->name}}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
