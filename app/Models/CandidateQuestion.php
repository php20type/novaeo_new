<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateQuestion extends Model
{
    use HasFactory;

    protected $table="candidate_questions";
    protected $fillable = [
        'job_id',
        'candidate_id',
        'question_id',
        'answer',
    ];
    public function jobQuestion(){
        return $this->hasOne(JobQuestion::class,'id','question_id');
    }
}
