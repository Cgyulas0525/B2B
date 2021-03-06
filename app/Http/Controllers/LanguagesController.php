<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLanguagesRequest;
use App\Http\Requests\UpdateLanguagesRequest;
use App\Repositories\LanguagesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;
use DB;
use DataTables;

use App\Models\Languages;
use App\Models\Translations;
use myUser;
use Alert;
use URL;
use App\Classes\langClass;
use App\Classes\SWAlertClass;

class LanguagesController extends AppBaseController
{
    /** @var  LanguagesRepository */
    private $languagesRepository;

    public function __construct(LanguagesRepository $languagesRepo)
    {
        $this->languagesRepository = $languagesRepo;
    }

    public function dwData($data)
    {
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('DetailNumber', function($data) { return $data->DetailNumber; })
            ->addColumn('TranslatedNumber', function($data) { return $data->TranslatedNumber; })
            ->addColumn('UntranslatedNumber', function($data) { return $data->UntranslatedNumber; })
            ->addColumn('action', function($row){
                $btn = '';
                if ($row->DetailNumber == 0) {
                    $btn = $btn.'<a href="' . route('beforeOn', [$row->id]) . '"
                             class="edit btn btn-success btn-sm editProduct" title="Bekapcsolás"><i class="fas fa-toggle-on"></i></a>';
                }
                if ($row->DetailNumber > 0 && $row->TranslatedNumber == 0) {
                    $btn = $btn.'<a href="' . route('beforeOff', [$row->id]) . '"
                             class="edit btn btn-danger btn-sm editProduct" title="Kikapcsolás"><i class="fas fa-toggle-on"></i></a>';
                }
                if ($row->DetailNumber > 0 && $row->shortname != 'hu') {
                    $btn = $btn.'<a href="' . route('languages.edit', [$row->id]) . '"
                             class="btn btn-primary btn-sm deleteProduct" title="Fordítás"><i class="fas fa-sign-language"></i></a>';
                }
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * A nyelv bekapcsolás funkció
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function languageOn($id)
    {
        $language = Languages::find($id);
        $translations = Translations::where('language', 'hu')->get();
        foreach ($translations as $translation) {
            Translations::insert([
                'huname'   => $translation->huname,
                'name'     => $translation->huname,
                'language' => $language->shortname
            ]);
        }
        return redirect(route('languages.index'));
    }

    /**
     * A nyelv kikapcsolás funkció
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function languageOff($id)
    {
        Translations::where('language', function($query) use ($id){
            $query->from('languages')->select('shortname')->find($id);
        })->delete();

        return redirect(route('languages.index'));
    }


    /**
     * Display a listing of the Languages.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if( myUser::check() ){

            if ($request->ajax()) {

                $data = Languages::all();
                return $this->dwData($data);

            }

            return view('languages.index');
        }
    }

    /**
     * Show the form for creating a new Languages.
     *
     * @return Response
     */
    public function create()
    {
        return view('languages.create');
    }

    /**
     * Store a newly created Languages in storage.
     *
     * @param CreateLanguagesRequest $request
     *
     * @return Response
     */
    public function store(CreateLanguagesRequest $request)
    {
        $input = $request->all();

        $languages = $this->languagesRepository->create($input);

        Flash::success('Languages saved successfully.');

        return redirect(route('languages.index'));
    }

    /**
     * Display the specified Languages.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $languages = $this->languagesRepository->find($id);

        if (empty($languages)) {
            Flash::error('Languages not found');

            return redirect(route('languages.index'));
        }

        return view('languages.show')->with('languages', $languages);
    }

    /**
     * Kérdés a nyelv bekapcslása elött
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function beforeOn($id) {
        SWAlertClass::choice($id, 'Biztos, hogy be akarja kapcsolni a nyelvet?', '/languages', 'Kilép', '/languageOn/'.$id, 'Bekapcsol');
        return view('languages.show')->with('languages', $this->languagesRepository->find($id));
    }

    /**
     * Kérdés a nyelv kikapcsolása elött
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function beforeOff($id) {
        SWAlertClass::choice($id, 'Biztos, hogy ki akarja kapcsolni a nyelvet?', '/languages', 'Kilép', '/languageOff/'.$id, 'Kikapcsol');
        return view('languages.show')->with('languages', $this->languagesRepository->find($id));
    }

    /**
     * Show the form for editing the specified Languages.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $languages = $this->languagesRepository->find($id);
        if (empty($languages)) {
            Flash::error('Languages not found');

            return redirect(route('languages.index'));
        }

        return view('languages.edit')->with('languages', $languages);
    }

    /**
     * Update the specified Languages in storage.
     *
     * @param int $id
     * @param UpdateLanguagesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLanguagesRequest $request)
    {
        $languages = $this->languagesRepository->find($id);

        if (empty($languages)) {
            Flash::error('Languages not found');

            return redirect(route('languages.index'));
        }

        $languages = $this->languagesRepository->update($request->all(), $id);

        Flash::success('Languages updated successfully.');

        return redirect(route('languages.index'));
    }

    /**
     * Remove the specified Languages from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $languages = $this->languagesRepository->find($id);

        if (empty($languages)) {
            Flash::error('Languages not found');

            return redirect(route('languages.index'));
        }

        $this->languagesRepository->delete($id);

        Flash::success('Languages deleted successfully.');

        return redirect(route('languages.index'));
    }
}
