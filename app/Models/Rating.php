<?php
// app/Models/Rating.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    // ...

    public function entry()
    {
        return $this->belongsTo(Entry::class);
    }

    public function judge()
    {
        return $this->belongsTo(Judge::class);
    }

    public function criteria()
    {
        return $this->belongsTo(Criteria::class);
    }
}