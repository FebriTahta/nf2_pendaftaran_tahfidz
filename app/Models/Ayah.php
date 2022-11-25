<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayah extends Model
{
    use HasFactory;

    protected $fillable = [
        'ayah_name',
        'ayah_nik',
        'ayah_tgllahir',
        'ayah_tempatlahir',
        'ayah_pendidikan',
        'ayah_pekerjaan',
        'ayah_penghasilan',
        'ayah_nohp',
        'santri_id',
    ];

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }
}
