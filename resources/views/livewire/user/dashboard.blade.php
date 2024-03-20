<div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-semibold mb-4">Entries</h3>
            <p class="text-4xl font-bold">{{ $totalEntries }}</p>
            <p class="mt-2">{{ $completedEntries }} of {{ $totalEntries }} entries completed</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-semibold mb-4">Invoices</h3>
            <p class="text-4xl font-bold">{{ $paidInvoices }} of {{ $totalInvoices }} invoices paid</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-semibold mb-4">Competitions</h3>
            <p class="text-4xl font-bold">No active competitions</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-semibold mb-4">Latest Entries</h3>
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="py-2 px-4 bg-gray-100">Title</th>
                        <th class="py-2 px-4 bg-gray-100">Date Created</th>
                        <th class="py-2 px-4 bg-gray-100">Status</th>
                        <th class="py-2 px-4 bg-gray-100">Missing Info</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($entries as $entry)
                        <tr>
                            <td class="py-2 px-4">{{ $entry->title }}</td>
                            <td class="py-2 px-4">{{ $entry->created_at->format('Y-m-d') }}</td>
                            <td class="py-2 px-4">{{ ucfirst($entry->status) }}</td>
                            <td class="py-2 px-4">{{ $entry->missing_info }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                <a href="{{ route('entries.create') }}" class="inline-block bg-blue-500 text-white py-2 px-4 rounded">Add Entry</a>
                <a href="{{ route('entries.index') }}" class="inline-block bg-gray-200 text-gray-700 py-2 px-4 rounded">View All Entries</a>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-semibold mb-4">Latest Invoices</h3>
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="py-2 px-4 bg-gray-100">Invoice Number</th>
                        <th class="py-2 px-4 bg-gray-100">Date Created</th>
                        <th class="py-2 px-4 bg-gray-100">Sent To</th>
                        <th class="py-2 px-4 bg-gray-100">Status</th>
                        <th class="py-2 px-4 bg-gray-100"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($invoices as $invoice)
                        <tr>
                            <td class="py-2 px-4">{{ $invoice->invoice_number }}</td>
                            <td class="py-2 px-4">{{ $invoice->created_at->format('Y-m-d') }}</td>
                            <td class="py-2 px-4">{{ $invoice->sent_to }}</td>
                            <td class="py-2 px-4">{{ ucfirst($invoice->status) }}</td>
                            <td class="py-2 px-4">
                                <a href="{{ route('invoices.show', $invoice) }}" class="text-blue-500">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                <a href="{{ route('invoices.index') }}" class="inline-block bg-gray-200 text-gray-700 py-2 px-4 rounded">View All Invoices</a>
            </div>
        </div>
    </div>
</div>