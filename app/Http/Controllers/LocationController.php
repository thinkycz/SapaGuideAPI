<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddLocationStep2FormRequest;
use App\Http\Tools\Flash;
use App\Location;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddLocationFormRequest;

class LocationController extends Controller
{
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
     * @param  Request  $request
     * @return Response
     */
    public function store(AddLocationStep2FormRequest $request, Flash $flash)
    {
        \Auth::user()->location()->create($request->all());

        $flash->success('Dekujeme!', 'Vas zaznam byl odeslan ke zpracovani.');

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
        $location = Location::find($id);

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
        return view('location.edit');
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
    public function destroy($id)
    {
        //
    }
}
