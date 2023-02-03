<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 mum" :status="session('status')" />
    <div id="signIn">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <p class="signin text-center"> SIGN IN </p>
        <!-- Email Address -->
        <div>
            <label for="email" >Email address</label>
            <input id="email" class="input shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password">Password</label>

            <input id="password" class="input shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="" name="remember">
                <span class="ml-2 text-sm">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="password justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="link" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            {{-- <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button> --}}
        </div>
        <div class="text-center mt-3"><button class="btn text-center" name="signin">{{ __('SIGN IN NOW') }}</button></div>
        <div class="signup text-center mt-4">
            Don't have an account? <a class="link" href="register">Create one!</a>
        </div>
        <div class="privacy text-center mt-4">
            By clicking on "sign in now" you agree to <a class="link" href="">Privacy Policy</a>
        </div>

        {{-- <p class="signin text-center"> SIGN IN </p>
        <div class="email pt-3">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus >
        </div>
        <div class="password pt-3">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="password pt-3">
            @if (Route::has('password.request'))
            <a class="link" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
            @endif
        </div>
        <div class="row justify-content-center mt-3"><button class="btn" name="signin">{{ __('Log in') }}</button></div>
        <div class="signup text-center mt-4">
            Don't have an account? <a class="link" href="#">Create one!</a>
        </div>
        <div class="privacy text-center mt-4">
            By clicking on "sign in now" you agree to <a class="link" href="">Privacy Policy</a>
        </div>
 --}}

    </form></div>
</x-guest-layout>




{{-- <body>
    <div class="row-lg h-100 d-flex align-items-center p-5 flex-wrap">
        <div class="col-lg-4"></div>
        <div id="signIn" class="col-lg-4">
            <form method="POST" id="form">
                <p class="signin text-center"> SIGN IN </p>
                <div class="email pt-3">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus >
                </div>
                <div class="password pt-3">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="password pt-3">
                    @if (Route::has('password.request'))
                    <a class="link" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                    @endif
                </div>
                <div class="row justify-content-center mt-3"><button class="btn" name="signin">{{ __('Log in') }}</button></div>
                <div class="signup text-center mt-4">
                    Don't have an account? <a class="link" href="#">Create one!</a>
                </div>
                <div class="privacy text-center mt-4">
                    By clicking on "sign in now" you agree to <a class="link" href="">Privacy Policy</a>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html> --}}