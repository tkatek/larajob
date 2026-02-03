<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

Route::get('/', function () {
    return view('Listing',[
        'listings' => Listing::all()
    ]);
});

Route::get('/listings/{listing}', function (App\Models\Listing $listing) {
    return view('show', [
        'listing' => $listing
    ]);
});
