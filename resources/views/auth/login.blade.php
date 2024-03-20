{{-- resources/views/auth/login.blade.php --}}
<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md p-6 bg-white rounded">
            <div class="login-title text-center">
                <h1 class="font-bold"><strong>SAPOA Awards</strong><span class="dashboard text-gray-700"> DASHBOARD</span></h1>
            </div>

            <form method="POST" action="{{ route('login') }}" class="form-container">
                @csrf
                <div>
                    <div class="mb-4 flex justify-center">
                        <input id="email" type="text" name="email" required autofocus placeholder="Email" class="input-field" />
                    </div>
                    <div class="mb-6">
                        <input id="password" type="password" name="password" required placeholder="Password" class="input-field" />
                    </div>
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
    </div>
</x-guest-layout>
