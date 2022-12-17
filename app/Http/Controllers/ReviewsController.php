<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function store(Request $request): string
    {
        Review::create([
            'fullname' => $request->get('user-name'),
            'message' => $request->get('message'),
        ]);
        return __('messages.reviewAdded');
    }
}
