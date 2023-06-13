<?php

namespace Modules\Rbac\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        // data
        $data = array(
            'users'=> User::all()
        );
       // dd($data);
        return view('rbac::users.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('rbac::users.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('rbac::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('rbac::edit');
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

    public function assign($id){

        $data = array(
           'user' =>  User::with('roles')->find($id),
            'roles' => Role::all()
        );

        return view('rbac::users.assign', $data);
    }

    public function assignRoles(Request $request, $id){
        $user = User::where('id', $id)->first();
        // dd($user);
//        if ($role->hasPermissionTo($request->permission)){
//            return back()->with('message', 'Permission exists');
//        }
        // Auth::user()->givePermissionTo($request->permission);
        //$role->givePermissionTo($request->permission);
//       dd($role);
        $user->assignRole($request->role);
        return redirect()->route('roles.index');
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
