<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRoles extends Model
{
    use HasFactory;
    protected $fillable = ['role_id_ref','user_id_ref'];
    public $timestamps = false;
}
