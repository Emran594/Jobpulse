<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'address', 'email', 'image', 'phone',
    ];



    public function jobApplications()
     {
     return $this->hasMany(JobApplication::class, 'user_id', 'candidate_id');
    }


    public function skills()
    {
        return $this->hasMany(Skill::class, 'user_id', 'user_id');
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class, 'user_id', 'user_id');
    }

    public function educations()
    {
        return $this->hasMany(Education::class, 'user_id', 'user_id');
    }
}

