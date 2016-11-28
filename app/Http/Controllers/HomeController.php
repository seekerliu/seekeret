<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Repositories\CategoriesRepository as Category;
use App\Repositories\WebsitesRepository as Website;
use App\Repositories\SettingsRepository as Setting;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    private $category;
    private $website;
    private $setting;

    /**
     * WebsiteController constructor.
     * @param Category $category
     * @param Website $website
     */
    public function __construct(Category $category, Website $website, Setting $setting)
    {
        $this->middleware('auth');
        $this->category = $category;
        $this->website = $website;
        $this->setting = $setting;
    }

    /**
     * Show the application dashboard.
     *
     */
    public function index()
    {
        $count['website'] = $this->website->all()->count();
        $count['category'] = $this->category->all()->count();
        return view('console/home')->with(compact('count'));
    }

    public function seo()
    {
        $settings = $this->setting->getList();
        return view('console/setting/seo')->with(compact('settings'));
    }

    public function updateSeo(Request $request)
    {
        $this->setting->batchUpdate($request->all());
        return redirect('console/seo');
    }
}