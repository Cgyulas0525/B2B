@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="public/css/app.css">
    @include('layouts.datatables_css')
    @include('layouts.costumcss')
@endsection

@section('content')
    <div class="content">
        <div class="clearfix"></div>
        <div class="box box-primary" >
            <div class="box-body">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <section class="content-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4><a id="fejszoveg"> Összes megrendelés</a></h4>
                            </div>
                            <div class="col-sm-6">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-dark all" title="Minden céges"><i class="fas fa-warehouse"></i></a>
                                    <a href="#" class="btn btn-primary yearAll" title="Idei céges"><i class="fas fa-history"></i></a>
                                    <a href="#" class="btn btn-success allOwn" title="Saját"><i class="fas fa-sort-amount-down"></i></a>
                                    <a href="#" class="btn btn-danger yearAllOwn" title="Idei saját"><i class="fas fa-sort-numeric-down"></i></a>
                                    <a href="#" class="btn btn-secondary cart" title="Kosár"><i class="fas fa-shopping-cart"></i></a>
                                    <a href="#" class="btn btn-warning yearCart" title="Idei kosár"><i class="fas fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </section>
                    @include('flash::message')
                    <div class="clearfix"></div>
                    <div class="box box-primary">
                        <div class="box-body"  >
                            <table class="table table-hover table-bordered partners-table" style="width: 100%;"></table>
                        </div>
                    </div>
                    <div class="text-center"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @include('layouts.datatables_js')

    <script type="text/javascript">

        var table;
        var tableName = 'CustomerOrder';

        $(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // $('[data-widget="pushmenu"]').PushMenu('collapse');

            table = $('.partners-table').DataTable({
                serverSide: true,
                scrollY: 450,
                scrollX: true,
                order: [[3, 'desc']],
                "sDom": 'Rlfrtip',
                "bStateSave": true,
                ajax: "{{ route('customerOrders.index') }}",
                buttons: [],
                columns: [
                    {title: 'Tételek', data: 'action', sClass: "text-center", width: '45px', name: 'action', orderable: false, searchable: false},
                    {title: 'Másolás', data: 'tetelszam', sClass: "text-center", width: '45px', name: 'tetelszam1', orderable: false, searchable: false},
                    {title: 'Megrendelés szám', data: 'VoucherNumber', name: 'VoucherNumber'},
                    {title: 'Dátum', data: 'VoucherDate', render: function (data, type, row) { return data ? moment(data).format('YYYY.MM.DD') : ''; }, sClass: "text-center", width:'150px', name: 'VoucherDate'},
                    {title: 'Netto', data: 'NetValue', render: $.fn.dataTable.render.number( '.', ',', 0), sClass: "text-right", width:'75px', name: 'NetValue'},
                    {title: 'ÁFA', data: 'VatValue', render: $.fn.dataTable.render.number( '.', ',', 0), sClass: "text-right", width:'75px', name: 'VatValue'},
                    {title: 'Bruttó', data: 'GrossValue', render: $.fn.dataTable.render.number( '.', ',', 0), sClass: "text-right", width:'75px', name: 'GrossValue'},
                    {title: 'Pénznem', data: 'currencyName', sClass: "text-center", width:'25px', name: 'currencyName'},
                    {title: 'Tétel', data: 'tetelszam', render: $.fn.dataTable.render.number( '.', ',', 0), sClass: "text-right", width:'75px', name: 'tetelszam'},
                    {title: 'Id', data: 'Id',  sClass: "text-right", width:'75px', name: 'Id', orderable: false, searchable: false, visible: false},
                ],
                columnDefs: [
                    {  targets: 1,
                        render: function (data, type, row, meta) {
                            return '<a type="button" class="edit btn btn-primary btn-sm copyOrder" style="width: 40px;" onclick="copyCustomerOrderToShoppingCart('+meta["row"]+')" title="Másolás"><i class="far fa-copy"></i></a> ';
                        }
                    }
                ],
            });

            function btnClick( fejszoveg, utvonal) {
            }

            $('.all').click(function () {
                $('#fejszoveg').text('Összes megrendelés');
                let url = '{{ route('customerOrders.index') }}';
                table.ajax.url(url).load();
            });

            $('.yearAll').click(function () {
                $('#fejszoveg').text('Idei megrendelések');
                let url = '{{ route('indexAllThisYear') }}';
                table.ajax.url(url).load();
            });

            $('.allOwn').click(function () {
                $('#fejszoveg').text('Saját megrendelés');
                let url = '{{ route('indexOwn') }}';
                table.ajax.url(url).load();
            });

            $('.yearAllOwn').click(function () {
                $('#fejszoveg').text('Idei saját megrendelések');
                let url = '{{ route('indexYearAllOwn') }}';
                table.ajax.url(url).load();
            });

            $('.cart').click(function () {
                $('#fejszoveg').text('Összes kosár');
                let url = '{{ route('indexSC') }}';
                table.ajax.url(url).load();
            });

            $('.yearCart').click(function () {
                $('#fejszoveg').text('Idei kosár');
                let url = '{{ route('indexSCThisYear') }}';
                table.ajax.url(url).load();
            });
        });

        function copyCustomerOrderToShoppingCart(Row) {
            swal.fire({
                title: "Megrendelés kosárba másolás!",
                text: "Biztosan kosárba másolja a megrendelés összes tételét?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Kosárba",
                cancelButtonText: "Kilép"
            }).then((result) => {
                if (result.isConfirmed) {
                    var d = table.row(Row).data();
                    var fejszoveg = $('#fejszoveg').text();
                    if (fejszoveg === 'Összes kosár' || fejszoveg === 'Idei kosár') {
                        $.ajax({
                            type:"GET",
                            url:"{{url('api/copyShoppingCartToShoppingCart')}}",
                            data: { Id: d.Id},
                            success: function (response) {
                                console.log('Error:', response);
                            },
                            error: function (response) {
                                // console.log('Error:', response);
                                alert('nem ok');
                            }
                        });
                    } else {
                        $.ajax({
                            type:"GET",
                            url:"{{url('api/copyCustomerOrderToShoppingCart')}}",
                            data: { Id: d.Id},
                            success: function (response) {
                                console.log('Error:', response);
                            },
                            error: function (response) {
                                // console.log('Error:', response);
                                alert('nem ok');
                            }
                        });
                    }
                }
            });
        }

    </script>
@endsection




