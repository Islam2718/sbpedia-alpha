<?php

namespace Modules\News\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
// swit alerts 
use RealRashid\SweetAlert\Facades\Alert;
// model 
use Modules\Settings\Entities\Language;
use Modules\News\Entities\NewsCategory;
use Illuminate\Support\Facades\DB;

class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data = array(
            'languageArray' => Language::all(),
            // 'newsCategoryArray' => NewsCategory::query()->select('news_categories.*', 'languages.*')
            // ->join('languages', 'news_categories.language_id', '=', 'languages.id')
            // ->get(),

            // 'newCat' => DB::table('news_categories')
            // ->select('news_categories.name', 'languages.name')
            // ->join('languages', 'languages.id', '=', 'news_categories.language_id')
            // ->get()

            // 'newsCategoryArray' => NewsCategory::join(
            //     'news_categories as a', 
            //     'a.language_id', 
            //     '=', 'languages.id')->get(['a.*', 'languages.name'])
            // 'languageInfo' => Language::where('id', NewsCategory.language )->first()
        );
        dd($data); die(); 
        return view('news::news-category.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $data = array(
            'languageArray' => Language::all(),
            'newsCategoryArray' => NewsCategory::all()
        );        
        return view('news::news-category.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
        $newsCategoryModel = new NewsCategory();
        $newsCategoryModel->parent_id = $request->parent_id;
        $newsCategoryModel->language_id = $request->language_id;
        $newsCategoryModel->name = $request->name;
        $newsCategoryModel->alias = $request->alias;
        $newsCategoryModel->description = $request->description;
        $newsCategoryModel->status = $request->status;
        $newsCategoryModel->order = $request->order;

        $newsCategoryModel->save();
        Alert::success('Category', 'Successfully Saved !');
        return redirect()->route('news.category-list');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('news::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('news::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
