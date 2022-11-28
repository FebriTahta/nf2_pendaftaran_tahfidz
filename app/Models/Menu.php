<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'menu_name',
        'menu_view',
        'menu_link',
        'image'
    ];

    public function konten()
    {
        return $this->hasMany(Konten::class);
    }

    public function getImageAttribute($value)
    {
        return asset('menu_image/'.$value);
    }
}
