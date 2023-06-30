<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vedmant\FeedReader\FeedReader;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function getRss(Request $request, FeedReader $feedReader)
    {
        try {
            $request->validate([
                'link' => 'required|url',
            ]);
        } catch (\Exception $e) {
            return response([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }

        $f = $feedReader->read($request->input('link'));

        $rssData = [
            'title' => $f->get_title()
        ];

        if ($items = $f->get_items()) {
            $rssData['small_title'] = $items[0]->get_title();
            $rssData['content'] = $items[0]->get_content();
        }

        return response([
            'success' => true,
            'rssData' => $rssData
        ]);
    }
}
