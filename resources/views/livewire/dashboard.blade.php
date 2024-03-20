<div>
    <div class="grid grid-cols-3 gap-4">
        <div>
            <h2>Entries</h2>
            <div class="text-4xl">{{ $entries }}</div>
        </div>

        <div>
            <h2>Invoices</h2>
            <div class="text-4xl">{{ $invoices }}</div>
        </div>

        <div>
            <h2>Judges</h2>
            <div class="text-4xl">{{ $judges }}</div>
        </div>
    </div>

    <div class="mt-8">
        <h2>Recently Active Users</h2>
        <ul>
            @foreach ($recentlyActiveUsers as $user)
                <li>
                    <span>{{ $user->name }}</span>
                    <span>{{ $user->last_login_at }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>