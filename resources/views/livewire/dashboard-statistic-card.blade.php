{{-- resources/views/livewire/dashboard-statistic-card.blade.php --}}
<div class="bg-white rounded-lg shadow-md p-6">
    <div class="flex items-center justify-between">
        <div>
            <h3 class="text-xl font-semibold">{{ $title }}</h3>
            <p class="text-gray-500">{{ $subtitle }}</p>
        </div>
        <div class="text-4xl font-bold">{{ $value }}</div>
    </div>
</div>