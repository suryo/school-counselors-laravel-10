<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable = ['counselor_id', 'student_id', 'category_id', 'session_date', 'notes', 'status'];

    protected $casts = [
        'session_date' => 'datetime',
    ];

    public function counselor()
    {
        return $this->belongsTo(Counselor::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
