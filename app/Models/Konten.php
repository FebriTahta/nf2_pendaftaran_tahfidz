<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    use HasFactory;
    protected $fillable= [
        'menu_id',
        'konten_desc',
        'image'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function getImageAttribute($value)
    {
        return asset('konten_image/'.$value);
    }
}
