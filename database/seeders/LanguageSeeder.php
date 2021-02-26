<?php

namespace Database\Seeders;

use App\Models\Dictionary;
use App\Models\Localization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locale = 'en';
        App::setLocale($locale);
        $localization = Localization::where('abbreviation',$locale)->first();
        $files = [
            'pagination',
            'passwords',
            'validation',
            'auth',
            'admin',
            'front',

        ];
        
       foreach ($files as $file) {
        $array = Lang::get($file);
        foreach ($array as $key => $lang) {
            $model = Dictionary::create([
                'key' => $key,
                'module' => $file,
            ]);
            $model->language()->create([
                'language_id' => $localization->id,
                'value' => $lang ?? ''
            ]);
        }
       }
       
          
    }
}
