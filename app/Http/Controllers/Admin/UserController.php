<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */



    public function index()
    {
        $users = User::all();
        return inertia('Auth/Index',compact('users'));
    }

//    public function create()
//    {
//        return inertia('Auth/Register');
//    }
//
//    public function store(UserRequest $request)
//    {
//        $imageName= null;
//
//        if ($request->hasFile('image')){
//            $imageName = $request->image->getClientOriginalName();
//            $request->image->storeAs('public/Auth/images', $imageName);
//        }
//
//
//        $user = $request->validated();
//        $user['image']=$imageName;
//
//        $created_user = User::create($user);
//        $created_user->assignRole('writer');
//
//        return redirect()->route('home');
//    }

    public function show(User $user)
    {
        $user = new UserResource($user);
        return inertia('Auth/show',compact('user'));
    }

    public function edit(User $user)
    {
        return inertia('Auth/edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        //
    }



    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')
            ->with('message','User Deleted Successfully');
    }
}
