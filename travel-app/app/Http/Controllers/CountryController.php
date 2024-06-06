<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Country;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;


// Define the route for the homepage
Route::get('/', function () {
    return view('homepage');
});


class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $countrys=Country::all();
        return view('countries.index') ->with('countrys',$countrys);
    }

    /**
     * Show the form for creating a new resource.
     */



     public function create(): View
    {
        return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Country::create($input);
        return redirect('countries')->with('flash_message', 'Country Added!'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $country=Country::find($id);
        return view('countries.show') -> with('countrys',$country);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $country=Country::find($id);
        return view('countries.edit') -> with('countrys',$country);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $country = Country::find($id);
        $input = $request->all();
        $country->update($input);
        return redirect('countries')->with('flash_message', 'Country Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Country::destroy($id);
        return redirect('countries')->with('flash_message', 'Country Deleted!');
    }
}
