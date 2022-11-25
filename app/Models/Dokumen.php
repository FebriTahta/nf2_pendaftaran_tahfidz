<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;
    protected $fillable = [
        'program_id',
        'santri_id',
        'dokumen_rapot',
        'dokumen_kk',
        'dokumen_akta',
        'dokumen_ktp',
        'dokumen_foto',
        'dokumen_suratsehat',
        'dokumen_suratbaik',
        'dokumen_vaksin',
        'dokumen_prestasi',
        'dokumen_tfformulir'
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }
}
