<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    {!! Form::number('customer_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Eventtype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('eventtype', 'Eventtype:') !!}
    {!! Form::number('eventtype', null, ['class' => 'form-control']) !!}
</div>

<!-- Eventdatetime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('eventdatetime', 'Eventdatetime:') !!}
    {!! Form::text('eventdatetime', null, ['class' => 'form-control','id'=>'eventdatetime']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#eventdatetime').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Remoteaddress Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remoteaddress', 'Remoteaddress:') !!}
    {!! Form::text('remoteaddress', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>