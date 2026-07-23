<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function services(): View
    {
        return view('pages.services', [
            'categories' => config('salon.categories'),
            'faqs' => config('salon.faqs'),
        ]);
    }

    public function packages(): View
    {
        return view('pages.packages', [
            'packages' => config('salon.packages'),
        ]);
    }

    public function contact(): View
    {
        return view('pages.contact', [
            'services' => config('salon.categories'),
        ]);
    }
}
