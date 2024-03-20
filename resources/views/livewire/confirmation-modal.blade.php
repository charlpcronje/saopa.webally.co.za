<div class="fixed z-10 inset-0 overflow-y-auto" style="display: {{ $show ? 'block' : 'none' }}">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-xl font-semibold mb-4">{{ $title }}</h3>
            <p class="mb-4">{{ $message }}</p>
            <div class="flex justify-end">
                <button wire:click="cancel" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2">Cancel</button>
                <button wire:click="confirm" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Confirm</button>
            </div> 
        </div> 
    </div> 
</div>