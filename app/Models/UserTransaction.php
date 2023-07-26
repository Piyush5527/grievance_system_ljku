<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTransaction extends Model
{
    use HasFactory;
    protected $table = 'user_transaction';
    protected $fillable = ['enrollment_ref_id','faculty_ref_id','email','password','type'];
}
