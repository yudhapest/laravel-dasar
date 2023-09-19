<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nis',
        'email',
        'phone'
    ];

    public function class()
    {
        return $this->belongsTo(ClassRoom::class);
    }

    public function extracurriculars()
    {
        return $this->belongsToMany(Extracurricular::class, 'extracurricular_student', 'student_id', 'extracurricular_id');
    }
}
