<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request): string
    {
        \App\Models\Request::create([
            'firstname' => $request->get('user-name'),
            'lastname' => $request->get('last-name'),
            'source' => $request->get('type'),
            'phone' => $request->get('tel'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),
        ]);
        return __('messages.formSubmitted');
    }
}
