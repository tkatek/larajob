<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('listing', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', 'unique:listings,company'], // يجب أن يكون اسم الشركة فريداً (مثال فقط)
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'], // يجب أن يكون صيغة إيميل
            'tags' => 'required',
            'description' => 'required'
        ]);

        Listing::create($formFields);
        return redirect('/')->with('message', 'Listing created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $listing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        //
    }
}
