<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserData;

class AdminController extends Controller
{
    function index(){
        return view('Admin.tableproject ');
    }

}
