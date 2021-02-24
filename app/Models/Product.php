<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
           'slug',
           'status',
           'youtube_url'
    ];
    public function files()
    {
        return $this->morphMany('App\Models\File', 'fileable');
    }
    public function language()
    {
        return $this->hasMany('App\Models\ProductLanguage', 'product_id');
    }
//    public function features()
//    {
//        return $this->hasMany('App\Models\ProductFeatures', 'product_id');
//    }
//    public function answers()
//    {
//        return $this->hasMany('App\Models\ProductAnswers', 'product_id');
//    }

    public function availableLanguage() {
        return $this->language()->where('language_id','=', Localization::getIdByName(app()->getLocale()));
    }
}
