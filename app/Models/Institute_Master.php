<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute_Master extends Model
{
    use HasFactory;

    public $table = 'institute_masters';
    protected $id = 'institute_id';
    protected $fillable = ['institute_name'];
}
