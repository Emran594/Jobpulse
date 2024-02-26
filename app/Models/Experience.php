<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'title', 'from_date', 'to_date', 'description', 'responsibility'
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
