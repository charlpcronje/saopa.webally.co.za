{{-- resources/views/dashboard.blade.php --}}

@php
$user = Auth::user();
@endphp

@if ($user->isAdmin())
    @livewire('admin.dashboard')
@elseif ($user->isJudge())
    @livewire('judge.dashboard')
@elseif ($user->isUser())
    @livewire('user.dashboard')
@else
    {{-- Handle unauthorized access or redirect as necessary --}}
    <p>Access Denied</p>
@endif
