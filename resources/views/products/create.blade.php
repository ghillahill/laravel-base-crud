@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('products.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Codice Prodotto</label>
                        <input type="number" name="code" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Quantità</label>
                        <input type="number" name="quantity" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Peso</label>
                        <input type="number" name="weight" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">
                            Aggiungi
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
