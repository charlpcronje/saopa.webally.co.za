<?php
// app/Models/EntryArchitecturalDrawing.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EntryArchitecturalDrawing extends Model
{
    // ...

    public function entry()
    {
        return $this->belongsTo(Entry::class);
    }
}