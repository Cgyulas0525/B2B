@section('css')
    @include('layouts.costumcss')
    @include('layouts.datatables_css')
@endsection

<div class="col-lg-12 col-md-12 col-xs-12">
    <div class="content">
        <div class="clearfix"></div>
        <div class="box box-primary" >
            <div class="box-body">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <section class="content-header">
                        <div class="row">
                            <div class="col-sm-3">
                                <h4><a id="fejszoveg"> Minden termék</a></h4>
                            </div>
                            <div class="col-sm-3">
                                <h6>
                                    <select class="form-control" id="sorszam" style='width:100px;' name="sorszam">
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="50" selected>50</option>
                                        <option value="100">100</option>
                                        <option value="-1">Mind</option>
                                    </select>
                                </h6>
                            </div>
                            <div class="col-sm-6">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-primary akcio" title="Akciós"><i class="fas fa-percent"></i></a>
                                    <a href="#" class="btn btn-success szerzodes" title="Szerződéses"><i class="fas fa-handshake"></i></a>
                                    <a href="#" class="btn btn-dark mind" title="Minden tétel"><i class="fas fa-warehouse"></i></a>
{{--                                    <a href="#" class="btn btn-danger kosar" title="Kosár"><i class="fas fa-shopping-cart"></i></a>--}}
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
</div>

@section('scripts')

    @include('layouts.datatables_js')
    @include('functions.customNumberFormat_js')

    <script type="text/javascript">

        var table;
        var sCId = <?php echo $shoppingCart->Id; ?>;

        $(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // $('[data-widget="pushmenu"]').PushMenu('collapse');

            var groupColumn = 3;

            table = $('.partners-table').DataTable({
                serverSide: true,
                scrollY: 320,
                scrollX: true,
                pagingType: 'full_numbers',
                pageLength: 50,
                lengthChange: true,
                lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Mind"]],
                order: [[groupColumn, 'asc'], [0, 'asc']],
                dom: 'Bfrtip',
                ajax: "{{ route('productIndex' ) }}",
                columns: [
                    {title: 'Termék', data: 'ProductName', name: 'ProductName'},
                    {title: 'Kód', data: 'Code', name: 'Code'},
                    {title: 'Mennyiség', data: 'Quantity', width: '150px', name: 'Quantity', id: 'Quntity'},
                    {title: 'Termék csoport', data: 'ProductCategoryName', width: '150px', name: 'ProductCategoryName'},
                    {title: 'Me.egys', data: 'QuantityUnitName', name: 'QuantityUnitName'},
                    {title: 'Vonalkód', data: 'Barcode', name: 'Barcode'},
                    {title: '', data: "Id",
                        "render": function ( data, type, row, meta ) {
                            return '<button value="'+ data +'" onclick="favoriteProduct('+meta["row"]+', this.value)"><i class="fas fa-heart"></i></button>'
                        }
                    }
                ],
                columnDefs: [
                    {
                        targets: [2],
                        render: function ( data, type, row, meta ) {
                            return '<input class="form-control text-right" type="number" value="'+ data +'" onfocusout="QuantityChange('+meta["row"]+', this.value)" pattern="[0-9]+([\.,][0-9]+)?" step="0.0001" style="width:250px;height:20px;font-size: 15px;"/>';
                        },
                    }
                ],
                buttons: [],

            });

            table.on( 'preDraw', function () {
                var count = table.rows( { selected: true } ).count();
                if ( count > 0 ) {
                    rows = table.rows( { selected: true } ).data();
                    for ( i = 0; i < rows.length; i++ ) {
                        console.log(rows[i]);
                    }
                }
            } );

            $('.szerzodes').click(function () {
                $('#fejszoveg').text('Szerződéses termékek');
                let url = '{{ route('customerContractProductIndex') }}';
                table.ajax.url(url).load();
            });

            $('.akcio').click(function () {
                $('#fejszoveg').text('Akciós termékek');
                let url = '{{ route('customerOfferProductIndex') }}';
                table.ajax.url(url).load();
            });

            $('.mind').click(function () {
                $('#fejszoveg').text('Minden termék');
                let url = '{{ route('productIndex') }}';
                table.ajax.url(url).load();
            });

            $('#sorszam').change(function() {
                table.page.len( $('#sorszam').val() ).draw();
            });

        });

        function modifyDetail(d, value) {
            const url = $(this).attr('href');
            swal.fire({
                title: "Ebben a kosárban már van ilyen termék!",
                text: "Biztosan hozzáadja ezt a mennyiséget?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Módosítás",
                cancelButtonText: "Kilép"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type:"GET",
                        url:"{{url('api/setShoppingCartDetail')}}",
                        data: { Id: sCId, Product: d.Id, Quantity: value},
                        success: function (response) {
                            console.log('Error:', response);
                            $('#netto').text(custom_number_format(response.NetValue, 4, ',', '.'));
                            $('#vat').text(custom_number_format(response.VatValue, 4, ',', '.'));
                            $('#brutto').text(custom_number_format(response.GrossValue, 4, ',', '.'));
                        },
                        error: function (response) {
                            console.log('Error:', response);
                            alert('nem ok');
                        }
                    });
                }
            });
        }

        function insertDetail(d, value) {
            $.ajax({
                type:"GET",
                url:"{{url('api/insertShoppingCartDetail')}}",
                data: { Id: sCId, Product: d.Id, Quantity: value},
                success: function (response) {
                    console.log('Error:', response);
                    $('#netto').text(custom_number_format(response.NetValue, 4, ',', '.'));
                    $('#vat').text(custom_number_format(response.VatValue, 4, ',', '.'));
                    $('#brutto').text(custom_number_format(response.GrossValue, 4, ',', '.'));
                },
                error: function (response) {
                    // console.log('Error:', response);
                    alert('nem ok');
                }
            });
        }

        function QuantityChange(Row, value) {
            var d = table.row(Row).data();
            if ( value != 0 && value != d.Quantity) {
                $.ajax({
                    type:"GET",
                    url:"{{url('api/getShoppingCartDetail')}}",
                    data: { Id: sCId, Product: d.Id },
                    success: function (response) {
                        if ( response.Id === undefined || response.Id === null  ) {
                            insertDetail(d, value);
                        } else {
                            modifyDetail(d, value);
                        }
                    },
                    error: function (response) {
                        // console.log('Error:', response);
                        alert('nem ok');
                    }
                });
            } else {
                if ( d.Quantity != value || d.Quantity == 0) {
                    // table.row(Row).deselect();
                }
            }
            d.Quantity = value;
            table.row(Row).invalidate();
        }

        function favoriteProduct(Row, value){
            var d = table.row(Row).data();
            alert(d.Id);
        }


    </script>
@endsection
