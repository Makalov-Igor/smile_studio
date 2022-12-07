<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $employees = Employee::all();
        return view('main',['employees'=>$employees]);
    }
}
