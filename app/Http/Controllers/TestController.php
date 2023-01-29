<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Review;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        dump(Review::query()->orderByDesc('created_at')->limit(10)->get());
    }
}
