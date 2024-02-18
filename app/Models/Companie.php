<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companie extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'industry_type',
        'location',
        'employee',
        'email',
        'phone',
        'logo',
        'website',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
