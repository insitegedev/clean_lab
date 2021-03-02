<?php

namespace App\Http\Controllers\Front;

use App\Models\Localization;
use App\Models\Page;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class ServiceController extends FrontController
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
        $page = Page::where(['status' => true, 'slug' => 'services'])->first();
        if (!$page) {
            return abort('404');
        }

        $products = Product::where('status',true)->orderBy('position', 'ASC')->get();
        return view('front.service.services', [
            'products' => $products
        ]);
    }

    /**
     * Show specified view.
     *
     * @param string $lang
     * @param string $slug
     *
     * @return Application|Factory|View|Response
     */
    public function show(string $lang, string $slug)
    {
        $page = Page::where(['status' => true, 'slug' => 'service-detail'])->first();
        if (!$page) {
            return abort('404');
        }
        $product = Product::where(['status' => true,'slug' => $slug])->first();

        return view('front.service.service-details',[
            'product' => $product
        ]);
    }
}
