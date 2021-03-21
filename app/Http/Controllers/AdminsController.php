<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class AdminsController extends Controller
{
    //
    public function index(){
        return view('admins.index')->with('cars', Car::orderBy('created_at', 'DESC')->simplePaginate(5));
    }
}
