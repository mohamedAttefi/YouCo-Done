<x-guest-layout>
    <div class="mb-10 flex flex-col items-center">
        <div class="w-14 h-14 bg-primary rounded-2xl flex items-center justify-center mb-4 shadow-xl shadow-primary/20">
            <span class="material-symbols-outlined text-white text-4xl">restaurant</span>
        </div>
        <h2 class="text-3xl font-extrabold text-slate-900 dark:text-white tracking-tight">BookMyTable</h2>
        <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm font-medium">Premium dining reservations made easy.</p>
    </div>

    <div class="w-full max-w-md bg-white dark:bg-slate-900 rounded-2xl shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] overflow-hidden border border-slate-100 dark:border-slate-800">
        <div class="bg-slate-50/50 dark:bg-slate-800/30">
            <div class="flex border-b border-slate-100 dark:border-slate-800 px-6">
                <a class="flex-1 flex flex-col items-center justify-center border-b-2 border-primary text-primary pb-3 pt-5 font-bold text-sm tracking-wide" href="#">
                    Login
                </a>
                <a class="flex-1 flex flex-col items-center justify-center border-b-2 border-transparent text-slate-400 dark:text-slate-500 pb-3 pt-5 font-bold text-sm tracking-wide hover:text-slate-600 transition-colors" href="{{ route('register.form') }}">
                    Register
                </a>
            </div>
        </div>

        <div class="p-8 pt-10">
            <div class="text-center mb-8">
                <h1 class="text-slate-900 dark:text-white text-2xl font-bold">Welcome Back</h1>
                <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">Please enter your details to sign in.</p>
            </div>

            <x-auth-session-status class="mb-4 text-center" :status="session('status')" />

            <form method="POST" action="{{ route('login.form') }}" class="space-y-6">
                @csrf

                <div class="space-y-1">
                    <label class="block text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-widest ml-1" for="email">Email Address</label>
                    <div class="relative group">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors text-xl">mail</span>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                            class="block w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 focus:border-primary focus:ring-4 focus:ring-primary/10 rounded-xl text-slate-900 dark:text-white placeholder:text-slate-400 transition-all" placeholder="name@example.com">
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-1" />
                </div>

                <div class="space-y-1">
                    <label class="block text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-widest ml-1" for="password">Password</label>
                    <div class="relative group">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors text-xl">lock</span>
                        <input id="password" name="password" type="password" required autocomplete="current-password"
                            class="block w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 focus:border-primary focus:ring-4 focus:ring-primary/10 rounded-xl text-slate-900 dark:text-white placeholder:text-slate-400 transition-all" placeholder="••••••••">
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-1" />
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-slate-300 rounded cursor-pointer dark:bg-slate-800 dark:border-slate-700">
                        <label for="remember_me" class="ml-2 block text-sm text-slate-600 dark:text-slate-400 cursor-pointer">Remember me</label>
                    </div>
                    @if (Route::has('password.request'))
                        <div class="text-sm">
                            <a class="font-semibold text-primary hover:text-primary/80 transition-colors" href="{{ route('password.request') }}">
                                Forgot password?
                            </a>
                        </div>
                    @endif
                </div>

                <button type="submit" class="w-full py-4 bg-primary hover:bg-primary/90 text-white font-bold rounded-xl shadow-lg shadow-primary/25 transition-all transform active:scale-[0.98] mt-2 flex items-center justify-center gap-2 group">
                    <span>Sign In</span>
                    <span class="material-symbols-outlined text-xl group-hover:translate-x-1 transition-transform">login</span>
                </button>
            </form>
        </div>

        <div class="bg-slate-50 dark:bg-slate-800/50 p-6 text-center border-t border-slate-100 dark:border-slate-800">
            <p class="text-sm text-slate-500 dark:text-slate-400">
                Don't have an account?
                <a class="font-bold text-primary hover:text-primary/80 transition-colors ml-1" href="{{ route('register.form') }}">Sign up now</a>
            </p>
        </div>
    </div>
</x-guest-layout>