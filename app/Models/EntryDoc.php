<?php
// app/Models/EntryDoc.php
use Illuminate\Database\Eloquent\Model;

class EntryDoc extends Model
{
    protected $fillable = ['entry_id', 'doc_type', 'doc_name', 'doc_path'];

    public function entry()
    {
        return $this->belongsTo(Entry::class);
    }
}