@extends('layouts.app')

@section('css')
    @include('layouts.costumcss')
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kosár</h1>
                </div>
                <div class="col-sm-6">
                    <div class="pull-right">
                        {!! Form::submit('Ment', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('shoppingCarts.index') }}" class="btn btn-default">Kilép</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

{{--        <div class="card">--}}

            {!! Form::model($shoppingCart, ['route' => ['shoppingCarts.update', $shoppingCart->Id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('shopping_carts.editFields')
                </div>
            </div>

           {!! Form::close() !!}

{{--        </div>--}}
    </div>
@endsection
