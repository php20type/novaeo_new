<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecruterJob extends Model {
    use HasFactory;
    protected $table = 'recruter_job';

    protected $fillable = [
        'title',
        'specification',
        'location',
        'work_place',
        'experience',
        'salary',
        'schedule',
        'skill1',
        'skill2',
        'skill3',
        'employment_type',
        'other_description',
        'upload_file',
        'vacancy',
        'payout',
        'status'
    ];

    public function candidateQuestions() {
        return $this->hasMany( CandidateQuestion::class, 'job_id', 'id' );
    }

    public function jobQuestions() {
        return $this->hasMany( JobQuestion::class, 'job_id', 'id' );
    }

    public function Candidate() {
        return $this->hasMany( Candidate::class, 'job_id', 'id' );
    }
}
