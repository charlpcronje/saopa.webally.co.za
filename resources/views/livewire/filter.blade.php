{{-- resources/views/livewire/filter.blade.php --}}
<div class="mb-4">
    <label for="filter" class="block text-gray-700 font-bold mb-2">Filter</label>
    <select id="filter" wire:model="selectedFilter" class="form-select w-full">
        <option value="">All</option>
        <option value="submitted">Submitted</option>
        <option value="in_review">In Review</option>
        <option value="approved">Approved</option>
        <option value="rejected">Rejected</option>
    </select>
</div>