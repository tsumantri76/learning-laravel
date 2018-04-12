<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = Auth::user()->id;
        if($user < 3)
        {
            $posts = DB::table('posts')
                    ->where('user_id', $user)
                    ->paginate(3);
        }
        else{
            $posts = DB::table('posts')->paginate(3);
        }     

        return view('home', compact('posts'));
    }

    public function simpan(Request $request)
    {
        $this->validate($request, [
            'judul'  => 'required|max:30',
            'desc' => 'required'
        ]);

        $data = [
            'judul' => $request->judul,
            'desc'  => $request->desc,
            'user_id' => Auth::user()->id
        ];

        $query = DB::table('posts')->insert($data);
        return redirect('/home');
    }

    public function ubah($id)
    {
        echo 'Ubah Pass';
        echo Auth::user()->id;
    }

    public function setting()
    {
        $users = DB::table('users')->paginate(10);
        return view('/setting', compact('users'));
    }
}
