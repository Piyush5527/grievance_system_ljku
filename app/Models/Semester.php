<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;
    protected $id = 'semester_id';
    protected $fillable = ['semester_no'];
    public $timestamps = false;

}
