{{-- resources/views/livewire/sorting.blade.php --}}
<div class="mb-4">
    <label for="sorting" class="block text-gray-700 font-bold mb-2">Sort By</label>
    <select id="sorting" wire:model="selectedSorting" class="form-select w-full">
        <option value="created_at_desc">Newest First</option>
        <option value="created_at_asc">Oldest First</option>
        <option value="title_asc">Title (A-Z)</option>
        <option value="title_desc">Title (Z-A)</option>
    </select>
</div>