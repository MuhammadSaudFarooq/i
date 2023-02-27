<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserOption;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('frontend.dashboard');
    }

    public function orders()
    {
        return view('frontend.dashboard.orders');
    }

    public function address()
    {
        // $user_options = User::with("user_options")->find(auth()->user()->id);
        // $user_options = User::find(auth()->user()->id)->user_options()->first();
        // $user_options = auth()->user()->load('user_options');
        // $user_options = auth()->user()->user_options()->latest()->skip(2)->take(1)->first();
        // $user_options = auth()->user()->user_options()->first();
        $user_options = auth()->user()->user_options()->first();
        return view('frontend.dashboard.address', compact('user_options'));
    }

    public function account_detail()
    {
        return view('frontend.dashboard.account-detail');
    }

    public function user_options(Request $request)
    {
        $request->validate(
            [
                'address' => 'required|string',
                'city' => 'required|string',
                'zip' => 'required|numeric',
                'country' => 'required|string',
                'phone' => 'required|numeric|digits:11'
            ]
        );

        $user_options = auth()->user()->user_options()->first();
        // $user_options = auth()->user()->user_options();
        // $user_options = auth()->user()->first();
        // $user_options = User::with("user_options")->find(auth()->user()->id);
        // dd($user_options);

        $user_options->user_id = auth()->user()->id;
        $user_options->address = $request['address'];
        $user_options->city = $request['city'];
        $user_options->zip = $request['zip'];
        $user_options->country = $request['country'];
        $user_options->phone = $request['phone'];
        $user_options->save();

        return redirect('dashboard/address');
    }

    public function user_name(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string',
            ]
        );

        $user = auth()->user();
        $user->name = $request['name'];
        $user->save();

        return redirect('dashboard/account-detail');
    }
}
