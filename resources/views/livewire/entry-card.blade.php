{{-- resources/views/livewire/entry-card.blade.php --}}
<div class="bg-white rounded-lg shadow-md p-6">
    <div class="flex justify-between items-center mb-4">
        <h3 class="text-xl font-semibold">{{ $entry->title }}</h3>
        <span class="text-gray-500">{{ $entry->created_at->format('M d, Y') }}</span>
    </div>
    <div class="mb-4">
        <p class="text-gray-600">{{ Str::limit($entry->description, 100) }}</p>
    </div>
    <div class="flex justify-between items-center">
        <div class="flex items-center">
            <span class="text-gray-500 mr-2">Status:</span>
            <span class="font-semibold {{ $entry->status === 'submitted' ? 'text-green-500' : 'text-yellow-500' }}">
                {{ ucfirst($entry->status) }}
            </span>
        </div>
        <a href="{{ route('entries.show', $entry) }}" class="text-blue-500 hover:underline">View Details</a>
    </div>
</div>