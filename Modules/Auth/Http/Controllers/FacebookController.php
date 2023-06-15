<?php

namespace Modules\Auth\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
//        dd('hello');
        return Socialite::driver('facebook')->redirect();
    }


    public function handleFacebookCallback()
    {
        dd('hello callback');
        try {
            $user = Socialite::driver('facebook')->user();
            dd($user);
            $finduser = User::where([
                ['facebook_id', '=', $user->id],
                ['email', '=', $user->email]
            ])->first();
            // dd($finduser);

            if($finduser){
                Auth::login($finduser);
                return redirect()->route('news.category.list');
            }else{
                $facebookReturnData =  Socialite::driver('facebook')->user();
                $data = array(
                    'facebookInfo' => $facebookReturnData,
                    'userInfo' =>   User::where('email', $facebookReturnData->email)->first()
                );
                //dd($data);
                return view('auth.register-facebook', $data);
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $validate
     * @return \App\Models\User
     */
    public function handleFacebookCallbackPost(Request $request){

        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['string', 'min:8', 'confirmed'],
        ]);

//        $user = Socialite::driver('google')->user();
        $finduser = User::where([
            ['email', '=', $request->email]
        ])->first();

        if ($finduser){
            if (empty($finduser->password)) {
                $user = User::where('email', $request->email)->update([
                    'user_type' => 'user',
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'google_id' => $request->facebook_id
                ]);
            }else{
                $user = User::where('email', $request->email)->update([
                    'user_type' => 'user',
                    'username' => $request->username,
                    'email' => $request->email,
                    'google_id' => $request->facebook_id
                ]);
            }
        } else {
            $user = User::create([
                'user_type' => 'user',
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'google_id' => $request->facebook_id
            ]);
        }
        Auth::login($user);
        return redirect()->route('news.category.list');
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('auth::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('auth::create');
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
        return view('auth::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('auth::edit');
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
