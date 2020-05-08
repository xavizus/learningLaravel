<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
