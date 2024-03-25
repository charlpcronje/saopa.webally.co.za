{{-- resources/views/ui/file-upload.blade.php --}}
<div>
    <div class="mb-4">
        <label for="file" class="block text-gray-700 font-bold mb-2">Select File</label>
        <input type="file" id="file" wire:model="file" class="form-input w-full">
        @error('file') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
    </div>
    
    @if ($file)
        <div class="mb-4">
            <p class="text-gray-700 font-bold mb-2">Selected File:</p>
            <p>{{ $file->getClientOriginalName() }}</p>
        </div>
        
        <div class="mb-4" wire:loading wire:target="file">
            <progress max="100" class="w-full"></progress>
        </div>
    @endif
    
    @if (session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    
    @if (session()->has('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif
    
    <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" wire:click="upload">
        Upload
    </button>
</div>