<?php
/**
 *  app/Http/Controllers/Front/HomeController.php
 *
 * User:
 * Date-Time: 23.02.21
 * Time: 10:23
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\Controllers\Front;

use App\Models\Page;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class HomeController extends FrontController
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
        $page = Page::where(['status' => true, 'slug' => 'home'])->first();
        if (!$page) {
            return abort('404');
        }

        // Services
        $products = Product::where('status',true)->orderBy('position', 'ASC')->get();

        // Sections
        $whyUs = Page::where(['status' => true, 'slug' => 'why_us'])->first();
        $howWorks = Page::where(['status' => true, 'slug' => 'how_works'])->first();
        $cleanLub = Page::where(['status' => true, 'slug' => 'clean_lub'])->first();

        return view('front.home.index', [
                'page' => $page,
                'products' => $products,
                'whyUs' => $whyUs,
                'howWorks' => $howWorks,
                'cleanLub' => $cleanLub
            ]
        );
    }
}
