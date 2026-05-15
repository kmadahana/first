<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>BudgetWise - Forgot Password</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="margin:0; background:#030712; font-family: Figtree, sans-serif;">

<div style="display:flex; min-height:100vh;">

    {{-- LEFT SIDE --}}
    <div style="width:50%; position:relative; overflow:hidden; display:flex; align-items:center;">
        <img
            src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=1200&auto=format&fit=crop"
            style="position:absolute; inset:0; width:100%; height:100%; object-fit:cover;"
            alt=""
        />
        <div style="position:absolute; inset:0; background:linear-gradient(135deg, rgba(22,101,52,0.85), rgba(17,24,39,0.82));"></div>
        <div style="position:relative; z-index:10; padding:0 56px; color:white;">
            <div style="font-size:28px; font-weight:700; margin-bottom:16px;">BudgetWise</div>
            <h2 style="font-size:48px; font-weight:800; line-height:1.2; margin-bottom:24px;">Reset Your<br>Password</h2>
            <p style="color:#d1d5db; font-size:16px; line-height:1.7; max-width:340px;">
                Enter your email and we will send you a secure link to choose a new password.
            </p>
        </div>
    </div>

    {{-- RIGHT SIDE --}}
    <div style="width:50%; display:flex; align-items:center; justify-content:center; background:#030712; padding:32px;">
        <div style="width:100%; max-width:420px;">

            <h3 style="font-size:28px; font-weight:700; color:white; margin-bottom:8px;">Forgot password?</h3>
            <p style="color:#9ca3af; font-size:14px; line-height:1.6; margin-bottom:28px;">
                No problem. Enter your email address and we will send you a password reset link.
            </p>

            @if (session('status'))
                <div style="color:#4ade80; margin-bottom:16px; font-size:14px; line-height:1.5;">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div style="margin-bottom:24px;">
                    <label for="email" style="display:block; color:#9ca3af; font-size:14px; margin-bottom:8px;">Email address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                        placeholder="you@example.com"
                        style="width:100%; padding:12px 16px; background:#1f2937; border:1px solid #374151; border-radius:12px; color:white; font-size:14px; box-sizing:border-box; outline:none;"
                    />
                    @error('email')
                        <p style="color:#f87171; font-size:12px; margin-top:6px;">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    style="width:100%; padding:14px; background:#16a34a; border:none; border-radius:12px; color:white; font-size:14px; font-weight:600; cursor:pointer; letter-spacing:0.5px;">
                    Email Password Reset Link
                </button>

                <a href="{{ route('login') }}"
                    style="display:block; width:100%; padding:14px; margin-top:16px; border:1.5px solid #dc2626; border-radius:12px; color:#f87171; font-size:14px; font-weight:600; text-align:center; text-decoration:none; box-sizing:border-box;">
                    Back to sign in
                </a>
            </form>
        </div>
    </div>

</div>
</body>
</html>
