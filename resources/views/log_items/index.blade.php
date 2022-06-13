@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="pubic/css/app.css">
    @include('layouts.datatables_css')
    @include('layouts.costumcss')
@endsection

@section('content')
    <div class="content">
        <div class="clearfix"></div>
        <div class="box box-primary" >
            <div class="box-body">
                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                    <div class="row content-header">
                        <div class="mylabel3 col-sm-6">
                            <h4><a id="fejszoveg"> {{ \App\Classes\langClass::trans('Log adatok') }}</a></h4>
                        </div>
                        <div class="mylabel3 col-sm-6">
                            <a href="#" class="btn btn-warning szuresgomb szures" title="Szűrés"><i class="fas fa-filter"></i></a>
{{--                            <a href="#" class="btn btn-primary szuresgomb mind" title="Minden tétel"><i class="fas fa-eraser"></i></a>--}}
                            <a href="#" class="btn btn-success szuresgomb egynap" title="24 óra"><i class="fas fa-calendar-day"></i></a>
                        </div>
                        <div class="col-sm-4">
                            {!! Form::label('customer', \App\Classes\langClass::trans('Partner:')) !!}
                            {!! Form::select('customer', ddwClass::logItemCustomerDDw(), empty($_COOKIE['logCustomer']) ? null : $_COOKIE['logCustomer'], ['class'=>'select2 form-control', 'required' => 'true', 'id' => 'customer']) !!}
                        </div>
                        <div class="col-sm-4">
                            {!! Form::label('felhasznalo', \App\Classes\langClass::trans('Felhasználó:')) !!}
                            {!! Form::select('customercontact_id', empty($_COOKIE['logCustomer']) ? ddwClass::logItemUserDDW(-9999999) : ddwClass::logItemUserDDW($_COOKIE['logCustomer']),
                                empty($_COOKIE['logUser']) ? null: $_COOKIE['logUser'],['class'=>'select2 form-control', 'required' => 'true', 'id' => 'customercontact_id']) !!}
                        </div>
                        <div class="col-sm-2">
                            {!! Form::label('startDate', \App\Classes\langClass::trans('Időszak tól:')) !!}
                            {!! Form::date('startDate', empty($_COOKIE['logStartDate']) ? date('Y-m-d', strtotime('now - 1 day')) : $_COOKIE['logStartDate'], ['class' => 'form-control', 'required' => 'true', 'id'=>'startDate']) !!}
                        </div>
                        <div class="col-sm-2">
                            {!! Form::label('endDate', \App\Classes\langClass::trans('ig:')) !!}
                            {!! Form::date('endDate', empty($_COOKIE['logEndDate']) ? \Carbon\Carbon::now() : $_COOKIE['logEndDate'], ['class' => 'form-control', 'required' => 'true', 'id'=>'endDate']) !!}
                        </div>
                    </div>
                </div>
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
@endsection

