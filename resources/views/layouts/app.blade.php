<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'BookMyTable') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: { "display": ["Work Sans"] },
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark min-h-screen font-display antialiased">
    <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <header class="flex items-center justify-between border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 px-6 md:px-10 py-3 sticky top-0 z-50">
            <div class="flex items-center gap-8">
                <a href="" class="flex items-center gap-4 text-primary">
                    <div class="size-6">
                        <svg fill="currentColor" viewBox="0 0 48 48"><path d="M12.0799 24L4 19.2479L9.95537 8.75216L18.04 13.4961L18.0446 4H29.9554L29.96 13.4961L38.0446 8.75216L44 19.2479L35.92 24L44 28.7521L38.0446 39.2479L29.96 34.5039L29.9554 44H18.0446L18.04 34.5039L9.95537 39.2479L4 28.7521L12.0799 24Z"/></svg>
                    </div>
                    <h2 class="text-slate-900 dark:text-white text-lg font-bold">BookMyTable</h2>
                </a>
            </div>

            <div class="flex flex-1 justify-end gap-4 items-center">
                <nav class="hidden lg:flex items-center gap-6">
                    <a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Explore</a>
                    <a class="text-primary text-sm font-bold" href="#">Reservations</a>
                </nav>
                <div class="flex items-center gap-3 border-l border-slate-200 dark:border-slate-700 pl-4">
                    <span class="text-sm font-medium dark:text-white hidden sm:block">{{ Auth::user()->name }}</span>
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border border-slate-200" style='background-image: url("https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=137fec&color=fff");'></div>
                </div>
            </div>
        </header>

        {{ $slot }}

        <footer class="mt-auto py-8 border-t border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-950 text-slate-500 text-center">
            <p class="text-xs">© {{ date('Y') }} BookMyTable Inc. Premium Reservations.</p>
        </footer>
    </div>
</body>
</html>