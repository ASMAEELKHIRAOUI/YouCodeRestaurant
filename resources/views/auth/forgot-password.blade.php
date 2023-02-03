<x-guest-layout>
    <div id="signIn">
    <div class="mb-4 text-sm">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email">Email Adress</label>
            <input id="email" class="input shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline
            " type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{-- <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div> --}}
        <div class="text-center mt-4"><button class="btn text-center" name="signin">{{ __('Email Password Reset Link') }}</button></div>
    </form>
</div>
</x-guest-layout>
