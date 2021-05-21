<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class DeleteUserController extends Controller
{
    public function contactlist(Request $request)
    {
        $list = User::orderby('id', 'desc')->get()->toArray();
//        dd($list);
        return view('pages.home')->with('list', $list);
    }

    public function multipleusersdelete(Request $request)
    {
        $id = $request->id;

//        dd($id);
        foreach ($id as $user)
        {
            User::where('id', $user)->delete();
        }
        return redirect()->back();
    }
}
