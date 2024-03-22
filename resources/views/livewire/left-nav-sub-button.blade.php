{{-- resources/views/livewire/left-nav-sub-button.blade.php --}}
<a href="{{ $link }}" class="left-nav-sub-button">
    @if ($icon)
        <livewire:svg-icon :icon="$icon" class="icon-left" />
    @endif
    <span>{{ $text }}</span>
</a>