<?php
/**
 *  app/Http/View/Composers/SettingComposer.php
 *
 * User: 
 * Date-Time: 23.02.21
 * Time: 17:59
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\View\Composers;

use App\Models\Setting;
use Illuminate\View\View;

class SettingComposer
{

    /**
     * Bind data to the view.
     *
     * @param View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('address', $this->getValue('address'));
    }

    // return available language value
    protected function getValue($key)
    {
        $setting = Setting::where('key', $key)->first();
        if ($setting == null) {
            return '';
        }
        if (count($setting->availableLanguage) < 1) {
            return '';
        }
        return $setting->availableLanguage[0]->value;
    }

}
