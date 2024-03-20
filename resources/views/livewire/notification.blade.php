<div class="fixed bottom-4 right-4 z-50">
    @if (session()->has('success'))
        <div class="bg-green-500 text-white px-4 py-3 rounded-lg shadow-md mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="bg-red-500 text-white px-4 py-3 rounded-lg shadow-md mb-4">
            {{ session('error') }}
        </div>
    @endif
</div>