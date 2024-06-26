<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Listing_type;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;


// Define the route for the homepage
Route::get('/', function () {
    return view('homepage');
});


class ListingTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $listingtypes=Listing_type::all();
        return view('listingtypes.index') ->with('listingtypes',$listingtypes);
    }

    /**
     * Show the form for creating a new resource.
     */



     public function create(): View
    {
        return view('listingtypes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Listing_type::create($input);
        return redirect('listingtypes')->with('flash_message', 'Listing Type Added!'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $listingtypes=Listing_type::find($id);
        return view('listingtypes.show') -> with('listingtypes',$listingtypes);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $listingtypes=Listing_type::find($id);
        return view('listingtypes.edit') -> with('listingtypes',$listingtypes);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $listingtypes = Listing_type::find($id);
        $input = $request->all();
        $listingtypes->update($input);
        return redirect('listingtypes')->with('flash_message', 'Listing Type Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Listing_type::destroy($id);
        return redirect('listing_types')->with('flash_message', 'Student Deleted!');
    }
}
