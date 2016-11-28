<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CategoriesRepository as Category;

class IndexController extends Controller
{
    private $category;

    /**
     * IndexController constructor.
     * @param $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->getAllWithWebsites();
        return view('index')->with(compact('categories'));
    }
}
