@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $customerContactFavoriteProduct->ProductName  }}</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right leftmargin1em"
                       href="{{ route('customerContactFavoriteProducts.index') }}">
                        Vissza
                    </a>
                    <a class="btn btn-danger float-right"
                       href="{{ route('customerContactFavoriteProducts.destroy', $customerContactFavoriteProduct->id) }}">
                        Törlés
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
