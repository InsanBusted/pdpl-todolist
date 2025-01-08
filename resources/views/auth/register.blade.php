<x-guest-layout>
    <div class="login-card">
        <h2 class="text-white text-center text-3xl font-semibold mb-6">{{ __('Create Your Account') }}</h2>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <x-input-label for="name" :value="__('Name')" class="text-white" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-400" />
            </div>

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" class="text-white" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Password')" class="text-white" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-6">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-white" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-400" />
            </div>

            <div class="flex items-center justify-end mt-4">
            <a href="{{ route('login') }}" class="underline text-sm text-white hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
    {{ __('Already registered?') }}
</a>

<x-primary-button class="ms-4 btn btn-login btn-lg text-indigo-600 border-indigo-600 bg-white hover:bg-indigo-600 hover:text-white">
    {{ __('Register') }}
</x-primary-button>




            </div>
        </form>
    </div>

    <!-- Custom Styles -->
    <style>
        .login-card {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
        }

        .form-control:focus {
            border-color: #2575fc;
            box-shadow: 0 0 0 0.2rem rgba(37, 117, 252, 0.25);
        }

        .btn-login {
            background-color: #2575fc;
            border-color: #2575fc;
        }

        .btn-login:hover {
            background-color: #1d64c2;
            border-color: #1d64c2;
        }

        .error-message {
            color: #ff5e57;
            font-size: 0.875rem;
        }

        .text-white {
            color: white;
        }

        .underline {
            text-decoration: underline;
        }
    </style>
</x-guest-layout>
