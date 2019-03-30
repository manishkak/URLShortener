<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UrlShort;
use Validator;

class UrlsController extends Controller
{
    public function short(Request $request){
        /* check if short url already exists
        if already exists, show the short url
        if doesnt exist, create short url, save to db and show it to the user */

        $validator = Validator::make($request->all(), array(
            'url' => 'required|url'
        )); // validate submitted url

        if($validator->fails()){
            return redirect('/short')->withInput()->withErrors($validator);
        }
        else{
            // Eloquent will use parameter binding behind the scenes
            // Laravel provides it out of the box
            $url = UrlShort::where('url', $request->url)->first();
            if($url === NULL){
                $short = $this->generateShortUrl();
                UrlShort::create([
                    'url' => $request->url,
                    'short' => $short
                ]);
                $url = UrlShort::where('url', $request->url)->first();
            }
            return view('url.display')->with('url', $url);
        }
    }

    public function generateShortUrl(){
        // generate random str, return if exists in table 
        $result = substr(md5(rand(1000,9999)), 0, 5);
        $data = UrlShort::where('short', $result)->first();
        if($data != NULL){
            $this->generateShortUrl();
        }

        return $result;
    }

    public function show($id)
    {
        // search by short url and return
        $url = UrlShort::where('short', $id)->first();
        return redirect($url->url);
    }
}
