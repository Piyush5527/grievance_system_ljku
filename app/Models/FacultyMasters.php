<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyMasters extends Model
{
    use HasFactory;
    protected $table = 'faculty_masters';
    protected $id = 'faculty_id';
    protected $fillable = ['first_name', 'last_name','middle_name','phone_number','designation','department_ref_id'];
}
