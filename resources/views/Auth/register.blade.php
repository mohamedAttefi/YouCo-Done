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
                <a class="flex-1 flex flex-col items-center justify-center border-b-2 border-transparent text-slate-400 dark:text-slate-500 pb-3 pt-5 font-bold text-sm tracking-wide hover:text-slate-600 transition-colors" href="{{ route('login.form') }}">
                    Login
                </a>
                <a class="flex-1 flex flex-col items-center justify-center border-b-2 border-primary text-primary pb-3 pt-5 font-bold text-sm tracking-wide" href="#">
                    Register
                </a>
            </div>
        </div>

        <div class="p-8 pt-10">
            <div class="text-center mb-8">
                <h1 class="text-slate-900 dark:text-white text-2xl font-bold">Create Account</h1>
                <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">Join our exclusive dining community.</p>
            </div>

            <form method="POST" action="{{ route('register.form') }}" class="space-y-5">
                @csrf
                <div class="space-y-1">
                    <label class="block text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-widest ml-1" for="name">Full Name</label>
                    <div class="relative group">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors text-xl">person</span>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus autocomplete="name" 
                            class="block w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 focus:border-primary focus:ring-4 focus:ring-primary/10 rounded-xl text-slate-900 dark:text-white placeholder:text-slate-400 transition-all" placeholder="John Doe">
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-1" />
                </div>

                <div class="space-y-1">
                    <label class="block text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-widest ml-1" for="email">Email Address</label>
                    <div class="relative group">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors text-xl">mail</span>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="username"
                            class="block w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 focus:border-primary focus:ring-4 focus:ring-primary/10 rounded-xl text-slate-900 dark:text-white placeholder:text-slate-400 transition-all" placeholder="name@example.com">
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-1" />
                </div>

                <div class="space-y-1">
                    <label class="block text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-widest ml-1" for="role">I am a...</label>
                    <div class="relative group">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors text-xl">manage_accounts</span>
                        <select id="role" name="role" required
                            class="block w-full pl-10 pr-10 py-3 bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 focus:border-primary focus:ring-4 focus:ring-primary/10 rounded-xl text-slate-900 dark:text-white appearance-none transition-all">
                            <option value="client" {{ old('role') == 'client' ? 'selected' : '' }}>Client</option>
                            <option value="restaurateur" {{ old('role') == 'restaurateur' ? 'selected' : '' }}>Restaurateur</option>
                        </select>
                        <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">expand_more</span>
                    </div>
                    <x-input-error :messages="$errors->get('role')" class="mt-1" />
                </div>

                <div class="space-y-1">
                    <label class="block text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-widest ml-1" for="password">Password</label>
                    <div class="relative group">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors text-xl">lock</span>
                        <input id="password" name="password" type="password" required autocomplete="new-password"
                            class="block w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 focus:border-primary focus:ring-4 focus:ring-primary/10 rounded-xl text-slate-900 dark:text-white placeholder:text-slate-400 transition-all" placeholder="••••••••">
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-1" />
                </div>

                <div class="space-y-1">
                    <label class="block text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-widest ml-1" for="password_confirmation">Confirm Password</label>
                    <div class="relative group">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors text-xl">lock_reset</span>
                        <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password"
                            class="block w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 focus:border-primary focus:ring-4 focus:ring-primary/10 rounded-xl text-slate-900 dark:text-white placeholder:text-slate-400 transition-all" placeholder="••••••••">
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
                </div>

                <button type="submit" class="w-full py-4 bg-primary hover:bg-primary/90 text-white font-bold rounded-xl shadow-lg shadow-primary/25 transition-all transform active:scale-[0.98] mt-4 flex items-center justify-center gap-2 group">
                    <span>{{ __('Register') }}</span>
                    <span class="material-symbols-outlined text-xl group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </button>
            </form>
        </div>

        <div class="bg-slate-50 dark:bg-slate-800/50 p-6 text-center border-t border-slate-100 dark:border-slate-800">
            <p class="text-sm text-slate-500 dark:text-slate-400">
                Already have an account?
                <a class="font-bold text-primary hover:text-primary/80 transition-colors ml-1" href="{{ route('login.form') }}">Sign in</a>
            </p>
        </div>
    </div>
</x-guest-layout>