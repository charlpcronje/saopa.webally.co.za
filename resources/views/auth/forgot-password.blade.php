{{-- resources/views/auth/forgot-password.blade.php --}}
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block font-medium text-sm text-gray-700">{{ __('Email') }}</label>
            <input id="email" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="email" name="email" wire:model.defer="email" required autofocus />
            @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="w-full red-button-class">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
            
        </div>
        
    </form>
    <div class="w-full mt-2">
        <a href="{{ route('login') }}" class="link-forgot-password font-semibold hover:underline mb-2">{{ __('Back to Login') }}</a>
    </div>
</x-guest-layout>