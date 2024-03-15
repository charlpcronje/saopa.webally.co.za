{{-- resources/views/livewire/left-nav-button.blade.php --}}
<div>
    @if ($link)
        <a
            href="{{ $link }}"
            class="flex items-center justify-between w-full px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none"
        >
            <div class="flex items-center">
                <livewire:svg-icon :icon="$icon" class="w-5 h-5 mr-2" />
                <span>{{ $text }}</span>
            </div>
        </a>
    @else
        <button
            wire:click="toggleSubButtons"
            class="flex items-center justify-between w-full px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none"
        >
            <div class="flex items-center">
                <livewire:svg-icon :icon="$icon" class="w-5 h-5 mr-2" />
                <span>{{ $text }}</span>
            </div>
            @if ($hasSubButtons)
                <livewire:svg-icon
                    icon="chevron_down"
                    class="w-4 h-4 ml-2 transition-transform duration-200 transform"
                    :class="{ 'rotate-180': $subButtonsVisible }"
                />
            @endif
        </button>

        @if ($hasSubButtons && $subButtonsVisible)
            <div class="ml-4 mt-1 space-y-1">
                {{ $slot }}
            </div>
        @endif
    @endif
</div>