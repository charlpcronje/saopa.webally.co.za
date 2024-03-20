{{-- resources/views/auth/register.blade.php --}}
<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-2xl p-6 bg-white rounded"> <!-- Adjusted max width for two columns -->
            <div class="login-title text-center">
                <h1 class="font-bold"><strong>SAPOA Awards</strong><span class="dashboard text-gray-700"> REGISTRATION</span></h1>
            </div>

            <form method="POST" action="{{ route('register') }}" class="form-container">
                @csrf
                <div class="flex flex-wrap -mx-3"> <!-- Added for two-column layout -->
                    <div class="w-full md:w-1/2 px-3 mb-4"> <!-- Column 1 -->
                        <div class="mb-4 flex justify-center">
                            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Name" class="input-field @error('name') is-invalid @enderror" />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 flex justify-center">
                            <input id="surname" type="text" name="surname" value="{{ old('surname') }}" required placeholder="Surname" class="input-field @error('surname') is-invalid @enderror" />
                            @error('surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 flex justify-center">
                            <input id="company" type="text" name="company" value="{{ old('company') }}" required placeholder="Company" class="input-field @error('company') is-invalid @enderror" />
                            @error('company')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 px-3"> <!-- Column 2 -->
                        <div class="mb-4 flex justify-center">
                            <input id="mobile_number" type="text" name="mobile_number" value="{{ old('mobile_number') }}" required placeholder="Mobile Number" class="input-field @error('mobile_number') is-invalid @enderror" />
                            @error('mobile_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 flex justify-center">
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="Email" class="input-field @error('email') is-invalid @enderror" />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 flex justify-center">
                            <input id="password" type="password" name="password" required placeholder="Password" class="input-field @error('password') is-invalid @enderror" />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-6 flex justify-center">
                            <input id="password_confirmation" type="password" name="password_confirmation" required placeholder="Confirm Password" class="input-field" />
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <x-primary-button class="w-full red-button-class">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
                <div class="flex flex-col items-start text-sm">
                    <a href="{{ route('login') }}" class="link-register font-semibold hover:underline">{{ __('Already have an account? Login') }}</a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
