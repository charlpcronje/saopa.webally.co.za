<?php
// app/Models/EntryDoc.php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class EntryDocument extends Model
{
    protected $fillable = ['entry_id', 'doc_type', 'doc_name', 'doc_path'];

    public function entry()
    {
        return $this->belongsTo(Entry::class);
    }
}