<?php
// app/Http/Livewire/FileUpload.php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FileUpload extends Component
{
    use WithFileUploads;

    public $file;

    protected $rules = [
        'file' => 'required|file|max:10240', // Max file size of 10MB
    ];

    public function upload()
    {
        $this->validate();

        // Move the uploaded file to the desired location
        $path = $this->file->store('uploads');

        // Perform any additional actions or database operations

        session()->flash('success', 'File uploaded successfully.');

        $this->reset('file');
    }

    public function render()
    {
        return view('livewire.file-upload');
    }
}