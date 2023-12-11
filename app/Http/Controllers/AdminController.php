<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\News;

class AdminController extends Controller
{
    public function index(){
        $auth = Auth::user();
        
        $data = [
            "auth" => $auth
        ];
        
        return view('admin.dashboard', $data);
    }

    public function getBerita(){
        $auth = Auth::user();

        $news = News::select("*")->orderBy('id', 'asc')->get();

        $data = [
            "auth" => $auth,
            "news" => $news
        ];

        return view('admin.berita', $data);
    }

    public function createBerita(Request $request){
        $request->validate([
            'picture' => 'required|image|mimes:jpeg,png,jpg',
            'title' => 'required',
            'detail' => 'required',
            'date' => 'required',
            'type' => 'required',
        ]);

        $news = News::create([
            'title' => $request->title,
            'date' => $request->date,
            'detail' => $request->detail,
            'type' => $request->get('type'),
        ]);

        $picture = $request->file('picture');
        // Membuat nama unik untuk file yang diunggah
        $filename = $news->id . "_" . time() . '.' . $picture->getClientOriginalExtension();
        // Menentukan direktori tempat penyimpanan file di dalam direktori 'public'
        $directory = public_path('img/news_pictures');
        // Pindahkan file ke direktori yang diinginkan
        $picture->move($directory, $filename);
        
        $news->picture = "img/news_pictures/" . $filename;
        $news->save();
        return redirect()->back();
    }
}
