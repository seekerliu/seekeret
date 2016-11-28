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

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    private $category;
    private $website;

    /**
     * WebsiteController constructor.
     * @param Category $category
     * @param Website $website
     */
    public function __construct(Category $category, Website $website)
    {
        $this->middleware('auth');
        $this->category = $category;
        $this->website = $website;
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
}