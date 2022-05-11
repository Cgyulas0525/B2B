@section('css')
    <link rel="stylesheet" href="pubic/css/app.css">
    @include('layouts.datatables_css')
    @include('layouts.costumcss')
@endsection

<div class="form-group col-sm-6">
    <div class="form-group col-sm-12">
        <div class="row">
            <div class="mylabel col-sm-3">
                {!! Form::label('employee_id', 'Tábla:') !!}
            </div>
            <div class="mylabel col-sm-9">
                {!! Form::text('tablename', $logItem->tablename,['class'=>'form-control', 'readonly' => 'true', 'id' => 'tablename']) !!}
            </div>
        </div>
    </div>
</div>

<div class="form-group col-sm-6">
    <div class="form-group col-sm-12">
        <div class="row">
            <div class="mylabel col-sm-3">
                {!! Form::label('employee_id', 'Rekord:') !!}
            </div>
            <div class="mylabel col-sm-9">
                {!! Form::text('recordid', $logItem->recordid,['class'=>'form-control', 'readonly' => 'true', 'id' => 'recordid']) !!}
            </div>
        </div>
    </div>
</div>

@if ( $logItem->detailCount > 0 )
    <div class="form-group col-sm-12 topmargin1em">
        @include('flash::message')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body"  >
                <table class="table table-hover table-bordered partners-table" style="width: 100%;"></table>
            </div>
        </div>
        <div class="text-center"></div>
    </div>
@endif

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
                scrollY: 300,
                scrollX: true,
                order: [0, 'asc'],
                ajax: "{{ route('indexLogItemTableDetail', $logItem->id) }}",
                buttons: [],
                paging: false,
                columns: [
                    {title: 'Mező', data: 'changedfield', name: 'changedfield'},
                    {title: 'Miről', data: 'oldinteger', sClass: "text-right", name: 'oldinteger'},
                    {title: 'Mire', data: 'newinteger', sClass: "text-right", name: 'newinteger'},
                    {title: 'Miről', data: 'oldstring', name: 'oldstring'},
                    {title: 'Mire', data: 'newstring', name: 'newstring'},
                    {title: 'Miről', data: 'olddatetime', render: function (data, type, row) { return data ? moment(data).format('YYYY.MM.DD HH:mm:ss') : ''; }, sClass: "text-center", width:'150px', name: 'olddatetime'},
                    {title: 'Mire', data: 'newdatetime', render: function (data, type, row) { return data ? moment(data).format('YYYY.MM.DD HH:mm:ss') : ''; }, sClass: "text-center", width:'150px', name: 'newdatetime'},
                    {title: 'Miről', data: 'olddecimal', render: $.fn.dataTable.render.number( '.', ',', 4), sClass: "text-right", name: 'olddecimal'},
                    {title: 'Mire', data: 'newdecimal', render: $.fn.dataTable.render.number( '.', ',', 4), sClass: "text-right", name: 'newdecimal'},
                ]
            });
        });
    </script>
@endsection

