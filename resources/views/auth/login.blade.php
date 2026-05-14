<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>BudgetWise — Sign In</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="margin:0; background:#030712; font-family: Figtree, sans-serif;">

<div style="display:flex; min-height:100vh;">

    {{-- LEFT SIDE --}}
    <div style="width:50%; position:relative; overflow:hidden; display:flex; align-items:center;">
        <img
            src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=1200&auto=format&fit=crop"
            style="position:absolute; inset:0; width:100%; height:100%; object-fit:cover;"
        />
        <div style="position:absolute; inset:0; background:linear-gradient(135deg, rgba(127,29,29,0.85), rgba(17,24,39,0.8));"></div>
        <div style="position:relative; z-index:10; padding:0 56px; color:white;">
            <div style="font-size:28px; font-weight:700; margin-bottom:16px;">💰 BudgetWise</div>
            <h2 style="font-size:48px; font-weight:800; line-height:1.2; margin-bottom:24px;">Welcome<br>Back!</h2>
            <p style="color:#d1d5db; font-size:16px; line-height:1.7; max-width:320px;">
                Track your spending, hit your goals, and stay on top of your finances — all in one place.
            </p>
        </div>
    </div>

    {{-- RIGHT SIDE --}}
    <div style="width:50%; display:flex; align-items:center; justify-content:center; background:#030712; padding:32px;">
        <div style="width:100%; max-width:420px;">

            <h3 style="font-size:28px; font-weight:700; color:white; margin-bottom:8px;">Sign in</h3>
            <p style="color:#9ca3af; font-size:14px; margin-bottom:32px;">
                Don't have an account?
                <a href="{{ route('register') }}" style="color:#4ade80; text-decoration:none; font-weight:600;">Sign up</a>
            </p>

            @if (session('status'))
                <div style="color:#4ade80; margin-bottom:16px; font-size:14px;">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div style="margin-bottom:20px;">
                    <label style="display:block; color:#9ca3af; font-size:14px; margin-bottom:8px;">Email address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                        placeholder="you@example.com"
                        style="width:100%; padding:12px 16px; background:#1f2937; border:1px solid #374151; border-radius:12px; color:white; font-size:14px; box-sizing:border-box; outline:none;"
                    />
                    @error('email')
                        <p style="color:#f87171; font-size:12px; margin-top:4px;">{{ $message }}</p>
                    @enderror
                </div>

                <div style="margin-bottom:20px;">
                    <div style="display:flex; justify-content:space-between; margin-bottom:8px;">
                        <label style="color:#9ca3af; font-size:14px;">Password</label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" style="color:#4ade80; font-size:12px; text-decoration:none;">Forgot password?</a>
                        @endif
                    </div>
                    <input type="password" name="password" required
                        placeholder="••••••••"
                        style="width:100%; padding:12px 16px; background:#1f2937; border:1px solid #374151; border-radius:12px; color:white; font-size:14px; box-sizing:border-box; outline:none;"
                    />
                    @error('password')
                        <p style="color:#f87171; font-size:12px; margin-top:4px;">{{ $message }}</p>
                    @enderror
                </div>

                <div style="display:flex; align-items:center; margin-bottom:24px;">
                    <input type="checkbox" name="remember" id="remember" style="width:16px; height:16px;">
                    <label for="remember" style="color:#9ca3af; font-size:14px; margin-left:8px;">Remember me</label>
                </div>

                <button type="submit"
                    style="width:100%; padding:14px; background:#dc2626; border:none; border-radius:12px; color:white; font-size:14px; font-weight:600; cursor:pointer; letter-spacing:0.5px;">
                    Sign In
                </button>

                <div style="display:flex; align-items:center; margin:24px 0;">
                    <div style="flex:1; height:1px; background:#1f2937;"></div>
                    <span style="color:#6b7280; font-size:12px; margin:0 16px;">or</span>
                    <div style="flex:1; height:1px; background:#1f2937;"></div>
                </div>

                <a href="{{ route('register') }}"
                    style="display:block; width:100%; padding:14px; border:1.5px solid #22c55e; border-radius:12px; color:#4ade80; font-size:14px; font-weight:600; text-align:center; text-decoration:none; box-sizing:border-box;">
                    Create an account
                </a>

            </form>
        </div>
    </div>

</div>
</body>
</html>