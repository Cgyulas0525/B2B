<div class="table-responsive">
    <table class="table" id="logItems-table">
        <thead>
            <tr>
                <th>Customer Id</th>
        <th>User Id</th>
        <th>Eventtype</th>
        <th>Eventdatetime</th>
        <th>Remoteaddress</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($logItems as $logItem)
            <tr>
                <td>{{ $logItem->customer_id }}</td>
            <td>{{ $logItem->user_id }}</td>
            <td>{{ $logItem->eventtype }}</td>
            <td>{{ $logItem->eventdatetime }}</td>
            <td>{{ $logItem->remoteaddress }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['logItems.destroy', $logItem->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('logItems.show', [$logItem->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('logItems.edit', [$logItem->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