@section('scripts')

    @include('layouts.datatables_js')
    @include('functions.cookiesFunctions_js')

    <script type="text/javascript">
        $(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var table = $('.partners-table').DataTable({
                serverSide: true,
                scrollY: 300,
                scrollX: true,
                order: [[3, 'desc'], [1, 'asc'], [2, 'asc']],
                ajax: "{{ route('indexBetween', [ empty($_COOKIE['logStartDate']) ? date('Y-m-d', strtotime('now - 1 day')) : $_COOKIE['logStartDate'],
                                                 empty($_COOKIE['logEndDate']) ? \Carbon\Carbon::now() : $_COOKIE['logEndDate'],
                                                 myUser::user()->customerId,
                                                 myUser::user()->id]) }}",
                columns: [
                    {title: <?php echo "'" . App\Classes\langClass::trans('Feladat') . "'"; ?>, data: 'action', sClass: "text-center", width: '150px', name: 'action', orderable: false, searchable: false},
                    {title: <?php echo "'" . App\Classes\langClass::trans('Partner cég') . "'"; ?>, data: 'customerName', name: 'customerName'},
                    {title: <?php echo "'" . App\Classes\langClass::trans('Felhasználó') . "'"; ?>, data: 'userName', name: 'userName'},
                    {title: <?php echo "'" . App\Classes\langClass::trans('Dátum') . "'"; ?>, data: 'eventdatetime', render: function (data, type, row) { return data ? moment(data).format('YYYY.MM.DD HH:mm:ss') : ''; }, sClass: "text-center", width:'150px', name: 'eventdatetime'},
                    {title: <?php echo "'" . App\Classes\langClass::trans('Esemény') . "'"; ?>, data: 'eventName', sClass: "text-center", name: 'eventName'},
                ]
            });

            function cookieSave() {
                createCookie('logStartDate', $('#startDate').val(), '30');
                createCookie('logEndDate', $('#endDate').val(), '30');
                createCookie('logCustomer', $('#customer').val() != 0 ? parseInt($('#customer').val()) : 0, '30');
                createCookie('logUser', $('#customercontact_id').val() != 0 ? parseInt($('#customercontact_id').val()) : 0, '30');
            }

            $('.szures').click(function () {
                if ( $('#startDate').val() != 0 && $('#endDate').val() != 0 ) {
                    var endDate = $('#endDate').val();
                    endDate = moment(endDate, 'YYYY.MM.DD HH:MM:SS').toDate();
                    endDate.setDate(endDate.getDate() + 1);

                    $('#fejszoveg').text('Időszak Log adatok');
                    let url = '{{ route('indexBetween', [":startDate", ":endDate", ":customer", ":user"]) }}';
                    url = url.replace(':startDate',  $('#startDate').val());
                    url = url.replace(':endDate', moment(endDate).format('YYYY-MM-DD'));
                    url = url.replace(':customer',  parseInt($('#customer').val()));
                    url = url.replace(':user',  parseInt($('#customercontact_id').val()));

                    cookieSave();

                    table.ajax.url(url).load();
                }
            });

            $('.egynap').click(function () {

                $('#customer').val(null);
                $('#customercontact_id').val(null);

                let startDate = new Date();
                startDate = startDate.setDate(startDate.getDate() - 1);
                $('#startDate').val(moment(startDate).format('YYYY-MM-DD'));
                $('#endDate').val(moment(Date($.now())).format('YYYY-MM-DD'));

                $('#fejszoveg').text(<?php echo "'" . App\Classes\langClass::trans('Log adatok elmúlt 24 óra') . "'"; ?>);
                let url = '{{ route('logItems.index') }}';

                cookieSave();

                table.ajax.url(url).load();

            });

            $('.mind').click(function () {
                var startDate = new Date('1990-01-01');

                $('#customer').val(null);
                $('#customercontact_id').val(null);
                $('#startDate').val(moment(startDate).format('YYYY-MM-DD'));
                $('#endDate').val(moment(Date($.now())).format('YYYY-MM-DD'));

                $('#fejszoveg').text('Az összes Log adat');
                let url = '{{ route('indexBetween', [":startDate", ":endDate", ":customer", ":user"]) }}';
                url = url.replace(':startDate',  $('#startDate').val());
                url = url.replace(':endDate', $('#endDate').val());
                url = url.replace(':customer',  parseInt($('#customer').val()));
                url = url.replace(':user',  parseInt($('#customercontact_id').val()));

                cookieSave();

                table.ajax.url(url).load();
            });


            $('#customer').on('change',function(){
                var customer = $(this).val();
                if(customer){
                    $.ajax({
                        type:"GET",
                        url:"{{url('api/logItemUserDDW')}}?customer="+customer,
                        success:function(res){
                            if(res){
                                $("#customercontact_id").empty();
                                $("#customercontact_id").append('<option></option>');
                                $.each(res,function(key,value){
                                    $("#customercontact_id").append('<option value="'+value.id+'">'+value.name+'</option>');
                                });

                                if ( res.length == 1 ) {
                                    $('#customercontact_id').val(res[0].Id);
                                }

                            }else{
                                $("#customercontact_id").empty();
                            }
                        }
                    });
                }else{
                    $("#customercontact_id").empty();
                }
            });

        });
    </script>
@endsection


