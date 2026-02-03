<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'BookMyTable') }}</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" />
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
        <script>
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        colors: {
                            "primary": "#137fec",
                            "background-light": "#f8fafc",
                            "background-dark": "#101922",
                        },
                        fontFamily: { "display": ["Work Sans", "sans-serif"] }
                    },
                },
            }
        </script>

        <style>
            .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        </style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-background-light dark:bg-background-dark font-display min-h-screen antialiased">
        <div class="min-h-screen flex flex-col justify-center items-center py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
            
            <div class="w-full flex flex-col items-center relative z-10">
                {{ $slot }}
            </div>

            <div class="fixed top-0 left-0 w-full h-full -z-0 pointer-events-none opacity-50 dark:opacity-20">
                <div class="absolute -top-24 -right-24 w-[500px] h-[500px] bg-primary/10 rounded-full blur-3xl"></div>
                <div class="absolute bottom-10 -left-20 w-[400px] h-[400px] bg-blue-300/10 rounded-full blur-3xl"></div>
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-slate-100/40 dark:bg-slate-900/40 rounded-full blur-[120px]"></div>
            </div>
        </div>
    </body>
</html>