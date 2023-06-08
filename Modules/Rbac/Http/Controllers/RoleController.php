<?php

namespace Modules\Rbac\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data = array(
            'roles' => Role::all()
        );
        return view('rbac::roles.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('rbac::roles.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $role = new Role();
        $role->name = $request->name;
        $role->save();

        return redirect('/roles');
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
        // dd($id);
        $data = array(
            'role' => Role::find($id),
            'permissions' => Permission::all()
        );
        return view('rbac::roles.edit', $data);
    }

    /**
     * Show the form for assigining the permissions.
     * @param int $id
     * @return Renderable
     */
    public function assignPermissions(Request $request, $id)
    {
        $role = Role::where('id', $id)->get();
        // dd($role);
//        if ($role->hasPermissionTo($request->permission)){
//            return back()->with('message', 'Permission exists');
//        }
        $role->givePermissionTo($request->permission);
        return redirect()->route('roles.index');
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
