<?php

namespace Modules\Rbac\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Profile\Entities\People;
use Modules\Profile\Entities\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('rbac::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('rbac::create');
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
//        dd($id);
        $data = array(
            'user' => User::find($id),
            'profile'=> People::where('user_id', $id)->first()
        );
        //dd($data['user']);
        return view('rbac::profile.form', $data);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $profile = People::find($id);
        $profile->signup_category_id = $request->signup_category_id;
        $profile->signup_sub_category_id = $request->signup_sub_category_id;
        $profile->first_name = $request->first_name;
        $profile->last_name = $request->last_name;
        $profile->sur_name = $request->sur_name;
        $profile->email = $request->email;
        $profile->identity = $request->identity;
        $profile->gender = $request->gender;
        $profile->organization_name = $request->organization_name;
        $profile->organization_id = $request->organization_id;
        $profile->dob = $request->dob;
        $profile->profile_image = '';
        $profile->cover_image = '';
        $profile->online_profile = $request->online_profile;
        $profile->interested_in = $request->interested_in;
        $profile->about_myself = $request->about_myself;
        $profile->facebook = $request->facebook;
        $profile->twitter = $request->twitter;
        $profile->linkedin = $request->linkedin;
        $profile->google = $request->google;
        $profile->is_organization_root_user = $request->is_organization_root_user;
        $profile->status = 0;

        // dd($profile);

        $profile->save();
        return redirect()->route('users.profile.edit', $profile->id);
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
