<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'profile_desc'
    ];

    public function getImageAttribute($value)
    {
        return asset('profile_image/'.$value);
    }
}
