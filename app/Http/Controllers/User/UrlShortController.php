<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ShortenedUrl;
use App\Models\User;
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

    public function redirect($shortUrl)
    {
        $url = ShortenedUrl::where('short_url', $shortUrl)->firstOrFail();
        $url->increment('click_count');

        return redirect($url->original_url);
    }

    public function allShortedData(){
        // $shorURLs = ShortenedUrl::all();
        $id = auth()->user()->id;
        $user = User::find($id);
        $shortURLs = $user->shortUrls;

        return view('user.pages.shortlink.index', compact('shortURLs'));



    }
}
