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
    }
}
