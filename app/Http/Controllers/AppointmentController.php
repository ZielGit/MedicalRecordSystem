<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function create()
    {
        return view('front_office.user.appointment.create');
    }
}
