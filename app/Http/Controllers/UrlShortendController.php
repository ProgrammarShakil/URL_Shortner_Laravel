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
            'click_count' => 5
        ]);

        return view('shortened', compact('shortUrl'));
    }

    public function redirect($shortUrl)
    {
        $url = ShortenedUrl::where('short_url', $shortUrl)->firstOrFail();
        $url->increment('click_count');

        return redirect($url->original_url);
    }

}
