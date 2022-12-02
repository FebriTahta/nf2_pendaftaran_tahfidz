<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'profile_desc',
        'profile_nomor_admin'
    ];

    public function getImageAttribute($value)
    {
        return asset('profile_image/'.$value);
    }
}
