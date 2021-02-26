<?php

namespace App\Http\Controllers\Front;

use App\Mail\ContactEmail;
use App\Models\Localization;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class ContactController extends FrontController
{
    /**
     * Show specified view.
     *
     * @param string $lang
     *
     * @return Application|Factory|View|Response
     */
    public function index(string $lang, Request $request)
    {
        $page = Page::where(['status' => true, 'slug' => 'contact-us'])->first();
        if (!$page) {
            return abort('404');
        }
        if ($request->method() == 'POST') {
            $request->validate([
                'first_name' => 'required|string|max:55',
                'email' => 'required|email',
                'phone' => 'required|max:55',
                'last_name' => 'required|max:55',
                'message' => 'required|max:1024'
            ]);

            $data = [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
                'full_name' => $request->first_name . ' ' . $request->last_name,
                'subject' => 'Contact From Site'
            ];

            $mailTo = Setting::where(['key' => 'contact_email'])->first();

            if ($mailTo != null) {
                if (count($mailTo->availableLanguage) > 0) {
                    Mail::to('vitomaxatadze@gmail.com')->send(new ContactEmail($data));
                }
            }

        }
        return view('front.contact.contact-us', ['page' => $page]);
    }
}
