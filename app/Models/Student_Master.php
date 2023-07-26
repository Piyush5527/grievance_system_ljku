<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Master extends Model
{
    use HasFactory;
    protected $table = 'student_masters';
    protected $id = 'enrollment_no';
    protected $fillable = ['first_name', 'last_name','middle_name','phone_number','department_ref_id'];
}
