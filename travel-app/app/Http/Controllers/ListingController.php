<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Listing;
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
        return view('listings.edit') -> with('listings',$users);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $student = User::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('users')->with('flash_message', 'Student Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        User::destroy($id);
        return redirect('users')->with('flash_message', 'Student Deleted!');
    }
}
