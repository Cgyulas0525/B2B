@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="public/css/app.css">
    @include('layouts.datatables_css')
    @include('layouts.costumcss')
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                        {{ $customerOffer->Name }} {{ date('Y.m.d', strtotime($customerOffer->ValidFrom)) }} - {{ date('Y.m.d', strtotime($customerOffer->ValidTo)) }}
                        <a class="btn btn-warning pull-left" title="Vezérlő pult" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('dIndex') }}"><i class="nav-icon fas fa-tachometer-alt"></i> Vezélő pult</a>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body"  >
                <table class="table table-hover table-bordered partners-table" style="width: 100%;"></table>
            </div>
        </div>
        <div class="text-center"></div>
    </div>
@endsection

@section('scripts')
    @include('layouts.datatables_js')

    <script type="text/javascript">
        $(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var table = $('.partners-table').DataTable({
                serverSide: true,
                scrollY: 390,
                scrollX: true,
                order: [[1, 'asc']],
                paging: false,
                ajax: "{{ route('customerOfferDetailIndex', $customerOffer->Id) }}",
                columns: [
                    {title: 'Termék', data: 'productName', name: 'productName'},
                    {title: 'Kép', data: 'kep', sClass: "text-center", width: '50px', name: 'action', orderable: false, searchable: false},
                    {title: 'Min', data: 'QuantityMinimum', render: $.fn.dataTable.render.number( '.', ',', 0), sClass: "text-right", width:'50px', name: 'QuantityMinimum'},
                    {title: 'Max', data: 'QuantityMaximum', render: $.fn.dataTable.render.number( '.', ',', 0), sClass: "text-right", width:'50px', name: 'QuantityMaximum'},
                    {title: 'Megys', data: 'quantityUnitName', sClass: "text-center", width:'25px', name: 'quantityUnitName'},
                    {title: 'Ár', data: 'SalesPrice', render: $.fn.dataTable.render.number( '.', ',', 0), sClass: "text-right", width:'75px', name: 'SalesPrice'},
                    {title: '', data: 'currencyName', sClass: "text-center", width:'25px', name: 'currencyName'},
                ]
            });

        });
    </script>
@endsection
