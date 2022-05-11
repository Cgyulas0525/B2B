<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShoppingCartRequest;
use App\Http\Requests\UpdateShoppingCartRequest;
use App\Repositories\ShoppingCartRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;
use DB;
use DataTables;
use myUser;
use utilityClass;
use logClass;

use App\Models\ShoppingCart;
use App\Models\ShoppingCartDetail;
use shoppingCartClass;
use Illuminate\Support\Carbon;

class ShoppingCartController extends AppBaseController
{
    /** @var  ShoppingCartRepository */
    private $shoppingCartRepository;

    public function __construct(ShoppingCartRepository $shoppingCartRepo)
    {
        $this->shoppingCartRepository = $shoppingCartRepo;
    }

    public function dwData($data)
    {
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('DetailNumber', function($data) { return $data->DetailNumber; })
            ->addColumn('CustomerName', function($data) { return $data->CustomerName; })
            ->addColumn('CustomerAddressName', function($data) { return $data->CustomerAddressName; })
            ->addColumn('CustomerContactName', function($data) { return $data->CustomerContactName; })
            ->addColumn('PaymentMethodName', function($data) { return $data->PaymentMethodName; })
            ->addColumn('CurrencyName', function($data) { return $data->CurrencyName; })
            ->addColumn('CustomerContractVoucherNumber', function($data) { return $data->CustomerContractVoucherNumber; })
            ->addColumn('TransportModeName', function($data) { return $data->TransportModeName; })
            ->addColumn('CustomerOrderVoucherNumber', function($data) { return $data->CustomerOrderVoucherNumber; })
            ->addColumn('action', function($row){
                  $btn = '';
                  if ($row->Opened == 0) {
                      $btn = '<a href="' . route('shoppingCarts.edit', [$row->Id]) . '"
                                 class="edit btn btn-success btn-sm editProduct" title="Módosítás"><i class="fa fa-paint-brush"></i></a>';
                      $btn = $btn.'<a href="' . route('shoppingCarts.destroy', [$row->Id]) . '"
                                 class="btn btn-danger btn-sm deleteProduct" title="Törlés"><i class="fa fa-trash"></i></a>';
                      $btn = $btn.'<a href="' . route('shoppingCartDetailCreate', [$row->Id]) . '"
                                 class="btn btn-warning btn-sm deleteProduct" title="Tételek"><i class="far fa-list-alt"></i></a>';
                  }
                  return $btn;
              })
              ->rawColumns(['action'])
              ->make(true);
    }


    /**
     * Display a listing of the ShoppingCart.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if( myUser::check() ){

            if ($request->ajax()) {

                $data = ShoppingCart::all();
                return $this->dwData($data);

            }

            return view('shopping_carts.index');
        }
    }

    /**
     * Show the form for creating a new ShoppingCart.
     *
     * @return Response
     */
    public function create()
    {
        return view('shopping_carts.create');
    }

    /**
     * Store a newly created ShoppingCart in storage.
     *
     * @param CreateShoppingCartRequest $request
     *
     * @return Response
     */
    public function store(CreateShoppingCartRequest $request)
    {
        $input = $request->all();

        $shoppingCart = new ShoppingCart;

        $shoppingCart->VoucherNumber    = $input['VoucherNumber'];
        $shoppingCart->Customer         = myUser::user()->customerId;
        $shoppingCart->CustomerAddress  = $input['CustomerAddress'];
        $shoppingCart->CustomerContact  = myUser::user()->customercontact_id;
        $shoppingCart->VoucherNumber    = $input['VoucherNumber'];
        $shoppingCart->VoucherDate      = $input['VoucherDate'];
        $shoppingCart->DeliveryDate     = $input['DeliveryDate'];
        $shoppingCart->PaymentMethod    = $input['PaymentMethod'];
        $shoppingCart->Currency         = utilityClass::currencyId('HUF');
        $shoppingCart->CurrencyRate     = 1;
        $shoppingCart->TransportMode    = $input['TransportMode'];
        $shoppingCart->CustomerContract = NULL;
        $shoppingCart->DepositValue     = $input['DepositValue'];
        $shoppingCart->DepositPercent   = $input['DepositPercent'];
        $shoppingCart->NetValue         = $input['NetValue'];
        $shoppingCart->GrossValue       = $input['GrossValue'];
        $shoppingCart->VatValue         = $input['VatValue'];
        $shoppingCart->Comment          = $input['Comment'];
        $shoppingCart->Opened           = 0;
        $shoppingCart->CustomerOrder    = NULL;

        $shoppingCart->save();

        logClass::insertDeleteRecord( 5, "ShoppingCart", $shoppingCart->Id);

        return redirect(route('shoppingCarts.index'));
    }

