<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_id',
        'santri_name',
        'santri_nik',
        'santri_nisn',
        'santri_tempatlahir',
        'santri_tanggallahir',
        'santri_gender',
        'santri_anaknomor',
        'santri_bersaudara',
        'santri_alamat',
        'santri_tinggibadan',
        'santri_beratbadan',
        'santri_riwayatsakit',
        'santri_riwayatopname',
        'santri_statuskeluarga',
        'santri_asalsekolah',
        'santri_alamatsekolah',
        'santri_slug',
        'status'
    ];

    public function ayah()
    {
        return $this->hasOne(Ayah::class);
    }

    public function ibu()
    {
        return $this->hasOne(Ibu::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function dokumen() 
    {
        return $this->hasOne(Dokumen::class);
    }
}
