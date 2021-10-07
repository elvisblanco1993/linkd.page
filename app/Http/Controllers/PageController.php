<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function public($handler)
    {
        $page = Page::where('handler', $handler)->first();

        if (!is_null($page)) {
            $links = Link::where('page_id', $page->id)->orderBy('order')->get();
            $socials = DB::table('social_media_links')->where('page_id', $page->id)->get();
            return view('public', [
                'page' => $page,
                'pagebg' => ($page->bgtype == 'color') ? "background-color:" . $page->bgvalue : "background-image: url(".asset('storage/backgrounds/'.$page->bgvalue).")",
                'links' => $links,
                'socials' => $socials
            ]);
        } else {
            return redirect()->to('/');
        }
    }
}
