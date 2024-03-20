<?php
// app/Models/Judge.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Judge extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function entries()
    {
        return $this->belongsToMany(Entry::class, 'entry_judge');
    }
}