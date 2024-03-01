<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'title', 'group', 'year', 'result'
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }

    protected $table = 'educations';
}
