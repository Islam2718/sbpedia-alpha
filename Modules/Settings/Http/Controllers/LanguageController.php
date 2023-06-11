<?php
namespace Modules\Settings\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
// swit alerts 
use RealRashid\SweetAlert\Facades\Alert;
// models 
use Modules\Settings\Entities\Language;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        // echo 'language controller'; die(); 
        $data = array(
            'languageArray' => Language::all()
        );

        return view('settings::language.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('settings::language.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
        $languageModel = new Language();
        $languageModel->name = $request->name;
        $languageModel->alias = $request->alias;
        $languageModel->flag = $request->flag;
        $languageModel->description = $request->description;
        $languageModel->status = $request->status;
        $languageModel->is_default = $request->is_default;

        $languageModel->save();        
        Alert::success('New Language', 'Successfully Saved !');
        return redirect()->route('settings.language.create');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    // public function show($id)
    // {
    //     return view('settings::show');
    // }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $data = array(
            'languageByIdArray' => Language::find($id),
        );
        return view('settings::language.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $languageModel = Language::find($id);

        $languageModel->name = $request->name;
        $languageModel->alias = $request->alias;
        $languageModel->flag = $request->flag;
        $languageModel->description = $request->description;
        $languageModel->status = $request->status;
        $languageModel->is_default = $request->is_default;

        $languageModel->save();
        Alert::success('Language', 'Successfully Updated !');
        return redirect()->route('settings.language.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Alert::question('Are You Sure!', 'to Delete this language?');
        $languageModel = Language::find($id);
        $languageModel->delete();
        return redirect()->route('settings.language');
    }
}
