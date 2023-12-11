<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $congrats = News::where('type', 'ucapan')->orderBy('id', 'asc')->get();
        $events = News::where('type', 'event')->orderBy('id', 'asc')->get();

        $data = [
            "congrats" => $congrats,
            "events" => $events
        ];

        return view('app.dashboard', $data);
    }

    public function getDetail($id){
        $news = News::where('id', $id)->get()->first();
        if($news){
            $data = [
                'news' => $news
            ];
    
            return view("app.detailBerita", $data);
        }

        return view("app.detailBerita");
    }
}
