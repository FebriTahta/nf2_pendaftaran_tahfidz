<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibu extends Model
{
    use HasFactory;
    protected $fillable = [
        'ibu_name',
        'ibu_nik',
        'ibu_tgllahir',
        'ibu_tempatlahir',
        'ibu_pendidikan',
        'ibu_pekerjaan',
        'ibu_penghasilan',
        'ibu_nohp',
        'santri_id',
    ];

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }
}
