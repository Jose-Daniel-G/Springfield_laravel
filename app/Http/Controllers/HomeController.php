<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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

    public function index()
    {
        $posts = Post::select('posts.*')
        ->join('categories', 'categories.id', '=', 'posts.category_id')
        ->latest()
        ->get();
        return view('home', compact('posts'));
    }

    public function profileUpdate(Request $request)
    {
        //validation rules
        $request->validate([
            'name' => 'required|min:4|string|max:255',
            'email' => 'required|email|string|max:255',
        ]);
        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];

        // UPLOAD IMAGES
        $file = $request->file('photo');
        if (!empty($file)) {
            $nombre =  time() . "_" . $file->getClientOriginalName();
            $imagenes = $file->storeAs('public/uploads', $nombre);
            $url = Storage::url($imagenes);

            if ($user->image->url) {
                unlink(public_path() . $user->image->url);
                $user->image->update(['url' => $url]);
            } else {
                $user->image()->create(['url' => $url]);
            }
            $user->image->url = $url;
        }
        $user->save();
        return back()->with('message', 'Profile Updated');
    }

    public function passwordUpdate(Request $request)
    {
        // dd($request);
        $request->validate([
            'old_password' => 'required|min:8|max:32',
            'new_password' => 'required|min:8|max:32',
            'password_confirmed' => 'required|same:new_password',
        ]);

        #Match The Old Password
        $hashedPassword = Auth::user()->password;
        if (!Hash::check($request->old_password, $hashedPassword)) {
            return back()->with("error", "Old Password Doesn't match!");
        }
        #Update the new Password
        User::whereId(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);
        return back()->with("status", "Password changed successfully!");
    }
   
}
