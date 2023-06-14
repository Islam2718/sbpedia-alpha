<?php

namespace Modules\News\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
// swit alerts & Toastr lib includes
use RealRashid\SweetAlert\Facades\Alert;
use Brian2694\Toastr\Facades\Toastr;
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
            'newsCategoryArray' => DB::table('news_categories')
                                ->join('languages', 'news_categories.language_id', '=', 'languages.id')
                                ->select('news_categories.*', 'languages.name as language')
                                ->get()
        );
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
        $request->validate(['name' => ['required', 'regex:/^[^\s]+$/']]);
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
        // Alert::success('Category', 'Successfully Saved !');
        Toastr::success('SUCCESS', 'Category Added successfully',[ "progressBar"=>true, "closeButton"=> true,]);
        return redirect()->route('news.category.create');
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
        
        $data = array(
            'languageArray' => Language::all(),
            'newsCategoryArray' => NewsCategory::all(),
            'newsCategoryArrayById' => NewsCategory::where('id', $id)->first()
        ); 
        return view('news::news-category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        // dd($id); 
        // null and space validation check 
        // $request->validate(['name' => ['required', 'regex:/^[^\s]+$/']]);
        //
        $newsCategoryModel = NewsCategory::find($id);
        // dd($newsCategoryModel);

        $newsCategoryModel->parent_id = $request->parent_id;
        $newsCategoryModel->language_id = $request->language_id;
        $newsCategoryModel->name = $request->name;
        $newsCategoryModel->alias = $request->alias;
        $newsCategoryModel->description = $request->description;
        $newsCategoryModel->status = $request->status;
        $newsCategoryModel->order = $request->order;
        // dd($newsCategoryModel);

        $newsCategoryModel->save();
        // Alert::success('Category', 'Successfully Updated !');
        Toastr::success('SUCCESS', 'Category Updated successfully',[ "progressBar"=>true, "closeButton"=> true,]);
        return redirect()->route('news.category.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Alert::question('Are You Sure!', 'to Delete this language?');
        $newsCategoryModel = NewsCategory::find($id);
        $newsCategoryModel->delete();
        Toastr::success('SUCCESS', '1 Category Deleted',[ "progressBar"=>true, "closeButton"=> true,]);
        return redirect()->route('news.category.list');
    }
}
