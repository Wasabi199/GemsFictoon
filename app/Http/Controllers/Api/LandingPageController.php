<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingPageController extends Controller
{
    public function landingPage(){
        return response()->json([
            'user'=>Auth::user(),
            'Books'=>Book::all()
        ]);
    }
}
