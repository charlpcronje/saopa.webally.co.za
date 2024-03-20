<?php
// app/Models/Criteria.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    // ...

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}