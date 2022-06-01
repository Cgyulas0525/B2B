<div class="table-responsive">
    <table class="table" id="customerContactFavoriteProducts-table">
        <thead>
            <tr>
                <th>Customercontact Id</th>
        <th>Product Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($customerContactFavoriteProducts as $customerContactFavoriteProduct)
            <tr>
                <td>{{ $customerContactFavoriteProduct->customercontact_id }}</td>
            <td>{{ $customerContactFavoriteProduct->product_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['customerContactFavoriteProducts.destroy', $customerContactFavoriteProduct->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('customerContactFavoriteProducts.show', [$customerContactFavoriteProduct->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('customerContactFavoriteProducts.edit', [$customerContactFavoriteProduct->id]) }}" class='btn btn-default btn-xs'>
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
