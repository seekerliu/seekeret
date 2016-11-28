<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CategoriesRepository as Category;
use App\Repositories\WebsitesRepository as Website;

class WebsiteController extends Controller
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

    public function index()
    {
        $websites = $this->website->getPaginatedList();
        return view('console/website/index')->with(compact('websites'));
    }

    public function create()
    {
        $categories = $this->category->getDropDownList();
        return view('console/website/create')->with(compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->except('logo');
        if ($request->hasFile('photo')) {
            $path = $request->file('logo')->store('logos', 'public');
            $data['logo'] = $path;
        }

        $this->website->create($data);
        return redirect('/console/websites');
    }

    public function edit($id)
    {
        $categories = $this->category->getDropDownList();
        $website = $this->website->find($id);
        return view('console/website/edit')->with(compact('website', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('logo');
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('logos', 'public');
            $data['logo'] = $path;
        }

        $website = $this->website->find($id);
        $this->website->updateRich($data, $website->id);
        return redirect('/console/websites');
    }

    public function destroy($id)
    {
        $this->website->delete($id);
        return redirect()->back();
    }
}
