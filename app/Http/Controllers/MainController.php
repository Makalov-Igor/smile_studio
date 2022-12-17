<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Review;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $employees = Employee::all();
        $reviews = Review::query()->orderByDesc('created_at')->limit(10)->get();
        return view('main',['employees'=>$employees, 'reviews'=>$reviews]);
    }
}
