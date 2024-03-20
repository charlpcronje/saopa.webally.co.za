<div>
    <h2 class="text-2xl font-semibold mb-4">Admin Dashboard</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
        <!-- Entries Statistics -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold mb-4">Entries</h3>
            <div class="flex items-center justify-between">
                <span class="text-3xl font-bold">{{ $totalEntries }}</span>
                <livewire:circular-graph :percentage="$entriesPercentage" />
            </div>
        </div>
        
        <!-- Invoices Statistics -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold mb-4">Invoices</h3>
            <div class="flex items-center justify-between">
                <span class="text-3xl font-bold">{{ $totalInvoices }}</span>
                <livewire:circular-graph :percentage="$invoicesPercentage" />
            </div>
        </div>
        
        <!-- Judges Statistics -->
        <div class="bg-white rounded-lg shadow md p-6">
            <h3 class="text-lg font-semibold mb-4">Judges</h3>
        <div class="flex items-center justify-between">
            <span class="text-3xl font-bold">{{ $totalJudges }}</span>
            <livewire:circular-graph :percentage="$judgesPercentage" />
        </div>
    </div>
            <!-- Users Statistics -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold mb-4">Users</h3>
        <div class="flex items-center justify-between">
            <span class="text-3xl font-bold">{{ $totalUsers }}</span>
            <livewire:circular-graph :percentage="$usersPercentage" />
        </div>
    </div>
</div>

<!-- Recent Entries -->
<div class="bg-white rounded-lg shadow-md p-6 mb-8">
    <h3 class="text-lg font-semibold mb-4">Recent Entries</h3>
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Submitted By</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($recentEntries as $entry)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $entry->title }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $entry->user->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $entry->created_at->format('M d, Y') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $entry->status === 'submitted' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                            {{ ucfirst($entry->status) }}
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- User Management -->
<div class="bg-white rounded-lg shadow-md p-6">
    <h3 class="text-lg font-semibold mb-4">User Management</h3>
    <!-- Add user management functionalities -->
</div>