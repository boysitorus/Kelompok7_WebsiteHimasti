<?php

namespace App\Http\Controllers;

use App\Models\Management;
use App\Models\Member;
use App\Models\Program;
use Illuminate\Http\Request;

class KepengurusanController extends Controller
{
    public function index(Request $request)
    {

        $tahun = $request->get('tahun-select') ?? null;
        $divisi = $request->get('divisi-select') ?? null;
        $latestYear = Management::max('year');

        $yearsOptions = Management::select("year")->distinct()->orderBy("year", 'desc')->get();
        $divisionsOptions = Management::select("divisi")->distinct()->get();

        $managements = Management::select("*");
        $members = Member::select("*");

        if ($tahun != null) {
            $managements = $managements->where('year', $tahun);
            $members = $members->where('year', $tahun);
        } else {
            $managements = $managements->where('year', $latestYear);
            $members = $members->where('year', $latestYear);
        }

        if ($divisi != null && $divisi != '*') {
            $managements = $managements->where('divisi', $divisi);
            $members = $members->where('divisi', $divisi);
        }

        $managements = $managements->orderByRaw("CASE WHEN divisi = 'Badan Pengurus Harian' THEN 1 ELSE 2 END")->get();
        $members = $members->orderByRaw("CASE WHEN jabatan = 'Ketua' THEN 1 WHEN jabatan = 'Bendahara' THEN 2 WHEN jabatan = 'Sekretaris' THEN 4 WHEN jabatan = 'Wakil Ketua' THEN 5 ELSE 6 END");


        $data = [
            "yearsOptions" => $yearsOptions,
            "divisionsOptions" => $divisionsOptions,
            "managements" => $managements,
            "yearSelected" => $tahun,
            "divisionSelected" => $divisi,
            "members" => $members->get(),
            "bphs" => $members->where('divisi', 'Badan Pengurus Harian')->get(),
        ];

        return view("app.kepengurusan", $data);
    }

    public function getDetail($tahun, $divisi)
    {
        $management = Management::where('divisi', $divisi)->where('year', $tahun)->first();

        $programs = Program::where('divisi', $divisi)->where('year', $tahun)->get();

        $data = [
            'programs' => $programs,
            'management' => $management
        ];

        return view("app.detailKepengurusan", $data);
    }
}
