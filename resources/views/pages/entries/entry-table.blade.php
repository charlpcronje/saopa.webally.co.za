{{-- resources/views/pages/entries/entry-table.blade.php --}}
<div>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">Entry Title</th>
                <th class="px-4 py-2">Candidate</th>
                <th class="px-4 py-2">Date Created</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Invoice Paid</th>
                <th class="px-4 py-2">Submission Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entries as $entry)
                <tr>
                    <td class="border px-4 py-2">{{ $entry->title }}</td>
                    <td class="border px-4 py-2">{{ $entry->user->name }}</td>
                    <td class="border px-4 py-2">{{ $entry->created_at->format('Y-m-d') }}</td>
                    <td class="border px-4 py-2">{{ $entry->user->email }}</td>
                    <td class="border px-4 py-2">{{ $entry->invoice_paid ? 'Yes' : 'No' }}</td>
                    <td class="border px-4 py-2">{{ $entry->submission_status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $entries->links() }}
</div>