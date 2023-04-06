<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $table="candidates";

    protected $fillable = [
        'user_id',
        'job_id',
        'name',
        'mobile',
        'email',
        'country',
        'experience',
        'profile_link',
        'resume',
        'portfolio',
        'profile',
        'status',
        'result',
        'interview_date',
        'question1',
        'question2',
        'question3',
        'question4',
        'question5',

    ];
    public function job(){
        return $this->hasOne(RecruterJob::class,'id','job_id');
    }
}
