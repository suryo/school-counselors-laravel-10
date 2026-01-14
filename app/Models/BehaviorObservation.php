<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BehaviorObservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id', 
        'counselor_id', 
        'observation_date', 
        'behavior_type', 
        'location', 
        'description', 
        'action_taken'
    ];

    protected $casts = [
        'observation_date' => 'datetime',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function counselor()
    {
        return $this->belongsTo(Counselor::class);
    }
}
