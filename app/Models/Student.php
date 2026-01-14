<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'name', 'gender', 'class', 'address'];

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }

    public function behaviorObservations()
    {
        return $this->hasMany(BehaviorObservation::class);
    }
}
