<x-guest-layout>
    <div id="signIn">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <p class="signin text-center"> SIGN UP </p>
        <!-- Name -->
        <div>
            <label for="name">Name</label>
            <input id="name" class="input shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label for="email">Email Adress</label>
            <input id="email" class="input shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password">Password</label>

            <input id="password" class="input shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation">Confirm Password</label>

            <input id="password_confirmation" class="input shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="items-center mt-4">
            {{-- <a class="underline text-sm" href="{{ route('login') }}">
                {{ __('Already have an account?') }}
            </a> --}}

            <div class="text-center mt-3"><button class="btn text-center">{{ __('SIGN UP') }}</button></div>
            <div class="signup text-center mt-4">
                Already have an account? <a class="link underline text-sm" href="{{ route('login') }}">
                    {{ __('Log in!') }}
                </a>
            </div>

            {{-- <x-primary-button class="btn ml-4">
                {{ __('SIGN UP') }}
            </x-primary-button> --}}
        </div>
        <div class="privacy text-center mt-4">
            By clicking on "sign in now" you agree to <a class="link" href="">Privacy Policy</a>
        </div>
    </form>
</div>
</x-guest-layout>
