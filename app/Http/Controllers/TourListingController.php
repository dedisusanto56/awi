<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourListingController extends Controller
{
    public function index()
    {
        return view('components/tour-listing');
    }

    public function filter()
    {
        // sementara link nya menuju tour listing
        return view('components/tour-listing');
    }
}
