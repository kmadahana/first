<x-guest-layout>
<div class="min-h-screen flex">

    {{-- LEFT SIDE - Image & Branding --}}
    <div class="hidden lg:flex w-1/2 relative overflow-hidden">
        <img
            src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=1200&auto=format&fit=crop"
            alt="Finance"
            class="absolute inset-0 w-full h-full object-cover"
        />
        <div class="absolute inset-0 bg-gradient-to-br from-red-900/80 via-gray-900/70 to-gray-950/90"></div>
        <div class="relative z-10 flex flex-col justify-center px-14 text-white">
            <div class="text-3xl font-bold mb-4">💰 BudgetWise</div>
            <h2 class="text-5xl font-extrabold leading-tight mb-6">
                Welcome <br> Back!
            </h2>
            <p class="text-gray-300 text-base leading-relaxed max-w-sm">
                Track your spending, hit your goals, and stay on top of your finances — all in one place.
            </p>
            <div class="mt-8 flex gap-3">
                <div class="w-2 h-2 rounded-full bg-red-500"></div>
                <div class="w-2 h-2 rounded-full bg-green-500"></div>
                <div class="w-2 h-2 rounded-full bg-white/40"></div>
            </div>
        </div>
    </div>

    {{-- RIGHT SIDE - Login Form --}}
    <div class="w-full lg:w-1/2 flex items-center justify-center bg-gray-950 px-8">
        <div class="w-full max-w-md">

            {{-- Mobile logo --}}
            <div class="lg:hidden text-center mb-8">
                <span class="text-2xl font-bold text-white">💰 BudgetWise</span>
            </div>

            <h3 class="text-3xl font-bold text-white mb-2">Sign in</h3>
            <p class="text-gray-400 text-sm mb-8">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-green-400 hover:text-green-300 font-medium">Sign up</a>
            </p>

            {{-- Session Status --}}
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                {{-- Email --}}
                <div class="mb-5">
                    <label class="block text-sm font-medium text-gray-400 mb-2">Email address</label>
                    <input
                        id="email" type="email" name="email"
                        value="{{ old('email') }}"
                        required autofocus autocomplete="username"
                        class="w-full px-4 py-3 rounded-xl bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 transition"
                        placeholder="you@example.com"
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400 text-xs" />
                </div>

                {{-- Password --}}
                <div class="mb-5">
                    <div class="flex justify-between items-center mb-2">
                        <label class="text-sm font-medium text-gray-400">Password</label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-xs text-green-400 hover:text-green-300">
                                Forgot password?
                            </a>
                        @endif
                    </div>
                    <input
                        id="password" type="password" name="password"
                        required autocomplete="current-password"
                        class="w-full px-4 py-3 rounded-xl bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 transition"
                        placeholder="••••••••"
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400 text-xs" />
                </div>

                {{-- Remember Me --}}
                <div class="flex items-center mb-6">
                    <input id="remember_me" type="checkbox" name="remember"
                        class="w-4 h-4 rounded border-gray-600 bg-gray-800 text-green-500 focus:ring-green-500">
                    <label for="remember_me" class="ml-2 text-sm text-gray-400">Remember me</label>
                </div>

                {{-- Submit --}}
                <button type="submit"
                    class="w-full py-3 bg-red-600 hover:bg-red-500 text-white font-semibold rounded-xl transition text-sm tracking-wide">
                    Sign In
                </button>

                {{-- Divider --}}
                <div class="flex items-center my-6">
                    <div class="flex-1 h-px bg-gray-800"></div>
                    <span class="mx-4 text-xs text-gray-500">or</span>
                    <div class="flex-1 h-px bg-gray-800"></div>
                </div>

                <a href="{{ route('register') }}"
                    class="block w-full py-3 border border-green-500 text-green-400 hover:bg-green-500 hover:text-white font-semibold rounded-xl transition text-sm tracking-wide text-center">
                    Create an account
                </a>

            </form>
        </div>
    </div>

</div>
</x-guest-layout>