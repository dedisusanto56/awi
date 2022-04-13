<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function umroh()
    {
        return view('components/activities/umroh');
    }

    public function hikingCamping()
    {
        return view('components/activities/hiking-camping');
    }

    public function jungleSafari()
    {
        return view('components/activities/jungle-safari');
    }

    public function cityTour()
    {
        return view('components/activities/city-tour');
    }

    public function familyFun()
    {
        return view('components/activities/family-fun');
    }
}
