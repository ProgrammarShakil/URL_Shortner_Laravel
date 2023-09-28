<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ShortenedUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UrlShortController extends Controller
{
    public function shortenForm(){
        return view('user.pages.shortlink.create');
    }

    private function generateShortUrl()
    {
        return Str::random(6);
    }

    public function shorten(Request $request)
    {
        $request->validate([
            'original_url' => 'required|url',
        ]);

        $originalUrl = $request->input('original_url');
        $shortUrl = $this->generateShortUrl();

        ShortenedUrl::create([
            'original_url' => $originalUrl,
            'short_url' => $shortUrl,
            'click_count' => 0,
            'user_id' => auth()->user()->id
        ]);

        return view('user.pages.shortlink.generate_short_link', compact('shortUrl'));
    }

    public function allShortedData(){
        $shorURLs = ShortenedUrl::all();

        return view('user.pages.shortlink.index', compact('shorURLs'));
    }
}
