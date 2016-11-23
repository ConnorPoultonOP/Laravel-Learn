<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dm extends Model
{
    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
