<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.index');
    }

    public function shop()
    {
        return view('frontend.shop');
    }

    public function single_product()
    {
        return view('frontend.single-product');
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function category()
    {
        return view('frontend.category');
    }

    public function wishlist()
    {
        return view('frontend.wishlist');
    }

    public function dashboard()
    {
        return view('frontend.dashboard.dashboard');
    }
}
