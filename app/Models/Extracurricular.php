<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extracurricular extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'extracurricular_student', 'extracurricular_id', 'student_id');
    }
}
