<?php

namespace App\Models;

use Faker\Provider\ar_EG\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'position',
        'category_id',
        'type',
        'vacancy',
        'experience',
        'due_date',
        'benefits',
        'requirements',
        'salary',
        'tags',
        'is_active',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'due_date' => 'date',
        'is_active' => 'boolean',
    ];

    /**
     * Get the company that owns the job.
     */
    public function user(){

    return $this->belongsTo(User::class);

    }



    public function company()
    {
        return $this->user->company();
    }

    /**
     * Get the category of the job.
     */
    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }
}
