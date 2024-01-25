<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //BPH
        Member::create([
            'nim' => '11S21003',
            'nama' => 'Benhard Yudha',
            'divisi' => 'Badan Pengurus Harian',
            'jabatan' => 'Ketua',
            'year' => 2023,
            'picture' => 'img/members/11S21003_2023.png'
        ]);

        Member::create([
            'nim' => '11S21050',
            'nama' => 'Ella Silaban',
            'divisi' => 'Badan Pengurus Harian',
            'jabatan' => 'Bendahara',
            'year' => 2023,
            'picture' => 'img/members/11S21050_2023.png'
        ]);

        Member::create([
            'nim' => '11S21048',
            'nama' => 'Angelika Simatupang',
            'divisi' => 'Badan Pengurus Harian',
            'jabatan' => 'Sekretaris',
            'year' => 2023,
            'picture' => 'img/members/11S21048_2023.png'
        ]);

        Member::create([
            'nim' => '11S22014',
            'nama' => 'Baha Sibarani',
            'divisi' => 'Badan Pengurus Harian',
            'jabatan' => 'Wakil Ketua',
            'year' => 2023,
            'picture' => 'img/members/11S22014_2023.png'
        ]);

        Member::create([
            'nim' => '11S22005',
            'nama' => 'Olga Frischila G',
            'divisi' => 'Badan Pengurus Harian',
            'jabatan' => 'Wakil Bendahara',
            'year' => 2023,
            'picture' => 'img/members/11S22005_2023.png'
        ]);

        Member::create([
            'nim' => '11S22051',
            'nama' => 'Nadia Sirait',
            'divisi' => 'Badan Pengurus Harian',
            'jabatan' => 'Wakil Sekretaris',
            'year' => 2023,
            'picture' => 'img/members/11S22051_2023.png'
        ]);

        //DIVISI RISET DAN TEKNOLOGI
        Member::create([
            'nim' => '11S21025',
            'nama' => 'Boy Sitorus',
            'divisi' => 'Riset dan Teknologi',
            'jabatan' => 'Ketua',
            'year' => 2023,
            'picture' => 'img/members/11S21025_2023.png'
        ]);

        Member::create([
            'nim' => '11S21028',
            'nama' => 'Rafael Manurung',
            'divisi' => 'Riset dan Teknologi',
            'jabatan' => 'Wakil Ketua',
            'year' => 2023,
            'picture' => 'img/members/11S21028_2023.png'
        ]);

        Member::create([
            'nim' => '11S21016',
            'nama' => 'Putri Manurung',
            'divisi' => 'Riset dan Teknologi',
            'jabatan' => 'Anggota',
            'year' => 2023,
            'picture' => 'img/members/11S21016_2023.png'
        ]);

        Member::create([
            'nim' => '11S22039',
            'nama' => 'Prans Simarmata',
            'divisi' => 'Riset dan Teknologi',
            'jabatan' => 'Anggota',
            'year' => 2023,
            'picture' => 'img/members/11S22039_2023.png'
        ]);


        //DIVISI MINAT DAN BAKAT
        Member::create([
            'nim' => '11S21015',
            'nama' => 'Gerald Nathanael',
            'divisi' => 'Minat dan Bakat',
            'jabatan' => 'Ketua',
            'year' => 2023,
            'picture' => 'img/members/11S21015_2023.png'
        ]);

        Member::create([
            'nim' => '11S22034',
            'nama' => 'Joel Aritonang',
            'divisi' => 'Minat dan Bakat',
            'jabatan' => 'Wakil Ketua',
            'year' => 2023,
            'picture' => 'img/members/11S22034_2023.png'
        ]);

        Member::create([
            'nim' => '11S22004',
            'nama' => 'Pangeran Simamora',
            'divisi' => 'Minat dan Bakat',
            'jabatan' => 'Anggota',
            'year' => 2023,
            'picture' => 'img/members/11S22004_2023.png'
        ]);

        Member::create([
            'nim' => '11S22026',
            'nama' => 'Riovan Sihombing',
            'divisi' => 'Minat dan Bakat',
            'jabatan' => 'Anggota',
            'year' => 2023,
            'picture' => 'img/members/11S22026_2023.png'
        ]);

        Member::create([
            'nim' => '11S22021',
            'nama' => 'Rachel Nababan',
            'divisi' => 'Minat dan Bakat',
            'jabatan' => 'Anggota',
            'year' => 2023,
            'picture' => 'img/members/11S22021_2023.png'
        ]);

        Member::create([
            'nim' => '11S22025',
            'nama' => 'Martha LumbanTobing',
            'divisi' => 'Minat dan Bakat',
            'jabatan' => 'Anggota',
            'year' => 2023,
            'picture' => 'img/members/11S22025_2023.png'
        ]);

        Member::create([
            'nim' => '11S21043',
            'nama' => 'Nada Bakara',
            'divisi' => 'Minat dan Bakat',
            'jabatan' => 'Anggota',
            'year' => 2023,
            'picture' => 'img/members/11S21043_2023.png'
        ]);

        //DANA DAN USAHA
        Member::create([
            'nim' => '11S21020',
            'nama' => 'Intan Sianipar',
            'divisi' => 'Dana dan Usaha',
            'jabatan' => 'Ketua',
            'year' => 2023,
            'picture' => 'img/members/11S21020_2023.png'
        ]);

        Member::create([
            'nim' => '11S22044',
            'nama' => 'Sunanda Munthe',
            'divisi' => 'Dana dan Usaha',
            'jabatan' => 'Wakil Ketua',
            'year' => 2023,
            'picture' => 'img/members/11S22044_2023.png'
        ]);

        Member::create([
            'nim' => '11S22048',
            'nama' => 'Angel Lubis',
            'divisi' => 'Dana dan Usaha',
            'jabatan' => 'Anggota',
            'year' => 2023,
            'picture' => 'img/members/11S22048_2023.png'
        ]);

        Member::create([
            'nim' => '11S21021',
            'nama' => 'Naomi Sihombing',
            'divisi' => 'Dana dan Usaha',
            'jabatan' => 'Anggota',
            'year' => 2023,
            'picture' => 'img/members/11S21021_2023.png'
        ]);

        Member::create([
            'nim' => '11S22045',
            'nama' => 'Lusiana Silaen',
            'divisi' => 'Dana dan Usaha',
            'jabatan' => 'Anggota',
            'year' => 2023,
            'picture' => 'img/members/11S22045_2023.png'
        ]);

        //HUBUNGAN MASYARAKAT
        Member::create([
            'nim' => '11S21055',
            'nama' => 'Gerry Bukit',
            'divisi' => 'Hubungan Masyarakat',
            'jabatan' => 'Ketua',
            'year' => 2023,
            'picture' => 'img/members/11S21055_2023.png'
        ]);

        Member::create([
            'nim' => '11S21051',
            'nama' => 'Wilona Simbolon',
            'divisi' => 'Hubungan Masyarakat',
            'jabatan' => 'Wakil Ketua',
            'year' => 2023,
            'picture' => 'img/members/11S21051_2023.png'
        ]);

        Member::create([
            'nim' => '11S22031',
            'nama' => 'Bertrand Sianipar',
            'divisi' => 'Hubungan Masyarakat',
            'jabatan' => 'Anggota',
            'year' => 2023,
            'picture' => 'img/members/11S22031_2023.png'
        ]);

        Member::create([
            'nim' => '11S22024',
            'nama' => 'Gracesia Marbun',
            'divisi' => 'Hubungan Masyarakat',
            'jabatan' => 'Anggota',
            'year' => 2023,
            'picture' => 'img/members/11S22024_2023.png'
        ]);

        Member::create([
            'nim' => '11S22018',
            'nama' => 'Deak Napitupulu',
            'divisi' => 'Hubungan Masyarakat',
            'jabatan' => 'Anggota',
            'year' => 2023,
            'picture' => 'img/members/11S22018_2023.png'
        ]);

        Member::create([
            'nim' => '11S22046',
            'nama' => 'Deak Gulo',
            'divisi' => 'Hubungan Masyarakat',
            'jabatan' => 'Anggota',
            'year' => 2023,
            'picture' => 'img/members/11S22046_2023.png'
        ]);


        //KOMUNIKASI DAN INFORMASI
        Member::create([
            'nim' => '11S21038',
            'nama' => 'Jayfline Hutagalung',
            'divisi' => 'Komunikasi dan Informasi',
            'jabatan' => 'Ketua',
            'year' => 2023,
            'picture' => 'img/members/11S21038_2023.png'
        ]);

        Member::create([
            'nim' => '11S21046',
            'nama' => 'Riskia Sitorus',
            'divisi' => 'Komunikasi dan Informasi',
            'jabatan' => 'Wakil Ketua',
            'year' => 2023,
            'picture' => 'img/members/11S21046_2023.png'
        ]);

        Member::create([
            'nim' => '11S22032',
            'nama' => 'Roy Hutajulu',
            'divisi' => 'Komunikasi dan Informasi',
            'jabatan' => 'Anggota',
            'year' => 2023,
            'picture' => 'img/members/11S22032_2023.png'
        ]);

        Member::create([
            'nim' => '11S22040',
            'nama' => 'Ferdinand Hutajulu',
            'divisi' => 'Komunikasi dan Informasi',
            'jabatan' => 'Anggota',
            'year' => 2023,
            'picture' => 'img/members/11S22040_2023.png'
        ]);

        //PENDIDIKAN
        Member::create([
            'nim' => '11S21045',
            'nama' => 'Cindy Simangunsong',
            'divisi' => 'Pendidikan',
            'jabatan' => 'Ketua',
            'year' => 2023,
            'picture' => 'img/members/11S21045_2023.png'
        ]);

        Member::create([
            'nim' => '11S22041',
            'nama' => 'Viktris Lubis',
            'divisi' => 'Pendidikan',
            'jabatan' => 'Wakil Ketua',
            'year' => 2023,
            'picture' => 'img/members/11S22041_2023.png'
        ]);

        Member::create([
            'nim' => '11S22047',
            'nama' => 'Okdini Hutagalung',
            'divisi' => 'Pendidikan',
            'jabatan' => 'Anggota',
            'year' => 2023,
            'picture' => 'img/members/11S22047_2023.png'
        ]);

        Member::create([
            'nim' => '11S22007',
            'nama' => 'Patricia Sibarani',
            'divisi' => 'Pendidikan',
            'jabatan' => 'Anggota',
            'year' => 2023,
            'picture' => 'img/members/11S22007_2023.png'
        ]);


        //ANGKATAN 2022

        //BPH
        $bph_nama = array("Guntur Sinaga", "Gabriel Hutagalung", "Putri Simamora", "Ella Silaban", "Luna Pangaribuan", "Angelika Ruth");
        $bph_nim = array("11S20006", "11S21010", "11S20011", "11S21050", "11S20042", "11S21048");
        $bph_jabatan = array("Ketua", "Wakil Ketua", "Bendahara", "Wakil Bendahara", "Sekretaris", "Wakil Sekretaris");

        for ($i = 0; $i < count($bph_nim); $i++){
            Member::create([
                'nim' => $bph_nim[$i],
                'nama' => $bph_nama[$i],
                'divisi' => 'Badan Pengurus Harian',
                'jabatan' => $bph_jabatan[$i],
                'year' => 2022,
                'picture' => 'img/members/'. $bph_nim[$i] .'_2022.png'
            ]);
        }

        //MINAT DAN BAKAT

        $miba_nama = array("Kevin Samosir", "Lamboy Sirait", "Yose Siagian", "Dea Saragih", "Yefta Siahaan", "Agustina Butar-Butar", "Wilona Simbolon");
        $miba_nim = array("11S20034", "11S20028", "11S21009", "11S21017", "11S21023", "11S21019", "11S21051");
        $miba_jabatan = array("Ketua", "Wakil Ketua", "Anggota", "Anggota", "Anggota", "Anggota", "Anggota");

        for ($i = 0; $i < count($miba_nim); $i++){
            Member::create([
                'nim' => $miba_nim[$i],
                'nama' => $miba_nama[$i],
                'divisi' => 'Minat dan Bakat',
                'jabatan' => $miba_jabatan[$i],
                'year' => 2022,
                'picture' => 'img/members/'. $miba_nim[$i] .'_2022.png'
            ]);
        }

        //RISET DAN TEKNOLOGI

        $ristek_nama = array("Hedrin Sitorus", "Fernando Pakpahan", "Michael Napitupulu", "Yosua Haloho", "Samuel Sibuea", "Boy Sitorus");
        $ristek_nim = array("11S20019", "11S21036", "11S20035", "11S20032", "11S20004", "11S21025");
        $ristek_jabatan = array("Ketua", "Wakil Ketua", "Anggota", "Anggota", "Anggota", "Anggota", "Anggota");

        for ($i = 0; $i < count($ristek_nim); $i++){
            Member::create([
                'nim' => $ristek_nim[$i],
                'nama' => $ristek_nama[$i],
                'divisi' => 'Riset dan Teknologi',
                'jabatan' => $ristek_jabatan[$i],
                'year' => 2022,
                'picture' => 'img/members/'. $ristek_nim[$i] .'_2022.png'
            ]);
        }

        //KOMUNIKASI DAN INFORMASI
        $kominfo_nama = array("Dian Gultom", "Amelia Hutajulu", "Cheilint Siallagan", "Theresia Hutabarat", "Ruth Silalahi", "Gerald Nathanael", "Jayfline Hutagalung", "Dastin Sirait");
        $kominfo_nim = array("11S20033", "11S20044", "11S20051", "11S20048", "11S20018", "11S21015", "11S21038", "11S21037");
        $kominfo_jabatan = array("Ketua", "Wakil Ketua", "Anggota", "Anggota", "Anggota", "Anggota", "Anggota", "Anggota");

        for ($i = 0; $i < count($kominfo_nim); $i++){
            Member::create([
                'nim' => $kominfo_nim[$i],
                'nama' => $kominfo_nama[$i],
                'divisi' => 'Komunikasi dan Informasi',
                'jabatan' => $kominfo_jabatan[$i],
                'year' => 2022,
                'picture' => 'img/members/'. $kominfo_nim[$i] .'_2022.png'
            ]);
        }

        //HUBUNGAN MASYARAKAT
        $humas_nama = array("Reinhard Simbolon", "Rolasta Sitorus", "Nada Bakara", "Icha Samosir", "Rio Pasaribu", "Royman Situmeang");
        $humas_nim = array("11S20003", "11S20021", "11S21043", "11S21044", "11S21033", "11S21026");
        $humas_jabatan = array("Ketua", "Wakil Ketua", "Anggota", "Anggota", "Anggota", "Anggota");

        for ($i = 0; $i < count($humas_nim); $i++){
            Member::create([
                'nim' => $humas_nim[$i],
                'nama' => $humas_nama[$i],
                'divisi' => 'Hubungan Masyarakat',
                'jabatan' => $humas_jabatan[$i],
                'year' => 2022,
                'picture' => 'img/members/'. $humas_nim[$i] .'_2022.png'
            ]);
        }

        //PENDIDIKAN
        $pend_nama = array("Nanchy Siadari", "Grace Sitepu", "Cindy Simangunsong", "Robert Aritonang", "Rafael Manurung", "Intan Sianipar");
        $pend_nim = array("11S20016", "11S20050", "11S21045", "11S21024", "11S21028", "11S21020");
        $pend_jabatan = array("Ketua", "Wakil Ketua", "Anggota", "Anggota", "Anggota", "Anggota");

        for ($i = 0; $i < count($pend_nim); $i++){
            Member::create([
                'nim' => $pend_nim[$i],
                'nama' => $pend_nama[$i],
                'divisi' => 'Pendidikan',
                'jabatan' => $pend_jabatan[$i],
                'year' => 2022,
                'picture' => 'img/members/'. $pend_nim[$i] .'_2022.png'
            ]);
        }


        //DANA DAN USAHA
        $danus_nama = array("Lasria Rajagukguk", "Ivanston Simbolon", "Ketrina Siagian", "Valentina Siahaan", "Putri Siahaan", "Greyssenly Simanjuntak", "Gerry Bukit");
        $danus_nim = array("11S20005", "11S20026", "11S20039", "11S20038", "11S20043", "11S20047", "11S21055");
        $danus_jabatan = array("Ketua", "Wakil Ketua", "Anggota", "Anggota", "Anggota", "Anggota", "Anggota");

        for ($i = 0; $i < count($danus_nim); $i++){
            Member::create([
                'nim' => $danus_nim[$i],
                'nama' => $danus_nama[$i],
                'divisi' => 'Dana dan Usaha',
                'jabatan' => $danus_jabatan[$i],
                'year' => 2022,
                'picture' => 'img/members/'. $danus_nim[$i] .'_2022.png'
            ]);
        }

    }
}
