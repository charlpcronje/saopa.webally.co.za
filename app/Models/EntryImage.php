<?php
// app/Models/EntryImage.php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class EntryImage extends Model
{
    protected $fillable = ['entry_id', 'image_type', 'image_name', 'image_path'];

    public function entry()
    {
        return $this->belongsTo(Entry::class);
    }
}