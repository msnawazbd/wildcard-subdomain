<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $account)
    {
        $user  = User::where('username', $request->account)->first();

        if(!empty($user)){
            return view('custom', compact('user'));
        }
        return view('default');
    }
}
