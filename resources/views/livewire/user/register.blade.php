{{-- resources/views/livewire/auth/register.blade.php --}}
<div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-2xl p-6 bg-white rounded">
        <div class="login-title text-center">
            <h1 class="font-bold"><strong>SAPOA Awards</strong><span class="dashboard text-gray-700"> REGISTRATION</span></h1>
        </div>

        <form wire:submit.prevent="register" class="form-container">
            <div class="mb-4 flex justify-center">
                <input wire:model.defer="name" type="text" required autofocus placeholder="Name" class="input-field @error('name') is-invalid @enderror" />
                @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4 flex justify-center">
                <input wire:model.defer="surname" type="text" required placeholder="Surname" class="input-field @error('surname') is-invalid @enderror" />
                @error('surname') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4 flex justify-center">
                <input wire:model.defer="email" type="email" required placeholder="Email" class="input-field @error('email') is-invalid @enderror" />
                @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4 flex justify-center">
                <input wire:model.defer="password" type="password" required placeholder="Password" class="input-field @error('password') is-invalid @enderror" />
                @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="mb-6 flex justify-center">
                <input wire:model.defer="password_confirmation" type="password" required placeholder="Confirm Password" class="input-field" />
            </div>
            <div class="mb-6">
                <x-primary-button class="w-full red-button-class">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
            <div class="flex flex-col items-start text-sm text-center">
                <a href="{{ route('login') }}" class="link-register font-semibold hover:underline">Already have an account? Login</a>
            </div>
        </form>
    </div>
</div>
