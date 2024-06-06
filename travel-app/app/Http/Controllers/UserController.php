<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;


// Define the route for the homepage
Route::get('/', function () {
    return view('homepage');
});


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $users=User::all();
        return view('users.index') ->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     */



     public function create(): View
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        User::create($input);
        return redirect('users')->with('flash_message', 'User Added!'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $users=User::find($id);
        return view('users.show') -> with('users',$users);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $users=User::find($id);
        return view('users.edit') -> with('users',$users);
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
