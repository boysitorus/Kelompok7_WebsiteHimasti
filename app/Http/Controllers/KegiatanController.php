<?php

namespace App\Http\Controllers;

use App\Models\Management;
use App\Models\Program;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index(Request $request){
        $tahun = $request->get('tahun-select') ?? null;
        $divisi = $request->get('divisi-select') ?? null;
        $latestYear = Program::max('year');

        $yearsOptions = Program::select("year")->distinct()->orderBy("year", 'desc')->get();
        $divisionsOptions = Program::select("divisi")->distinct()->get();

        $programs = Program::where('status', 'Terlaksana');

        if($tahun != null){
            $programs = $programs->where('year', $tahun);
        }else{
            $programs = $programs->where('year', $latestYear);
        }

        if($divisi != null && $divisi != '*'){
            $programs = $programs->where('divisi', $divisi);
        }
        
        $programs = $programs->get();

        $data = [
            'programs' => $programs,
            'yearsOptions' => $yearsOptions,
            'divisionsOptions' => $divisionsOptions
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
