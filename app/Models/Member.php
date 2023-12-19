<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members';

    protected $fillable = ['nim', 'nama', 'jabatan', 'divisi', 'year', 'picture'];

    protected $primaryKey = ['nim', 'year'];

    public $incrementing = false;
}
