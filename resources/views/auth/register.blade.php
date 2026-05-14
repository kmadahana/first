<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>BudgetWise — Register</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="margin:0; background:#030712; font-family: Figtree, sans-serif;">

<div style="display:flex; min-height:100vh;">

    {{-- LEFT SIDE --}}
    <div style="width:50%; position:relative; overflow:hidden; display:flex; align-items:center;">
        <img
            src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=1200&auto=format&fit=crop"
            style="position:absolute; inset:0; width:100%; height:100%; object-fit:cover;"
        />
        <div style="position:absolute; inset:0; background:linear-gradient(135deg, rgba(20,83,45,0.85), rgba(17,24,39,0.8));"></div>
        <div style="position:relative; z-index:10; padding:0 56px; color:white;">
            <div style="font-size:28px; font-weight:700; margin-bottom:16px;">💰 BudgetWise</div>
            <h2 style="font-size:48px; font-weight:800; line-height:1.2; margin-bottom:24px;">Start Your<br>Journey!</h2>
            <p style="color:#d1d5db; font-size:16px; line-height:1.7; max-width:320px;">
                Join thousands of people who are already taking control of their finances with BudgetWise.
            </p>
        </div>
    </div>

    {{-- RIGHT SIDE --}}
    <div style="width:50%; display:flex; align-items:center; justify-content:center; background:#030712; padding:32px;">
        <div style="width:100%; max-width:420px;">

            <h3 style="font-size:28px; font-weight:700; color:white; margin-bottom:8px;">Create account</h3>
            <p style="color:#9ca3af; font-size:14px; margin-bottom:32px;">
                Already have an account?
                <a href="{{ route('login') }}" style="color:#4ade80; text-decoration:none; font-weight:600;">Sign in</a>
            </p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                {{-- Name --}}
                <div style="margin-bottom:20px;">
                    <label style="display:block; color:#9ca3af; font-size:14px; margin-bottom:8px;">Full name</label>
                    <input type="text" name="name" value="{{ old('name') }}" required autofocus
                        placeholder="John Doe"
                        style="width:100%; padding:12px 16px; background:#1f2937; border:1px solid #374151; border-radius:12px; color:white; font-size:14px; box-sizing:border-box; outline:none;"
                    />
                    @error('name')
                        <p style="color:#f87171; font-size:12px; margin-top:4px;">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Email --}}
                <div style="margin-bottom:20px;">
                    <label style="display:block; color:#9ca3af; font-size:14px; margin-bottom:8px;">Email address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        placeholder="you@example.com"
                        style="width:100%; padding:12px 16px; background:#1f2937; border:1px solid #374151; border-radius:12px; color:white; font-size:14px; box-sizing:border-box; outline:none;"
                    />
                    @error('email')
                        <p style="color:#f87171; font-size:12px; margin-top:4px;">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Password --}}
                <div style="margin-bottom:20px;">
                    <label style="display:block; color:#9ca3af; font-size:14px; margin-bottom:8px;">Password</label>
                    <input type="password" name="password" required
                        placeholder="••••••••"
                        style="width:100%; padding:12px 16px; background:#1f2937; border:1px solid #374151; border-radius:12px; color:white; font-size:14px; box-sizing:border-box; outline:none;"
                    />
                    @error('password')
                        <p style="color:#f87171; font-size:12px; margin-top:4px;">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Confirm Password --}}
                <div style="margin-bottom:28px;">
                    <label style="display:block; color:#9ca3af; font-size:14px; margin-bottom:8px;">Confirm password</label>
                    <input type="password" name="password_confirmation" required
                        placeholder="••••••••"
                        style="width:100%; padding:12px 16px; background:#1f2937; border:1px solid #374151; border-radius:12px; color:white; font-size:14px; box-sizing:border-box; outline:none;"
                    />
                    @error('password_confirmation')
                        <p style="color:#f87171; font-size:12px; margin-top:4px;">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    style="width:100%; padding:14px; background:#16a34a; border:none; border-radius:12px; color:white; font-size:14px; font-weight:600; cursor:pointer; letter-spacing:0.5px;">
                    Create Account
                </button>

                <div style="display:flex; align-items:center; margin:24px 0;">
                    <div style="flex:1; height:1px; background:#1f2937;"></div>
                    <span style="color:#6b7280; font-size:12px; margin:0 16px;">or</span>
                    <div style="flex:1; height:1px; background:#1f2937;"></div>
                </div>

                <a href="{{ route('login') }}"
                    style="display:block; width:100%; padding:14px; border:1.5px solid #dc2626; border-radius:12px; color:#f87171; font-size:14px; font-weight:600; text-align:center; text-decoration:none; box-sizing:border-box;">
                    Sign in instead
                </a>

            </form>
        </div>
    </div>

</div>
</body>
</html>