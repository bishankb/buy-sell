<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Country;
use DB;

class CountryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:view_countries', ['only' => ['index', 'show']]);
        $this->middleware('permission:add_countries', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit_countries', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete_countries', ['only' => 'destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::orderBy('order', 'asc')
                            ->search(request('search-item'))
                            ->paginate(config('product.table_paginate'));
               
        return view('backend.country.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name.*' => 'min:2|required|max:255|unique:countries,name',
            'order.*' => 'required|numeric|unique:countries,order',
        ]);
        $names = request('name');
        $orders = request('order');
        DB::beginTransaction();
        try {
            foreach ($names as $key => $name) {
                Country::create(
                    [
                       'name'        => $name,
                       'order'       => $orders[$key]
                    ]
                );
            }
            DB::commit();
            flash('Country(s) added successfully.')->success();
        } catch (\Exception $exception) {
            DB::rollback();
            logger()->error($exception->getMessage());
            flash('There was some intenal error while adding the country(s).')->error();
        }

        return redirect(route('countries.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = Country::find($id);

        return view('backend.country.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $country = Country::find($id);

        $this->validate($request, [
            'name.*'  => 'min:2|required|max:255|unique:countries,name,'.$country->id,
            'order.*' => 'required|numeric|unique:countries,order,'.$country->id,
        ]);

        try {
            $country->update([
                'name' => request('name')[0],
                'order' => request('order')[0],
            ]);
            flash('Country updated successfully.')->info();
        } catch (\Exception $exception) {
            logger()->error($exception->getMessage());
            flash('There was some intenal error while updating the country.')->error();
        }

        return redirect(route('countries.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::find($id);

        try {
            $country->delete();
            flash('Country deleted successfully.')->error();
        } catch (\Exception $exception) {
            logger()->error($exception->getMessage());
            flash('There was some intenal error while deleting the country.')->error();
        }

        return redirect(route('countries.index'));
    }
}
