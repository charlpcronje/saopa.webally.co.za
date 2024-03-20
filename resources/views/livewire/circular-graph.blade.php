<div class="relative">
    <svg class="w-40 h-40">
        <circle class="text-gray-300" stroke-width="10" stroke="currentColor" fill="transparent" r="60" cx="80" cy="80" />
        <circle class="text-blue-500" stroke-width="10" stroke="currentColor" fill="transparent" r="60" cx="80" cy="80" stroke-dasharray="{{ $percentage * 2.4 }},240" />
    </svg>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <div class="text-center">
            <span class="text-3xl font-bold">{{ $percentage }}%</span>
        </div>
    </div>
</div>