<?php

namespace App\Http\Controllers\Front;

use App\Models\Localization;
use App\Models\Setting;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Response;

class VacancyController extends FrontController
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
        $localization = Localization::getIdByName($lang);
        $data = Setting::with(['language','availableLanguage'])->get();
        return view('front.vacancy.vacancy', ['phone' => $phone,'address' => $address,'instagram' => $instagram,'facebook' => $facebook , 'email' => $email]);
    }
}
