{{-- resources/views/livewire/judge/dashboard.blade.php --}}
<div>
    <h2 class="text-2xl font-semibold mb-4">Judge Dashboard</h2>
    
    <!-- Assigned Entries -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h3 class="text-lg font-semibold mb-4">Assigned Entries</h3>
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Submitted By</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($assignedEntries as $entry)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $entry->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $entry->user->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $entry->created_at->format('M d, Y') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('judge.entries.show', $entry) }}" class="text-indigo-600 hover:text-indigo-900">Review</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <!-- Rating Criteria -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold mb-4">Rating Criteria</h3>
        <ul class="list-disc pl-6">
            @foreach ($ratingCriteria as $criterion)
                <li class="mb-2">{{ $criterion->name }}</li>
            @endforeach
        </ul>
    </div>
</div>