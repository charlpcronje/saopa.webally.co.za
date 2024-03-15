{{-- resources/views/components/auth-card.blade.php --}}
<div {{ $attributes->merge(['class' => 'max-w-md w-full space-y-8']) }}>
    <div>
        {{ $logo ?? '' }}
    </div>
    <div class="rounded-lg bg-white px-6 py-8 shadow-lg text-left">
        {{ $slot }}
    </div>
</div>