    /**
     * Display the specified ShoppingCart.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $shoppingCart = $this->shoppingCartRepository->find($id);

        if (empty($shoppingCart)) {
            return redirect(route('shoppingCarts.index'));
        }

        return view('shopping_carts.show')->with('shoppingCart', $shoppingCart);
    }

    /**
     * Show the form for editing the specified ShoppingCart.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $shoppingCart = $this->shoppingCartRepository->find($id);

        if (empty($shoppingCart)) {
            return redirect(route('shoppingCarts.index'));
        }

        return view('shopping_carts.edit')->with('shoppingCart', $shoppingCart);
    }

    /**
     * Show the form for editing the specified ShoppingCart.
     *
     * @param int $id
     *
     * @return Response
     */
    public function editShoppingCart()
    {
        $shoppingCart = shoppingCartClass::openedShoppingCart(myUser::user()->customercontact_id);

        if (empty($shoppingCart)) {
            return view('shopping_carts.create');
        }

        return view('shopping_carts.edit')->with('shoppingCart', $shoppingCart);
    }

    /**
     * Update the specified ShoppingCart in storage.
     *
     * @param int $id
     * @param UpdateShoppingCartRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateShoppingCartRequest $request)
    {
        $shoppingCart = $this->shoppingCartRepository->find($id);

        if (empty($shoppingCart)) {
            return redirect(route('shoppingCarts.index'));
        }

        $input = $request->all();

        $modifiedShoppingCart = DB::table('ShoppingCart')
            ->where('Id', $id)
            ->update([
                'VoucherNumber'    => $input['VoucherNumber'],
                'Customer'         => $input['Customer'],
                'CustomerAddress'  => $input['CustomerAddress'],
                'CustomerContact'  => $input['CustomerContact'],
                'VoucherNumber'    => $input['VoucherNumber'],
                'VoucherDate'      => $input['VoucherDate'],
                'DeliveryDate'     => $input['DeliveryDate'],
                'PaymentMethod'    => $input['PaymentMethod'],
                'Currency'         => $input['Currency'],
                'CurrencyRate'     => $input['CurrencyRate'],
                'TransportMode'    => $input['TransportMode'],
                'CustomerContract' => $input['CustomerContract'],
                'DepositValue'     => $input['DepositValue'],
                'DepositPercent'   => $input['DepositPercent'],
                'NetValue'         => $input['NetValue'],
                'GrossValue'       => $input['GrossValue'],
                'VatValue'         => $input['VatValue'],
                'Comment'          => $input['Comment'],
                'Opened'           => $input['Opened'],
                'CustomerOrder'    => $input['CustomerOrder'],
                'updated_at'       => \Carbon\Carbon::now()
            ]);

        logClass::modifyRecord( "ShoppingCart", $shoppingCart, $modifiedShoppingCart);

        return redirect(route('shoppingCarts.index'));
    }

    /**
     * Remove the specified ShoppingCart from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $shoppingCart = $this->shoppingCartRepository->find($id);

        if (empty($shoppingCart)) {
            return redirect(route('shoppingCarts.index'));
        }

        $this->shoppingCartRepository->delete($id);

        return redirect(route('shoppingCarts.index'));
    }

    public function cartDestroy($id)
    {

        $shoppingCart = $this->shoppingCartRepository->find($id);

        $details = ShoppingCartDetail::where('ShoppingCart', $id)->get();

        foreach ( $details as $detail ) {
            DB::table('ShoppingCartDetail')
                ->where('Id', $detail->Id)
                ->update([
                    'deleted_at'       => \Carbon\Carbon::now()
                ]);

            logClass::insertDeleteRecord( 5, "ShoppingCartDetail", $detail->Id);

        }

        DB::table('ShoppingCart')
            ->where('Id', $id)
            ->update([
                'deleted_at'       => \Carbon\Carbon::now()
            ]);

        logClass::insertDeleteRecord( 5, "ShoppingCart", $shoppingCart->Id);

        return redirect(route('shoppingCarts.index'));

    }
}
