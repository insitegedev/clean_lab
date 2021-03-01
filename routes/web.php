<?php

use App\Http\Controllers\Admin\DictionaryController;
use App\Http\Controllers\Admin\LocalizationController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ServiceController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\VacancyController;
use App\Http\Controllers\Front\AboutController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => ['setlocale']
], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', function () {
            return redirect('/admin/login');
        });
        Route::get('login', [AuthController::class, 'loginView'])->name('login-view');
        Route::post('login', [AuthController::class, 'login'])->name('login');
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');

        Route::middleware(['auth', 'can:isAdmin'])->group(function () {

            // Localizations
            Route::resource('localizations', LocalizationController::class)
                ->name('index', 'localizationIndex')
                ->name('create', 'localizationCreateView')
                ->name('store', 'localizationCreate')
                ->name('edit', 'localizationEditView')
                ->name('update', 'localizationUpdate')
                ->name('destroy', 'localizationDestroy')
                ->name('show', 'localizationShow');



            // Language
            Route::resource('languages', DictionaryController::class)
                ->name('index', 'DictionaryIndex')
                ->name('store', 'DictionaryStore')
                ->name('create', 'DictionaryCreate')
                ->name('show', 'DictionaryShow')
                ->name('edit', 'DictionaryEdit')
                ->name('update', 'DictionaryUpdate')
                ->name('destroy', 'DictionaryDestroy');

            Route::get('language/rescan',[DictionaryController::class,'rescan'])->name('languageScanner');

            // News
            Route::resource('news', NewsController::class)
                ->name('index', 'NewsIndex')
                ->name('store', 'NewsStore')
                ->name('show', 'NewsShow')
                ->name('create', 'NewsCreate')
                ->name('edit', 'NewsEdit')
                ->name('update', 'NewsUpdate')
                ->name('destroy', 'NewsDestroy');

            // Products
            Route::resource('products', ProductController::class)
                ->name('index', 'productIndex')
                ->name('create', 'productCreateView')
                ->name('store', 'productCreate')
                ->name('edit', 'productEditView')
                ->name('update', 'productUpdate')
                ->name('destroy', 'productDestroy')
                ->name('show', 'productShow');



            // Pages
            Route::resource('pages', PageController::class)->except('destroy')
                ->name('index', 'pageIndex')
                ->name('create', 'pageCreateView')
                ->name('store', 'pageCreate')
                ->name('edit', 'pageEditView')
                ->name('update', 'pageUpdate')
                ->name('show', 'pageShow');


            // Settings
            Route::resource('settings', SettingController::class)->except('destroy')
                ->name('index', 'settingIndex')
                ->name('create', 'settingCreateView')
                ->name('store', 'settingCreate')
                ->name('edit', 'settingEditView')
                ->name('update', 'settingUpdate')
                ->name('show', 'settingShow');
        });
    });

    Route::get('/',[HomeController::class,'index'])->name('homePage');
    Route::match(['get','post'],'/contact',[ContactController::class,'index'])->name('contactPage');
    Route::get('/services',[ServiceController::class,'index'])->name('servicePage');
    Route::get('/services/{slug}',[ServiceController::class,'show'])->name('serviceDetailPage');
    Route::get('/about',[AboutController::class,'index'])->name('aboutPage');
    Route::get('/vacancy',[VacancyController::class,'index'])->name('vacancyPage');




});

