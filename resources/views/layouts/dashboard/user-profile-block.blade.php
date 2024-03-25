{{-- resources/views/layouts/dashboard/user-profile-block.blade.php --}}
<div class="inline-flex items-center justify-between w-full user-profile-block">
    <div class="flex items-center">
        <livewire:svg-icon icon="profile_circle" class="w-8 h-8" />
    </div>
    <div class="flex flex-col">
        <div class="text-white font-bold text-xs padding-left-5">Administrator</div>
        <div class="flex items-center padding-left-5">
            <livewire:svg-icon icon="green-dot" class="w-2 h-2 mr-2" />
            <div class="text-white text-xs margin-left-5"> Online</div>
        </div>
    </div>
</div>