{{-- resources/views/layouts/dashboard/left-nav-button.blade.php --}}
<div>
    @if ($link)
        <a href="{{ $link }}" class="left-nav-button">
            <span>{{ $text }}</span>
            @if ($icon)
                <livewire:svg-icon :icon="$icon" class="icon-right" />
            @endif
        </a>
    @else
        <button
            wire:click="toggleSubButtons"
            aria-expanded="{{ $isExpanded ? 'true' : 'false' }}"
            class="left-nav-button"
        >
            <span>{{ $text }}</span>
            <div class="icon-container">
                @if ($icon)
                    <livewire:svg-icon :icon="$icon" class="icon-right" />
                @endif
                @if ($hasSubButtons)
                    <livewire:svg-icon
                        icon="chevron_down"
                        class="icon-right chevron {{ $isExpanded ? 'rotate-180' : '' }}"
                    />
                @endif
            </div>
        </button>
        @if ($hasSubButtons && $isExpanded)
            <div class="sub-button-container">
                @foreach ($subButtons as $subButton)
                    <livewire:left-nav-sub-button :text="$subButton['text']" :link="$subButton['link']" />
                @endforeach
            </div>
        @endif
    @endif
</div>