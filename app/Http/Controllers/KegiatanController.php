<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index(){
        return view("app.kegiatan");
    }

    public function getDetail(){
        return view("app.detailKegiatan");
    }
}
