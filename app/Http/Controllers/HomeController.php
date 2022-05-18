<?php

namespace App\Http\Controllers;

use App\Helpers\PostCode;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['user'] = auth()->user();
        $data['address'] = PostCode::addressLookUp($data['user']->postcode);
        // dd($data);
        return view('address',$data);
    }
}
