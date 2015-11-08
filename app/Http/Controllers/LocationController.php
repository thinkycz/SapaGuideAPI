<?php

namespace App\Http\Controllers;

use App;
use App\Location;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Tools\Flash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\AddLocationFormRequest;
use App\Http\Requests\AddLocationStep2FormRequest;
use Illuminate\Support\Facades\Redirect;

class LocationController extends Controller
{
    function __construct()
    {
        $this->middleware('auth', [
            'except' => ['index',  'show']
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        Carbon::setLocale('cs');

        $locations = Location::all();

        return view('location.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('location.create');
    }

    public function create2(AddLocationFormRequest $request)
    {
        return view('location.create2', $request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AddLocationStep2FormRequest  $request
     * @return Response
     */
    public function store(AddLocationStep2FormRequest $request, Flash $flash)
    {
        \Auth::user()->location()->create($request->all());

        $flash->success('Děkujeme!', 'Váš záznam byl odeslán ke zpracování.');

        return \Redirect::action('LocationController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $location = Location::findBySlugOrIdOrFail($id);

        return view('location.show', compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $location = Location::findBySlugOrIdOrFail($id);
        return view('location.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id, Flash $flash)
    {
        $location = Location::findBySlugOrId($id);

        if($location)
        {
            $location->delete();
            $flash->success('Smazáno!', 'Váš záznam byl úspěšně smazán.');
            return Response::create(['result' => 'success'], 200);
        }
        else
        {
            $flash->error('Chyba!', 'Při pokusu o smazání nastala chyba.');
            return Response::create(['result' => 'error'], 500);
        }
    }
}
