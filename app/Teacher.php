<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function groups()
    {
        return $this->hasMany(Group::class);
    }
}
