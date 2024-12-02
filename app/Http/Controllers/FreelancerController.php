<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreelancerController extends Controller
{
    function index(){
        return view('Freelancer.freelancer');
    }
}
