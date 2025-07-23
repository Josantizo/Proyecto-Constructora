<x-guest-layout>
    <div class="container" style="max-width:400px;margin:40px auto;">
        <h2 style="text-align:center;">Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div style="margin-bottom:15px;">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" style="width:100%;padding:8px;" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div style="margin-bottom:15px;">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" style="width:100%;padding:8px;" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div style="margin-bottom:15px;">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" style="width:100%;padding:8px;" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div style="margin-bottom:15px;">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" style="width:100%;padding:8px;" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <button type="submit" style="width:100%;background:#007bff;color:#fff;padding:10px;border:none;border-radius:4px;">Register</button>
        </form>
        <div style="margin-top:20px;text-align:center;">
            <a href="/login" style="color:#007bff;text-decoration:underline;margin-right:15px;">Already have an account? Log in</a>
            <a href="/" style="color:#6c757d;text-decoration:underline;">Back to Home</a>
        </div>
    </div>
</x-guest-layout>
