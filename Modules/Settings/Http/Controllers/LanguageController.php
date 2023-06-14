<?php
namespace Modules\Settings\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
// swit alerts & Toastr lib includes
use RealRashid\SweetAlert\Facades\Alert;
use Brian2694\Toastr\Facades\Toastr;
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
        // null and space validation check 
        $request->validate(['name' => ['required', 'regex:/^\S*$/u']]);
        //
        $languageModel = new Language();
        $languageModel->name = $request->name;
        $languageModel->alias = $request->alias;
        $languageModel->flag = $request->flag;
        $languageModel->description = $request->description;
        $languageModel->status = $request->status;
        $languageModel->is_default = $request->is_default;

        if($languageModel->save()){
            // Alert::success('New Language', 'Successfully Saved !');        
            Toastr::success('Successfully', 'Added successfully',[ "progressBar"=>true, "closeButton"=> true,]);
        }else{
            // Alert::success('New Language', 'Successfully Saved !');        
            Toastr::error('ERROR', 'Failed !',[ "progressBar"=>true, "closeButton"=> true,]);
        }
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
        
        // null and space validation check 
        $request->validate(['name' => ['required', 'regex:/^[^\s]+$/']]);

        $languageModel = Language::find($id);
        $languageModel->name = $request->name;
        $languageModel->alias = $request->alias;
        $languageModel->flag = $request->flag;
        $languageModel->description = $request->description;
        $languageModel->status = $request->status;

        if($request->is_default == 1){
            Language::where('id', '>', 0)->update(['is_default'=> 0]);
            $languageModel->is_default = $request->is_default;
        }else{
            $count = count(Language::where([['id','!=', $id], ['is_default', 1]])->get()->skip(1));
            if($count == 0){
                Language::where('id', '>', 0)->update(['is_default'=> 0]);
                Language::first()->update(['is_default'=> 1]);
            }else{
                Language::where('id', '>', 0)->update(['is_default'=> 0]);
                $languageModel->is_default = $request->is_default;                
            }
        }
        
        if($languageModel->save()){
            // Alert::success('New Language', 'Successfully Saved !');        
            Toastr::success('Successflly', 'Updated successfully',[ "progressBar"=>true, "closeButton"=> true,]);
        }else{
            // Alert::success('New Language', 'Successfully Saved !');        
            Toastr::error('Try Again', 'Failed !',[ "progressBar"=>true, "closeButton"=> true,]);
        }          
        return redirect()->route('settings.language.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        // Alert::question('Are You Sure!', 'to Delete this Language?');
        // confirmDelete('Delete Language?', 'Are You Sure to Delete Language !');
        $languageModel = Language::find($id);

        if($languageModel->delete()){
            Toastr::success('Successfully !', '1 Language Deleted !',[ "progressBar"=>true, "closeButton"=> true,]);
        }else{
            Toastr::error('ERROR', 'Failed !',[ "progressBar"=>true, "closeButton"=> true,]);
        }        
        return redirect()->route('settings.language');
    }
}
