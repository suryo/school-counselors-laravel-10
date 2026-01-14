<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counselor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'specialization'];

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }

    public function behaviorObservations()
    {
        return $this->hasMany(BehaviorObservation::class);
    }
}
