<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = ["name", "mobile", "gender", "state", "maritalStatus", "dob"];
}
