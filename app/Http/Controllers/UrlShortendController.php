<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortenedUrl;
use Illuminate\Support\Str;

class UrlShortendController extends Controller
{

    private function generateShortUrl()
    {
        return Str::random(6);
    }

    public function shortURLFrom(){
        return view('short_url_form');
    }
}
