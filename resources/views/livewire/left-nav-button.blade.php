{{-- resources/views/livewire/left-nav-button.blade.php - Iteration 2 - A+ --}}
<div>
    {{-- Check if this is a link or a button with sub-buttons --}}
    @if ($link)
        {{-- Render as a link if there is a link provided --}}
        <a href="{{ $link }}" class="flex items-center justify-between w-full px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none">
            <div class="flex items-center">
                <livewire:svg-icon :icon="$icon" class="w-5 h-5 mr-2" />
                <span>{{ $text }}</span>
            </div>
        </a>
    @else
        {{-- Render as a button if sub-buttons are present --}}
        <button 
            wire:click="toggleSubButtons"
            aria-expanded="{{ $subButtonsVisible ? 'true' : 'false' }}"
            class="flex items-center justify-between w-full px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none"
        >
            <div class="flex items-center">
                <livewire:svg-icon :icon="$icon" class="w-5 h-5 mr-2" />
                <span>{{ $text }}</span>
            </div>
            {{-- Conditionally show the dropdown icon if there are sub-buttons --}}
            @if ($hasSubButtons)
                <livewire:svg-icon
                    icon="chevron_down"
                    class="w-4 h-4 ml-2 transition-transform duration-200 transform {{ $subButtonsVisible ? 'rotate-180' : '' }}"
                />
            @endif
        </button>
        {{-- Render the sub-buttons if they are set to be visible --}}
        @if ($hasSubButtons && $subButtonsVisible)
            <div class="ml-4 mt-1 space-y-1">
                {{ $slot }} {{-- Sub-buttons will be injected here --}}
            </div>
        @endif
    @endif
</div>
