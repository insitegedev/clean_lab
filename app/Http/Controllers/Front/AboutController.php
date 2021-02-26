<?php

namespace App\Http\Controllers\Front;

use App\Models\Localization;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Response;

class AboutController extends FrontController
{
    /**
     * Show specified view.
     *
     * @param string $lang
     *
     * @return Application|Factory|View|Response
     */
    public function index(string $lang)
    {
        $page = Page::where(['status' => true, 'slug' => 'about-us'])->first();
        if (!$page) {
            return abort('404');
        }

        return view('front.about.about-us',[
            'page' => $page]
        );
    }
}

