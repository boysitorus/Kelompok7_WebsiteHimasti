<?php

namespace App\Http\Controllers;

use App\Models\Management;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\News;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\getClientOriginalExtension;

class AdminController extends Controller
{
    public function index(){
        $auth = Auth::user();
        
        $data = [
            "auth" => $auth
        ];
        
        return view('admin.dashboard', $data);
    }

    public function getKepengurusan(){
        $auth = Auth::user();

        $managements = Management::select("year")->distinct()->orderBy('year', 'asc')->get();

        $data = [
            "auth" => $auth,
            "managements" => $managements
        ];

        return view('admin.kepengurusan', $data);
    }

    public function createKepengurusan(Request $request){
        $check = Management::where('year', $request->pincode)->first();

        if($check){
            return redirect()->back();
        }

        Management::create([
            'year' => $request->pincode,
            'divisi' => 'Badan Pengurus Harian'
        ]);
        
        return redirect()->back();
    }
    public function deleteKepengurusan(Request $request){
        Management::where("year", $request->tahun)->delete();
        return redirect()->back();
    }

    public function getDetailKepengurusan($year){

        $auth = Auth::user();
        $managements = Management::where('year', $year)->get();

        $data = [
            "auth" => $auth,
            "managements" => $managements
        ];

        return view('admin.kepengurusan.editKepengurusan', $data);
    }

    public function createDivisi(Request $request){
        $check = Management::where('year', $request->tahun)->where('divisi', $request->divisi)->first();

        if($check){
            return redirect()->back();
        }

        Management::create([
            'year' => $request->tahun,
            'divisi' => $request->divisi
        ]);
        
        return redirect()->back();
    }

    public function deleteDivisi(Request $request){
        Management::where('year', $request->tahun)->where('divisi', $request->divisi)->delete();

        return redirect()->back();
    }

    public function getDetailDivisi($tahun, $divisi){
        $auth = Auth::user();

        $management = Management::where('divisi', $divisi)->where('year', $tahun)->first();

        $data = [
            "auth" => $auth,
            "management" => $management
        ];

        return view('admin.kepengurusan.divisi', $data);
    }


    public function getKeanggotaan($tahun, $divisi){
        $auth = Auth::user();

        $management = Management::where('divisi', $divisi)->where('year', $tahun)->first();
        $members = Member::where('divisi', $divisi)->where('year', $tahun)->orderByRaw("CASE WHEN jabatan = 'Ketua' THEN 1 WHEN jabatan = 'Wakil Ketua' THEN 2 ELSE 3 END")->get();

        $data = [
            "auth" => $auth,
            "management" => $management,
            "members" => $members
        ];

        return view('admin.kepengurusan.keanggotaan', $data);
    }

    public function createMember(Request $request){
        $request->validate([
            'picture' => 'required|image|mimes:jpeg,png,jpg',
            'nim' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        $member = Member::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'divisi' => $request->divisi,
            'year' => $request->year,
            'jabatan' => $request->get('jabatan'),
        ]);

        $picture = $request->file('picture');
        
        $filename = $member->nim . "_" . time() . '.' . $picture->getClientOriginalExtension();
        
        $directory = public_path('img/members');
       
        $picture->move($directory, $filename);
        
        $member->update(['picture' => "img/members/" . $filename]);

        return redirect()->back();
    }

    public function updateMember(Request $request){
        $request->validate([
            'picture' => 'image|mimes:jpeg,png,jpg',
        ]);
        $member = Member::where("nim", $request->nim)->first();
        
        if(!empty($request->input('nama'))){
            $member->nama = $request->input('nama');
        }

        if(($request->file('picture')) != null){
            
            $picture = $request->file('picture');
           
            $filename = $member->nim . "_" . time() . '.' . $picture->getClientOriginalExtension();
            
            $directory = public_path('img/members');
            
            $picture->move($directory, $filename);

            if ($member->picture && file_exists($member->picture)) {
                unlink($member->picture);
            }
            
            $member->picture = "img/members/" . $filename;
        }

        $member->jabatan = $request->input('jabatan');
        $member->save();
        return redirect()->back();
    }

    public function deleteMember(Request $request){
        $member = Member::where("nim", $request->nim)->first();

        if($member){
            if ($member->picture && file_exists($member->picture)) {
                unlink($member->picture);
            }
            $member->delete();
        }

        return redirect()->back();
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
        
        $filename = $news->id . "_" . time() . '.' . $picture->getClientOriginalExtension();
        
        $directory = public_path('img/news_pictures');
       
        $picture->move($directory, $filename);
        
        $news->picture = "img/news_pictures/" . $filename;
        $news->save();
        return redirect()->back();
    }

    public function updateBerita(Request $request){
        $request->validate([
            'picture' => 'image|mimes:jpeg,png,jpg',
        ]);
        $berita = News::where("id", $request->id)->first();
        
        if(!empty($request->input('title'))){
            $berita->title = $request->input('title');
        }

        if(!empty($request->input('date'))){
            $berita->date = $request->input('date');
        }

        if(!empty($request->input('updateDetail'))){
            $berita->detail = $request->input('updateDetail');
        }

        if(!empty($request->input('details'))){
            $berita->detail = $request->input('details');
        }

        if(($request->file('picture')) != null){
            
            $picture = $request->file('picture');
           
            $filename = $berita->id . "_" . time() . '.' . $picture->getClientOriginalExtension();
            
            $directory = public_path('img/news_pictures');
            
            $picture->move($directory, $filename);

            if ($berita->picture && file_exists($berita->picture)) {
                unlink($berita->picture);
            }
            
            $berita->picture = "img/news_pictures/" . $filename;
        }

        $berita->type = $request->input('type');
        $berita->save();
        return redirect()->back();
    }

    public function deleteBerita(Request $request){
        $berita = News::where("id", $request->id)->first();

        if($berita){
            if ($berita->picture && file_exists($berita->picture)) {
                unlink($berita->picture);
            }
            $berita->delete();
        }

        return redirect()->back();
    }
}
