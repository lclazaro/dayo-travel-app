<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Listing;
use App\Models\User;
use App\Models\Listing_type;
use App\Models\Country;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;


// Define the route for the homepage
Route::get('/', function () {
    return view('homepage');
});


class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $listings=Listing::all();
        return view('listings.index') ->with('listings',$listings);
    }

    /**
     * Show the form for creating a new resource.
     */



     public function create(): View
    {
        return view('listings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();

        // Retriveve the foreign key values
        $uid = $request->input('uid');
        $unit_type = $request->input('unit_type');
        $country_code = $request->input('country_code');

        // Make sure that the foreign key exists
        // Check if the foreign keys exist in the database
        if (!User::where('uid', $uid)->exists() || !Listing_type::where('unit_type', $unit_type || !Country::where('country_code', $country_code)->exists())) {
            return redirect()->back()->with('error_message', 'Foreign keys do not exist.');
        }

        $listingData = [
            'uid' => $input['uid'],
            'list_name' => $input['list_name'],
            'unit_type' => $input['unit_type'],
            'barangay' => $input['barangay'],
            'city' => $input['city'],
            'province' => $input['province'],
            'region' => $input['region'],
            'country_code' => $input['country_code']
        ];


        Listing::create($input);
        return redirect('listings')->with('flash_message', 'Listing Added!'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $listings=Listing::find($id);
        return view('listings.show') -> with('listings',$listings);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $listings=Listing::find($id);
        return view('listings.edit') -> with('listings',$listings);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $listings = Listing::find($id);
        $input = $request->all();
        $listings->update($input);
        return redirect('listings')->with('flash_message', 'Listing Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Listing::destroy($id);
        return redirect('listings')->with('flash_message', 'Listing Deleted!');
    }
}
