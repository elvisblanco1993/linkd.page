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
            return view('public', [
                'page' => $page,
                'pagebg' => ($page->bgtype == 'color') ? "background-color:" . $page->bgvalue : "background-image: url(".asset('storage/backgrounds/'.$page->bgvalue).")",
            ]);
        } else {
            return redirect()->to('/');
        }
    }
}
