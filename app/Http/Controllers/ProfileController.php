<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class ProfileController extends Controller
{
    public function getdashboard()
    {
        $data = User::where('id',Auth::user()->id)->first();
        if($data->hits == 0 && $data->views == 0)
        {
            $new = 1;
        }
        return view('Users.Dashboard',["data" => $data,"new" => $new]);
    }

    public function logout()
    {
        
        Auth::guard('web')->logout();
        return redirect()->to('/');
    }

}
