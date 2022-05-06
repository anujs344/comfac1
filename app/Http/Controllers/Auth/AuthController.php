<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Storage;


class AuthController extends Controller
{
 
    
    public $blah;
    public function getregister()
    {
        if(Auth::check())
        {
            return redirect()->route('UserDashboard');
        }

        return view('Auth.Register');
    }
    public function postregister(Request $req)
    {
        $validate = $this->validateRequest($req);
        if($validate->fails()){
            return view()->share('message', $validate->errors()->first());
        }
        // dd($req->file('imagename'));
        $user = new User();
        $user->name = $req->name;
        $user->password = Hash::make( $req->password );
        // $imageName = time().'.'.$req->file('imagename')->getClientOriginalExtension(); 
       
        // $path = Storage::disk('s3')->put('images', $req->file('imagename'),'public-read');
        // $path = Storage::disk('s3')->url($path);

        $path = "storage/test_images";
        $imageName = time().".".$req->file('imagename')->getClientOriginalExtension();
        $file = $req->file('imagename');

        // Storage::disk('s3')->put($path."/".$imageName,$file);
        // Storage::disk('s3')->putFileAs($path,$file.$imageName);
        // $file->storeAs(
        //     $path,
        //     $imageName,
        //     's3'
        // );
        dd(env('AWS_DEFAULT_REGION'));

        $url = Storage::disk('s3')->temporaryUrl(
            $path."/".$imageName,
            now()->addMinutes(10)
        );

        $user->imagename = $imageName;
        $user->imagepath = $url;
        $user->save();

        return redirect()->route('getlogin');
    }

    public function validateRequest(Request $request){
        return validator($request->all(),[
            'name' => 'required|unique:users,name',
            'password' => 'required|min:4',
            'imagename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    }

    public function getlogin()
    {
        if(Auth::check())
        {
            return redirect()->route('UserDashboard');
        }

        return view('Auth.login');
    }
    public function postlogin(Request $req)
    {
        $req->validate([
            'name' => 'required|string',
            'password' => 'required|min:4'
        ]);

        if (Auth::attempt(['name' => $req->name, 'password' => $req->password])) {
           
            return redirect()->route('UserDashboard');
        }
        else{
            return redirect()->back()->withInput();
        }
    }
}
