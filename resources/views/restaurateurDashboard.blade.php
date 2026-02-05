<x-app-layout>
    <!DOCTYPE html>

    <html class="light" lang="en">

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>BookMyTable - Restaurateur Dashboard</title>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet" />
        <!-- Material Symbols -->
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                            "display": ["Work Sans", "sans-serif"]
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
            body {
                font-family: 'Work Sans', sans-serif;
            }

            .material-symbols-outlined {
                font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
                vertical-align: middle;
            }

            .filled {
                font-variation-settings: 'FILL' 1;
            }
        </style>
    </head>

    <body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen">
        <div class="flex h-screen overflow-hidden">
            <!-- Side Navigation Bar -->
            <aside class="w-64 flex-shrink-0 border-r border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 flex flex-col justify-between p-4">
                <div class="flex flex-col gap-8">
                    <nav class="flex flex-col gap-2">
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary font-semibold" href="#">
                            <span class="material-symbols-outlined filled">dashboard</span>
                            <span class="text-sm">Dashboard</span>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors font-medium" href="#">
                            <span class="material-symbols-outlined">calendar_month</span>
                            <span class="text-sm">Reservations</span>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors font-medium" href="#">
                            <span class="material-symbols-outlined">menu_book</span>
                            <span class="text-sm">Menus</span>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors font-medium" href="#">
                            <span class="material-symbols-outlined">analytics</span>
                            <span class="text-sm">Analytics</span>
                        </a>
                        <div class="h-px bg-slate-200 dark:bg-slate-800 my-2"></div>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors font-medium" href="#">
                            <span class="material-symbols-outlined">settings</span>
                            <span class="text-sm">Settings</span>
                        </a>
                    </nav>
                </div>
                <!-- Profile Footer -->
                <div class="flex items-center gap-3 p-2 rounded-xl bg-slate-50 dark:bg-slate-800/50">
                    <div class="size-10 rounded-full bg-cover bg-center border border-white dark:border-slate-700" data-alt="Profile picture of the restaurant owner" @php
                        $profilePhoto=Auth::user()
                        ->photos()
                        ->where('type', 'profile')
                        ->latest()
                        ->first();
                        @endphp

                        style='background-image: url("{{ $profilePhoto
    ? asset($profilePhoto->url)
    : "https://ui-avatars.com/api/?name=" . urlencode(Auth::user()->name) . "&color=7F9CF5&background=EBF4FF"
}}");'>
                    </div>
                    <div class="flex flex-col min-w-0">
                        <p class="text-sm font-semibold text-slate-900 dark:text-white truncate"></p>{{ Auth::user()->name }}
                        <p class="text-xs text-slate-500 dark:text-slate-400 truncate">Owner Account</p>
                    </div>
                </div>
            </aside>
            <main class="flex-1 flex flex-col overflow-hidden">
                @if (session()->has('success'))
                <div class="flex items-center gap-3 p-4 mb-6 rounded-lg
                bg-green-50 border border-green-200 text-green-800">
                    <span class="material-symbols-outlined text-green-600">check_circle</span>
                    <span class="font-medium">
                        {{ session('success') }}
                    </span>
                </div>
                @endif

                <div class="flex-1 overflow-y-auto p-8 bg-background-light dark:bg-background-dark">
                    <!-- Stats Overview -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col gap-2">
                            <div class="flex justify-between items-start">
                                <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Total Restaurants</p>
                                <span class="bg-primary/10 text-primary p-1.5 rounded-lg">
                                    <span class="material-symbols-outlined text-xl">store</span>
                                </span>
                            </div>
                            <p class="text-3xl font-bold text-slate-900 dark:text-white">{{ $restaurants->count() }}</p>
                            <p class="text-xs text-green-600 flex items-center gap-1 font-semibold">
                                <span class="material-symbols-outlined text-xs">trending_up</span>
                                +2% this month
                            </p>
                        </div>
                        <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col gap-2">
                            <div class="flex justify-between items-start">
                                <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Active Listings</p>
                                <span class="bg-green-500/10 text-green-600 p-1.5 rounded-lg">
                                    <span class="material-symbols-outlined text-xl">check_circle</span>
                                </span>
                            </div>
                            <p class="text-3xl font-bold text-slate-900 dark:text-white">{{ $restaurants->count() }}</p>
                            <p class="text-xs text-slate-400 font-semibold">Stable performance</p>
                        </div>
                    </div>
                    <!-- Main Restaurant Table -->
                    <div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
                        <div class="px-6 py-4 border-b border-slate-200 dark:border-slate-800 flex items-center justify-between bg-slate-50/50 dark:bg-slate-800/30">
                            <h3 class="text-slate-900 dark:text-white font-bold">Restaurant Portfolio</h3>
                            <div class="flex gap-2">
                                <button class="text-xs font-semibold px-3 py-1.5 rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">Filter</button>
                                <button class="text-xs font-semibold px-3 py-1.5 rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">Export CSV</button>
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left">
                                <thead>
                                    <tr class="text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-wider">
                                        <th class="px-6 py-4">Restaurant</th>
                                        <th class="px-6 py-4">Location</th>
                                        <th class="px-6 py-4">Status</th>
                                        <th class="px-6 py-4">Total Bookings</th>
                                        <th class="px-6 py-4 text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-200 dark:divide-slate-800">
                                    <!-- Row 1 -->
                                    @foreach($restaurants as $restaurant)
                                    <tr class=" hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors group">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="size-10 rounded-lg bg-cover bg-center" data-alt="Interior of The Italian Bistro" @php
                                                    $retaurantPhoto=$restaurant
                                                    ->photos()
                                                    ->where('type', 'gallery')
                                                    ->latest()
                                                    ->first();
                                                    @endphp

                                                    style='background-image: url("{{ $retaurantPhoto
    ? asset($retaurantPhoto->url)
    : "https://i.pinimg.com/736x/90/ca/aa/90caaa56255abb31bfff1623161d76ce.jpg"
}}");'>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-bold text-slate-900 dark:text-white">{{ $restaurant->name }}</p>
                                                    <p class="text-xs text-slate-500">{{ $restaurant->cuisine_type }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">
                                            {{ $restaurant->city }}, {{ $restaurant->address }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full {{ $restaurant->is_active == true? 'bg-green-100 text-green-700':'bg-red-100 text-red-700' }} text-xs font-bold dark:bg-green-500/10 dark:text-green-500">

                                                <span class="size-1.5 rounded-full {{ $restaurant->is_active == true? 'bg-green-600':'bg-red-600' }} dark:bg-green-500"></span>
                                                {{ $restaurant->is_active == true? 'Active':'Desactive' }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400 font-medium">1,240</td>
                                        <td class="px-6 py-4 text-right">
                                            <div class="flex items-center justify-end gap-1 opacity-60 group-hover:opacity-100 transition-opacity">
                                                <a href="{{ route('restaurant.edit', $restaurant->id) }}" class="p-2 hover:bg-primary/10 hover:text-primary rounded-lg transition-colors" title="Edit Restaurant">
                                                    <span class="material-symbols-outlined text-lg">edit</span>
                                                </a>
                                                <a href="{{ route('restaurant.delete', $restaurant->id) }}" class="p-2 hover:bg-red-100 hover:text-red-600 rounded-lg transition-colors" title="Delete Restaurant">
                                                    <span class="material-symbols-outlined text-lg">delete</span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Pagination Footer -->
                        <div class="px-6 py-4 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between">
                            <p class="text-xs text-slate-500 dark:text-slate-400">Showing 4 of 12 restaurants</p>
                            <div class="flex items-center gap-2">
                                <button class="size-8 rounded border border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 disabled:opacity-50" disabled="">
                                    <span class="material-symbols-outlined text-lg">chevron_left</span>
                                </button>
                                <button class="size-8 rounded bg-primary text-white text-xs font-bold">1</button>
                                <button class="size-8 rounded border border-slate-200 dark:border-slate-700 text-xs font-bold hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">2</button>
                                <button class="size-8 rounded border border-slate-200 dark:border-slate-700 text-xs font-bold hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">3</button>
                                <button class="size-8 rounded border border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-900 dark:text-white hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                                    <span class="material-symbols-outlined text-lg">chevron_right</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
</x-app-layout>