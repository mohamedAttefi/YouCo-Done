<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Restaurant Listings - BookMyTable</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
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
            vertical-align: middle;
        }

        .filled-icon {
            font-variation-settings: 'FILL' 1;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-[#0d141b] dark:text-slate-100 min-h-screen">
    <!-- Header Navigation -->
    <header class="sticky top-0 z-50 bg-white dark:bg-background-dark border-b border-solid border-[#e7edf3] dark:border-slate-800 px-6 py-3">
        <div class="max-w-[1440px] mx-auto flex items-center justify-between gap-8">
            <div class="flex items-center gap-8">
                <div class="flex items-center gap-2 text-primary">
                    <div class="bg-primary p-2 rounded-lg flex items-center justify-center text-white">
                        <span class="material-symbols-outlined filled">restaurant</span>
                    </div>
                    <h2 class="text-[#0d141b] dark:text-white text-xl font-bold leading-tight tracking-[-0.015em]">Youco'Done</h2>
                </div>
                <div class="hidden md:flex items-center gap-6">
                    <a class="text-[#0d141b] dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Explore</a>
                    <a class="text-[#0d141b] dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Reservations</a>
                    <a class="text-[#0d141b] dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Favorites</a>
                </div>
            </div>
            <div class="flex flex-1 max-w-md items-center gap-4">
                <label class="flex flex-col flex-1 !h-10">
                    <div class="flex w-full flex-1 items-stretch rounded-lg h-full overflow-hidden border border-[#e7edf3] dark:border-slate-700">
                        <div class="text-[#4c739a] flex bg-[#e7edf3] dark:bg-slate-800 items-center justify-center px-3">
                            <span class="material-symbols-outlined text-xl">search</span>
                        </div>
                        <input class="form-input flex w-full min-w-0 flex-1 border-none bg-[#e7edf3] dark:bg-slate-800 text-[#0d141b] dark:text-white focus:ring-0 placeholder:text-[#4c739a] text-sm" placeholder="Search for restaurants, cuisines..." value="" />
                    </div>
                </label>
            </div>
            <div class="flex items-center gap-4">
                @if(Auth::check())
                @if(Auth::user()->hasRole('client'))
                <button class="hidden sm:flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-red-500 text-white text-sm font-bold tracking-[0.015em] hover:bg-red-500/90 transition-all">
                    Sign out
                </button>
                @elseif(Auth::user()->role == 'restaurateur')
                <a href="{{ route('restaurant.add') }}" class="hidden sm:flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold tracking-[0.015em] hover:bg-primary/90 transition-all">
                    + Add Restaurant
                </a>
                @endif
                @else
                <button class="hidden sm:flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold tracking-[0.015em] hover:bg-primary/90 transition-all">
                    Sign in
                </button>
                @endif


                <a href="{{ route('client.profile') }}">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border border-slate-200" @php
                        $profilePhoto=Auth::user()
                        ->photos()
                        ->where('type', 'profile')
                        ->latest()
                        ->first();
                        @endphp

                        style='background-image: url("{{ $profilePhoto
    ? asset($profilePhoto->url)
    : "https://ui-avatars.com/api/?name=" . urlencode(Auth::user()->name) . "&color=7F9CF5&background=EBF4FF"
}}");'></div>
                </a>
            </div>
        </div>
    </header>

    {{ $slot }}

    <footer class="mt-12 bg-white dark:bg-background-dark border-t border-[#e7edf3] dark:border-slate-800 py-12 px-6">
        <div class="max-w-[1440px] mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-2 text-primary">
                    <div class="size-6">
                        <svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M12.0799 24L4 19.2479L9.95537 8.75216L18.04 13.4961L18.0446 4H29.9554L29.96 13.4961L38.0446 8.75216L44 19.2479L35.92 24L44 28.7521L38.0446 39.2479L29.96 34.5039L29.9554 44H18.0446L18.04 34.5039L9.95537 39.2479L4 28.7521L12.0799 24Z" fill-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h2 class="text-[#0d141b] dark:text-white text-lg font-bold">BookMyTable</h2>
                </div>
                <p class="text-sm text-slate-500">Discover and reserve the best tables in your favorite cities. Easy, fast, and free.</p>
            </div>
            <div class="flex flex-col gap-4">
                <h4 class="font-bold text-sm">Discover</h4>
                <a class="text-sm text-slate-500 hover:text-primary transition-colors" href="#">New Restaurants</a>
                <a class="text-sm text-slate-500 hover:text-primary transition-colors" href="#">Top Rated</a>
                <a class="text-sm text-slate-500 hover:text-primary transition-colors" href="#">By City</a>
            </div>
            <div class="flex flex-col gap-4">
                <h4 class="font-bold text-sm">For Restaurants</h4>
                <a class="text-sm text-slate-500 hover:text-primary transition-colors" href="#">Join our Network</a>
                <a class="text-sm text-slate-500 hover:text-primary transition-colors" href="#">Business Dashboard</a>
                <a class="text-sm text-slate-500 hover:text-primary transition-colors" href="#">Resource Center</a>
            </div>
            <div class="flex flex-col gap-4">
                <h4 class="font-bold text-sm">Contact</h4>
                <a class="text-sm text-slate-500 hover:text-primary transition-colors" href="#">Help Center</a>
                <a class="text-sm text-slate-500 hover:text-primary transition-colors" href="#">Support</a>
                <div class="flex gap-4 mt-2">
                    <span class="material-symbols-outlined text-slate-400 cursor-pointer hover:text-primary">language</span>
                    <span class="material-symbols-outlined text-slate-400 cursor-pointer hover:text-primary">share</span>
                </div>
            </div>
        </div>
        <div class="max-w-[1440px] mx-auto mt-12 pt-8 border-t border-slate-100 dark:border-slate-800 text-center text-xs text-slate-400">
            © 2024 BookMyTable Inc. All rights reserved.
        </div>
    </footer>
</body>

</html>