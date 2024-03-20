{{--  resources/views/livewire/header-dropdown.blade.php --}}
<div class="inline-flex relative">
    <button class="text-white focus:outline-none" wire:click="toggleDropdown">
        <livewire:svg-icon :icon="$icon" class="w-6 h-6" />
    </button>

    @if ($isOpen)
        <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10">
            <!-- Dropdown menu items -->
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Option 1</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Option 2</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Option 3</a>
        </div>
    @endif
</div>