<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourDetailController extends Controller
{
    public function tourTurkey()
    {
        return view('components/tour-detail/tour-turkey');
    }
    public function rajaAmpat()
    {
        return view('components/tour-detail/raja-ampat');
    }
}
