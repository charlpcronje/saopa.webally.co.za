{{-- resources/views/livewire/left-nav-sub-button.blade.php --}}
<a
    href="{{ $link }}"
    class="flex items-center px-4 py-2 text-gray-400 hover:text-white hover:bg-gray-700"
>
    <livewire:svg-icon :icon="$icon" class="w-2 h-2 mr-2" />
    <span>{{ $text }}</span>
</a>