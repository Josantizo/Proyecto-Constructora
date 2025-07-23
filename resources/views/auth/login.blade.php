<x-guest-layout>
    <h2 class="auth-title">Login</h2>
    @if (session('status'))
        <div style="color: green; text-align: center; margin-bottom: 15px;">
            {{ session('status') }}
        </div>
    @endif
    @if ($errors->any())
        <div style="color: red; text-align: center; margin-bottom: 15px;">
            <ul style="list-style: none; padding: 0;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div style="margin-bottom:15px;">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required autofocus style="width:100%;padding:8px;">
        </div>
        <div style="margin-bottom:15px;">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required style="width:100%;padding:8px;">
        </div>
        <div style="margin-bottom:15px; text-align:left;">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember me</label>
        </div>
        <button type="submit" style="width:100%;background:#007bff;color:#fff;padding:10px;border:none;border-radius:4px;">Login</button>
        <div style="margin-top:10px; text-align:right;">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" style="color:#007bff;text-decoration:underline;">Forgot your password?</a>
            @endif
        </div>
    </form>
    <div style="margin-top:20px;text-align:center;">
        <a href="/register" style="color:#007bff;text-decoration:underline;margin-right:15px;">Don't have an account? Register here</a>
        <a href="/" style="color:#6c757d;text-decoration:underline;">Back to Home</a>
    </div>
</x-guest-layout>
