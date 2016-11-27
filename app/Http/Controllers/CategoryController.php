<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CategoriesRepository as Category;
class CategoryController extends Controller
{
    private $category;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Category $category)
    {
        $this->middleware('auth');
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->getPaginatedList();
        return view('console/category/index')->with(compact('categories'));
    }

    public function create()
    {
        return view('console/category/create');
    }

    public function store(Request $request)
    {
        $this->category->create($request->all());
        return redirect('/console/categories');
    }

    public function edit($id)
    {
        $category = $this->category->find($id);
        return view('console/category/edit')->with(compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = $this->category->find($id);
        $this->category->updateRich($request->all(), $category->id);
        return redirect('/console/categories');
    }

    public function destroy($id)
    {
        $this->category->delete($id);
        return redirect()->back();
    }
}
