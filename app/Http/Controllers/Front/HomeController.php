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

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
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
        return view('front.home.index');
    }
}
