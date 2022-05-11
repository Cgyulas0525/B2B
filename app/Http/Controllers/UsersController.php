<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsersRequest;
use App\Http\Requests\UpdateUsersRequest;
use App\Repositories\UsersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;
use DB;
use DataTables;
use myUser;
use utilityClass;
use Mail;
use logClass;

use App\Models\Users;
use App\Models\Employee;
use App\Models\CustomerContact;

class UsersController extends AppBaseController
{
    /** @var  UsersRepository */
    private $usersRepository;

    public function __construct(UsersRepository $usersRepo)
    {
        $this->usersRepository = $usersRepo;
    }

    public function dwData($data)
    {
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('customerName', function($data) { return $data->customerName; })
            ->addColumn('rgnev', function($data) { return $data->rgnev; })
            ->addColumn('B2BLoginCount', function($data) { return $data->B2BLoginCount; })
            ->addColumn('CustomerAddressName', function($data) { return $data->CustomerAddressName; })
            ->addColumn('TransportModeName', function($data) { return $data->TransportModeName; })
            ->addColumn('action', function($row){
                  $btn = '<a href="' . route('users.edit', [$row->id]) . '"
                             class="edit btn btn-success btn-sm editProduct" title="Módosítás"><i class="fa fa-paint-brush"></i></a>';
                  $btn = $btn.'<a href="' . route('users.destroy', [$row->id]) . '"
                             class="btn btn-danger btn-sm deleteProduct" title="Törlés"><i class="fa fa-trash"></i></a>';
                  return $btn;
              })
            ->addColumn('kep', function($row){
                $image = '<img class="brand-image elevation-3 picture-small" src="data:image/png;base64,' . utilityClass::echoPicture(utilityClass::getEmployeePicture($row->id)) .'">';
                return $image;
            })
            ->rawColumns(['action', 'kep'])
            ->make(true);
    }

    /**
     * Display a listing of the Users.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if( myUser::check() ){

            if ($request->ajax()) {

                $data = Users::all();
                return $this->dwData($data);

            }

            return view('users.index');
        }
    }

    /**
     * Display a listing of the Users.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function B2BUserIndex(Request $request)
    {
        if( myUser::check() ){

            if ($request->ajax()) {

                $data = Users::where('rendszergazda', '>', 0)->where('id', '>', 0)->get();
                return $this->dwData($data);

            }

            return view('users.index');
        }
    }

    /**
     * Display a listing of the Users.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function B2BCustomerUserIndex(Request $request)
    {
        if( myUser::check() ){

            if ($request->ajax()) {

                $data = Users::where('rendszergazda', '=', 0)->get();
                return $this->dwData($data);

            }

            return view('users.B2BCustomerUserIndex');
        }
    }

    /**
     * Show the form for creating a new Users.
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Show the form for creating a new Users.
     *
     * @return Response
     */
    public function B2BCustomerUserCreate()
    {
        return view('users.B2BCustomerUserCreate');
    }

    /**
     * Store a newly created Users in storage.
     *
     * @param CreateUsersRequest $request
     *
     * @return Response
     */
    public function store(CreateUsersRequest $request)
    {
        $input = $request->all();

        $user = new Users;

        if ( !empty($input["employee_id"]) || !empty($input["customercontact_id"]) ) {
            if (!empty($input["employee_id"])) {
                $user->name = Employee::find($input["employee_id"])->Name;
                $user->rendszergazda = $input["rendszergazda"] - 1;
                $user->password = md5('PASSWORD'. $input["employee_id"]);
                $user->megjegyzes = 'PASSWORD'. $input["employee_id"];
                $user->employee_id = $input["employee_id"];
                $user->customercontact_id = NULL;
                $user->CustomerAddress = NULL;
                $user->TransportMode = NULL;
            }

            if (!empty($input["customercontact_id"])) {
                $user->name = CustomerContact::find($input["customercontact_id"])->Name;
                $user->rendszergazda = 0;
                $user->password = md5('PASSWORD'. $input["customercontact_id"]);
                $user->megjegyzes = 'PASSWORD'. $input["customercontact_id"];
                $user->employee_id = NULL;
                $user->customercontact_id = $input["customercontact_id"];
                $user->CustomerAddress = $input["CustomerAddress"];
                $user->TransportMode = $input["TransportMode"];
            }

            $user->email = $input["email"];
            $user->save();

            $data["email"] = $user->email;
            $data["title"] = $user->name.' B2B belépési engedély!';
            $data["body"] = 'Ön számára hozzáférést engedélyeztek a Symbol Tech Ügyviteli rendszer B2B moduljához. Az Ön belépési adatai:';
            $data["name"] = 'Név: ' . $user->name;
            $data["password"] = 'Jelszó: ' . $user->password;
            $data['bodyEnd'] = 'Az első belépéskor kérem változatassa meg a jelszavát!';
            $data["ugyfel"] = $user->name;
            $data["datum"] = date('Y-m-d');

            Mail::send('emails.newUserEmail', $data, function($message) use($data) {
                $message->to($data["email"], $data["email"])
                    ->subject($data["title"]);
            });

            logClass::insertDeleteRecord( 5, "Users", $user->id);

        } else {
            Flash::error('Nem adott meg felhasználót!')->important();
            return back();
        }

        if ( myUser::user()->name === "administrator" ) {
            return redirect(route('myLogin'));
        } else {
            if (!empty($user->employee_id)) {
                return redirect(route('B2BUserIndex'));
            }
            if (!empty($user->customercontact_id)) {
                return redirect(route('B2BCustomerUserIndex'));
            }
        }
    }

    /**
     * Display the specified Users.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            return redirect(route('users.index'));
        }

        return view('users.show')->with('users', $users);
    }

    /**
     * Display the specified Users.
     *
     * @param int $id
     *
     * @return Response
     */
    public function profil($id)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            return redirect(route('users.index'));
        }

        return view('users.profil')->with('users', $users);
    }

    /**
     * Show the form for editing the specified Users.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            return redirect(route('users.index'));
        }

        return view('users.edit')->with('users', $users);
    }

    /**
     * Update the specified Users in storage.
     *
     * @param int $id
     * @param UpdateUsersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsersRequest $request)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            return redirect(route('users.index'));
        }

        $input = $request->all();
        if ($users->rendszergazda != 0) {
            $input['rendszergazda'] = $request->rendszergazda - 1;
        }

        $modifiedUsers = $this->usersRepository->update($input, $id);

        logClass::modifyRecord( "Users", $users, $modifiedUsers);

        if (!empty($modifiedUsers->employee_id)) {
            return redirect(route('B2BUserIndex'));
        }
        if (!empty($modifiedUsers->customercontact_id)) {
            return redirect(route('B2BCustomerUserIndex'));
        }

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified Users from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            return redirect(route('users.index'));
        }

        $rendszergazda = $users->rendszergazda;
        $this->usersRepository->delete($id);

        logClass::insertDeleteRecord( 5, "Users", $users->id);

        if ( $rendszergazda == 0) {
            return redirect(route('B2BCustomerUserIndexs'));
        } else {
            return redirect(route('users.index'));
        }
    }

    public function belsoUserDestroy($id)
    {
        $user = Users::find($id);
        $user->delete();

        logClass::insertDeleteRecord( 7, "Users", $user->id);

        return redirect(route('users.index'));
    }

    public function B2BUserDestroy($id)
    {
        $user = Users::find($id);
        $user->delete();

        logClass::insertDeleteRecord( 7, "Users", $user->id);

        return redirect(route('B2BCustomerUserIndex'));
    }
}
