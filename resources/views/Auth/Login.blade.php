<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Auth: Login &amp; Register - BookMyTable</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Work Sans"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display min-h-screen flex flex-col">
    <div class="flex-1 flex flex-col justify-center items-center py-12 px-4 sm:px-6 lg:px-8">
        <!-- Branding & Logo -->
        <div class="mb-8 flex flex-col items-center">
            <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center mb-4 shadow-lg shadow-primary/20">
                <span class="material-symbols-outlined text-white text-3xl">restaurant</span>
            </div>
            <h2 class="text-3xl font-bold text-slate-900 dark:text-white tracking-tight">BookMyTable</h2>
            <p class="text-slate-500 dark:text-slate-400 mt-2">Premium dining reservations made easy.</p>
        </div>
        <!-- Main Auth Card -->
        <div class="w-full max-w-md bg-white dark:bg-slate-900 rounded-xl shadow-xl overflow-hidden border border-slate-200 dark:border-slate-800">
            <!-- Tabs Toggle -->
            <div class="pb-3 bg-slate-50 dark:bg-slate-800/50">
                <div class="flex border-b border-slate-200 dark:border-slate-700 px-6 gap-8">
                    <a href="{{ route('login.form') }}" class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-slate-500 dark:text-slate-400 pb-[13px] pt-4 hover:text-primary transition-colors">
                        <p class="text-sm font-bold leading-normal tracking-[0.015em]">Login</p>
                    </a>
                    <a href="{{ route('register.form') }}" class="flex flex-col items-center justify-center border-b-[3px] border-b-primary text-slate-900 dark:text-white pb-[13px] pt-4">
                        <p class="text-sm font-bold leading-normal tracking-[0.015em]">Register</p>
                    </a>
                </div>
            </div>
            <div class="p-8 pt-10">
                <div class="text-center mb-8">
                    <h1 class="text-slate-900 dark:text-white text-2xl font-bold">Welcome Back</h1>
                    <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">Please enter your details to sign in.</p>
                </div>
                <form action="#" class="space-y-6" method="POST">
                    <div class="space-y-1">
                        <label class="block text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-widest ml-1" for="email">Email Address</label>
                        <div class="relative group">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors text-xl">mail</span>
                            <input class="block w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 focus:border-primary focus:ring-4 focus:ring-primary/10 rounded-xl text-slate-900 dark:text-white placeholder:text-slate-400 transition-all" id="email" placeholder="name@example.com" required="" type="email" />
                        </div>
                    </div>
                    <div class="space-y-1">
                        <label class="block text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-widest ml-1" for="password">Password</label>
                        <div class="relative group">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors text-xl">lock</span>
                            <input class="block w-full pl-10 pr-12 py-3 bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 focus:border-primary focus:ring-4 focus:ring-primary/10 rounded-xl text-slate-900 dark:text-white placeholder:text-slate-400 transition-all" id="password" placeholder="••••••••" required="" type="password" />
                            <button class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 transition-colors" type="button">
                                <span class="material-symbols-outlined text-xl">visibility</span>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input class="h-4 w-4 text-primary focus:ring-primary border-slate-300 rounded cursor-pointer" id="remember-me" name="remember-me" type="checkbox" />
                            <label class="ml-2 block text-sm text-slate-600 dark:text-slate-400 cursor-pointer" for="remember-me">Remember me</label>
                        </div>
                        <div class="text-sm">
                            <a class="font-semibold text-primary hover:text-primary/80 transition-colors" href="#">Forgot password?</a>
                        </div>
                    </div>
                    <button class="w-full py-4 bg-primary hover:bg-primary/90 text-white font-bold rounded-xl shadow-lg shadow-primary/25 transition-all transform active:scale-[0.98] mt-2 flex items-center justify-center gap-2 group" type="submit">
                        <span>Sign In</span>
                        <span class="material-symbols-outlined text-xl group-hover:translate-x-1 transition-transform">login</span>
                    </button>
                    <div class="relative my-8">
                        <div aria-hidden="true" class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-slate-100 dark:border-slate-800"></div>
                        </div>
                        <div class="relative flex justify-center text-xs uppercase tracking-widest">
                            <span class="bg-white dark:bg-slate-900 px-4 text-slate-400 font-medium">Or continue with</span>
                        </div>
                    </div>
                    <button class="w-full py-3.5 px-4 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-750 text-slate-700 dark:text-slate-200 font-semibold rounded-xl transition-all flex items-center justify-center gap-3 shadow-sm" type="button">
                        <svg class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"></path>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"></path>
                        </svg>
                        <span>Google</span>
                    </button>
                </form>
            </div>
            <div class="bg-slate-50 dark:bg-slate-800/50 p-6 text-center border-t border-slate-100 dark:border-slate-800">
                <p class="text-sm text-slate-500 dark:text-slate-400">
                    Don't have an account?
                    <a class="font-bold text-primary hover:text-primary/80 transition-colors ml-1" href="#">Sign up now</a>
                </p>
            </div>
        </div>
        <p class="mt-8 text-center text-[11px] text-slate-400 dark:text-slate-500 max-w-xs leading-relaxed">
            Secure login powered by BookMyTable. By continuing, you agree to our
            <a class="underline hover:text-slate-600 transition-colors" href="#">Terms</a> and
            <a class="underline hover:text-slate-600 transition-colors" href="#">Privacy</a>.
        </p>
    </div>
    <div class="fixed top-0 left-0 w-full h-full -z-10 pointer-events-none opacity-50 dark:opacity-20 overflow-hidden">
        <div class="absolute -top-24 -right-24 w-[500px] h-[500px] bg-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 -left-20 w-[400px] h-[400px] bg-blue-300/10 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-slate-100/40 dark:bg-slate-900/40 rounded-full blur-[120px]"></div>
    </div>

</body>

</html>