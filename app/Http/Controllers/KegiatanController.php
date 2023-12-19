<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index(){
        $programs = Program::where('status', 'Terlaksana')->get();

        $data = [
            'programs' => $programs
        ];

        return view("app.kegiatan", $data);
    }

    public function getDetail($id){

        $program = Program::where('id', $id)->first();

        $data = [
            'program' => $program
        ];

        return view("app.detailKegiatan", $data);
    }
}
