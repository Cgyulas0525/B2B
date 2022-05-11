@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-10">
                    <h1>{{ date('Y.m.d H:m:s', strtotime($logItem->eventdatetime)) }} - {{ $logItem->customerName }} - {{ $logItem->userName }} - {{ $logItem->eventName }} </h1>
                </div>
                <div class="col-sm-2">
                    <a class="btn btn-primary float-right"
                       href="{{ route('logItems.index') }}">
                        Vissza
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">

            <div class="card-body">
                <div class="row">
                    @include('log_items.show_fields')
                </div>
            </div>

        </div>
    </div>
@endsection
