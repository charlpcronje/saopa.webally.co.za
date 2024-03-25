{{-- resources/views/livewire/login-form.blade.php --}}
<div class="w-full max-w-md p-6 bg-white rounded">
    
    <div class="login-title text-center">
        <h1 class="font-bold"><strong>SAPOA Awards</strong><span class="dashboard text-gray-700"> DASHBOARD</span></h1>
    </div>

    <form wire:submit.prevent="login" class="form-container">
        <div>
            <div class="mb-4 flex justify-center">
                <input id="email" type="text" wire:model.defer="email" required autofocus placeholder="Email" class="input-field" />
            </div>
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
            <div class="mb-6">
                <input id="password" type="password" wire:model.defer="password" required placeholder="Password" class="input-field" />
            </div>
            @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-6">
            <x-primary-button class="w-full red-button-class">
                {{ __('Sign In') }}
            </x-primary-button>
        </div>
        <div class="flex flex-col items-start text-sm">
            <a href="{{ route('password.request') }}" class="link-forgot-password font-semibold hover:underline mb-2">{{ __('Forgot Password') }}</a>
            <a href="{{ route('register') }}" class="link-register font-semibold hover:underline">{{ __('Register New Membership') }}</a>
        </div>
    </form>
</div>