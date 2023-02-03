<x-guest-layout>
    <div id="signIn">
    <form method="POST" action="{{ route('password.store') }}">
        @csrf
        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <label for="email">Email Address</label>
            <input id="email" class="input shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password">Password</label>
            <input id="password" class="input shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" required />
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

        {{-- <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div> --}}
        <div class="text-center mt-3"><button class="btn text-center">{{ __('Reset Password') }}</button></div>
    </form>
    </div>
</x-guest-layout>
