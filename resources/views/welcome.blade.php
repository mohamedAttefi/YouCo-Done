<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>BookMyTable - Reserve the Best Tables</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
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
            font-family: "Work Sans", sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-[#0d141b] dark:text-slate-50 transition-colors duration-200">
    <div class="relative flex min-h-screen flex-col overflow-x-hidden">
        <!-- Sticky Top Navbar -->
        <header class="sticky top-0 z-50 w-full border-b border-solid border-[#e7edf3] dark:border-slate-800 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md px-4 md:px-10 py-3">
            <div class="max-w-[1200px] mx-auto flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="size-8 text-primary">
                        <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M12.0799 24L4 19.2479L9.95537 8.75216L18.04 13.4961L18.0446 4H29.9554L29.96 13.4961L38.0446 8.75216L44 19.2479L35.92 24L44 28.7521L38.0446 39.2479L29.96 34.5039L29.9554 44H18.0446L18.04 34.5039L9.95537 39.2479L4 28.7521L12.0799 24Z" fill="currentColor" fill-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h2 class="text-[#0d141b] dark:text-white text-xl font-bold leading-tight tracking-tight">BookMyTable</h2>
                </div>
                <div class="flex flex-1 justify-end gap-6 items-center">
                    <nav class="hidden md:flex items-center gap-8">
                        <a class="text-[#0d141b] dark:text-slate-200 text-sm font-medium hover:text-primary transition-colors" href="">Explore</a>
                        <a class="text-[#0d141b] dark:text-slate-200 text-sm font-medium hover:text-primary transition-colors" href="#">Offers</a>
                    </nav>
                    <div class="flex gap-3">
                        <a href="{{ route('login.form') }}" class="flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-[#e7edf3] dark:bg-slate-800 text-[#0d141b] dark:text-white text-sm font-bold transition-all hover:bg-slate-200">
                            Login
                        </a>
                        <a href="{{ route('register.form') }}" class="flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold transition-all hover:opacity-90">
                            Register
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <main class="flex-1">
            <!-- Hero Section -->
            <section class="w-full px-4 md:px-10 py-8">
                <div class="max-w-[1200px] mx-auto">
                    <div class="@container">
                        <div class="relative flex min-h-[520px] flex-col gap-6 bg-cover bg-center bg-no-repeat rounded-xl items-center justify-center p-6 text-center shadow-xl" data-alt="Interior of a luxury modern restaurant with elegant lighting" style='background-image: linear-gradient(rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.6) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuBdOjHwPRBQ-7nwLWNWjRkxH9Iw2URqiugDzbunm6EruatsxBnlXeSb5y9lnxsHLr_4-IPD4XZz86aIphNhkAWKsjP4NxaCjapMQpWFNWkdmX66BGp53IunmshNkOLqiolSq_DU5NEzZdJf8ppGP1SPrO1HEUDnMac6KnmF7Ni_5ZJuM1bvdAOWo7rr5hfQz85lD5M-1CUbEoqLdJTCoCd2ZzQbEEWMVGszwtJ0j9e7EjvHDI7siGk6wOBc2hpWb_05ogOdWqJZZ3Ru");'>
                            <div class="flex flex-col gap-4 max-w-[800px]">
                                <h1 class="text-white text-4xl md:text-6xl font-black leading-tight tracking-tight">
                                    Reserve your table at the best restaurants.
                                </h1>
                                <p class="text-white/90 text-lg font-normal">
                                    Discover and book the best dining experiences in your city.
                                </p>
                            </div>
                            <!-- Search Bar -->
                            <div class="w-full max-w-[900px] mt-8">
                                <div class="flex flex-col md:flex-row bg-white dark:bg-slate-900 p-2 rounded-xl shadow-2xl gap-2">
                                    <div class="flex flex-1 items-center px-4 border-b md:border-b-0 md:border-r border-slate-200 dark:border-slate-700">
                                        <span class="material-symbols-outlined text-slate-400 mr-2">location_on</span>
                                        <input class="w-full border-none bg-transparent focus:ring-0 text-sm py-3 dark:text-white" placeholder="City" type="text" value="New York, NY" />
                                    </div>
                                    <div class="flex flex-1 items-center px-4 border-b md:border-b-0 md:border-r border-slate-200 dark:border-slate-700">
                                        <span class="material-symbols-outlined text-slate-400 mr-2">restaurant</span>
                                        <input class="w-full border-none bg-transparent focus:ring-0 text-sm py-3 dark:text-white" placeholder="Cuisine, or Restaurant" type="text" />
                                    </div>
                                    <div class="flex flex-1 items-center px-4">
                                        <span class="material-symbols-outlined text-slate-400 mr-2">schedule</span>
                                        <input class="w-full border-none bg-transparent focus:ring-0 text-sm py-3 dark:text-white" placeholder="Time" type="text" value="7:00 PM, Today" />
                                    </div>
                                    <button class="bg-primary hover:bg-primary/90 text-white font-bold py-3 px-8 rounded-lg transition-all flex items-center justify-center gap-2">
                                        <span class="material-symbols-outlined">search</span>
                                        Find a Table
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Explore by Cuisine -->
            <section class="max-w-[1200px] mx-auto px-4 md:px-10 py-10">
                <h2 class="text-[#0d141b] dark:text-white text-2xl font-bold leading-tight tracking-tight mb-6">Explore by Cuisine</h2>
                <div class="flex gap-4 overflow-x-auto pb-4 no-scrollbar">
                    <div class="flex flex-col items-center gap-2 min-w-[100px] cursor-pointer group">
                        <div class="size-16 rounded-full bg-white dark:bg-slate-800 shadow-sm flex items-center justify-center group-hover:bg-primary/10 group-hover:text-primary transition-all">
                            <span class="material-symbols-outlined text-3xl">local_pizza</span>
                        </div>
                        <span class="text-sm font-medium">Italian</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 min-w-[100px] cursor-pointer group">
                        <div class="size-16 rounded-full bg-white dark:bg-slate-800 shadow-sm flex items-center justify-center group-hover:bg-primary/10 group-hover:text-primary transition-all">
                            <span class="material-symbols-outlined text-3xl">set_meal</span>
                        </div>
                        <span class="text-sm font-medium">Japanese</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 min-w-[100px] cursor-pointer group">
                        <div class="size-16 rounded-full bg-white dark:bg-slate-800 shadow-sm flex items-center justify-center group-hover:bg-primary/10 group-hover:text-primary transition-all">
                            <span class="material-symbols-outlined text-3xl">dinner_dining</span>
                        </div>
                        <span class="text-sm font-medium">Steakhouse</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 min-w-[100px] cursor-pointer group">
                        <div class="size-16 rounded-full bg-white dark:bg-slate-800 shadow-sm flex items-center justify-center group-hover:bg-primary/10 group-hover:text-primary transition-all">
                            <span class="material-symbols-outlined text-3xl">bakery_dining</span>
                        </div>
                        <span class="text-sm font-medium">French</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 min-w-[100px] cursor-pointer group">
                        <div class="size-16 rounded-full bg-white dark:bg-slate-800 shadow-sm flex items-center justify-center group-hover:bg-primary/10 group-hover:text-primary transition-all">
                            <span class="material-symbols-outlined text-3xl">ramen_dining</span>
                        </div>
                        <span class="text-sm font-medium">Chinese</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 min-w-[100px] cursor-pointer group">
                        <div class="size-16 rounded-full bg-white dark:bg-slate-800 shadow-sm flex items-center justify-center group-hover:bg-primary/10 group-hover:text-primary transition-all">
                            <span class="material-symbols-outlined text-3xl">tapas</span>
                        </div>
                        <span class="text-sm font-medium">Spanish</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 min-w-[100px] cursor-pointer group">
                        <div class="size-16 rounded-full bg-white dark:bg-slate-800 shadow-sm flex items-center justify-center group-hover:bg-primary/10 group-hover:text-primary transition-all">
                            <span class="material-symbols-outlined text-3xl">more_horiz</span>
                        </div>
                        <span class="text-sm font-medium">See All</span>
                    </div>
                </div>
            </section>
            <!-- Featured Restaurants Section -->
            <section class="max-w-[1200px] mx-auto px-4 md:px-10 py-10">
                <div class="flex justify-between items-end mb-6">
                    <div>
                        <h2 class="text-[#0d141b] dark:text-white text-2xl font-bold leading-tight tracking-tight">Featured Restaurants</h2>
                        <p class="text-[#4c739a] dark:text-slate-400 text-sm">Hand-picked selections based on ratings and popularity</p>
                    </div>
                    <a class="text-primary font-semibold text-sm hover:underline flex items-center gap-1" href="#">
                        View All <span class="material-symbols-outlined text-xs">arrow_forward_ios</span>
                    </a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card 1 -->
                    <div class="group flex flex-col gap-3 bg-white dark:bg-slate-900 p-3 rounded-xl shadow-sm hover:shadow-md transition-all cursor-pointer">
                        <div class="relative w-full aspect-[4/3] overflow-hidden rounded-lg">
                            <div class="absolute top-2 right-2 bg-white/90 dark:bg-slate-800/90 backdrop-blur px-2 py-1 rounded text-xs font-bold text-primary z-10">
                                4.8 ★
                            </div>
                            <div class="w-full h-full bg-center bg-no-repeat bg-cover group-hover:scale-105 transition-transform duration-500" data-alt="Modern upscale American grill restaurant interior" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCe3U3HIxkq6NmO72lHIy14NGchFF4Vsn94rRuZztzyIjTEAUOK071mQ6PhLvsS3PwWVtlHE-lpHGXVCSvhReL1gTvg7POf1zggcmM0M7qzSiiIwxFCg6CeBN3oxnx74M3nBzX5wWBGK7HRosobDviS8xTbTrNOkSh9suU2qD__nvaYQ5bdcpa3OJftlRsAqhrw2qcUEMpo1_X3rQSGtSubMbUB6kK0I9UMMQPALl7Z9i8g3X7Y9iuo0iFgs0HjrA6kgGKmYEOD5cMJ");'>
                            </div>
                        </div>
                        <div>
                            <p class="text-[#0d141b] dark:text-white text-lg font-bold leading-tight">The Golden Grill</p>
                            <div class="flex justify-between items-center mt-1">
                                <p class="text-[#4c739a] dark:text-slate-400 text-sm font-medium">American • $$$</p>
                                <span class="text-xs text-[#4c739a] dark:text-slate-500">Midtown</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="group flex flex-col gap-3 bg-white dark:bg-slate-900 p-3 rounded-xl shadow-sm hover:shadow-md transition-all cursor-pointer">
                        <div class="relative w-full aspect-[4/3] overflow-hidden rounded-lg">
                            <div class="absolute top-2 right-2 bg-white/90 dark:bg-slate-800/90 backdrop-blur px-2 py-1 rounded text-xs font-bold text-primary z-10">
                                4.9 ★
                            </div>
                            <div class="w-full h-full bg-center bg-no-repeat bg-cover group-hover:scale-105 transition-transform duration-500" data-alt="Elegant sushi platter with fresh ingredients" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD0zCWDKVztGaGx7d7ge7anQLMtAmUfFVcAUm4QztF9xeWw8pzmWmqqkjDCc_99DTEVOWEVHP97tftXMUFnL0IBdZhYzo237PML5ztT2hqylUb4dsDDFJhlp4CpsIx7k1ERWqIApcZ_Yrr0l5PnDgf0nf40ztWuKzcTMVED5NVfdk7J4X4IfJEPN-9QZju4CZBHXZ93PTIkWFcMNhkd7tRI3ocvi_LMLzORXkjMFUHvFvM8oGaiQ8vZYkZqSUUEzeXwXnc5tF8iVIqL");'>
                            </div>
                        </div>
                        <div>
                            <p class="text-[#0d141b] dark:text-white text-lg font-bold leading-tight">Sushi Zen Master</p>
                            <div class="flex justify-between items-center mt-1">
                                <p class="text-[#4c739a] dark:text-slate-400 text-sm font-medium">Japanese • $$$$</p>
                                <span class="text-xs text-[#4c739a] dark:text-slate-500">SoHo</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="group flex flex-col gap-3 bg-white dark:bg-slate-900 p-3 rounded-xl shadow-sm hover:shadow-md transition-all cursor-pointer">
                        <div class="relative w-full aspect-[4/3] overflow-hidden rounded-lg">
                            <div class="absolute top-2 right-2 bg-white/90 dark:bg-slate-800/90 backdrop-blur px-2 py-1 rounded text-xs font-bold text-primary z-10">
                                4.7 ★
                            </div>
                            <div class="w-full h-full bg-center bg-no-repeat bg-cover group-hover:scale-105 transition-transform duration-500" data-alt="Delicious pasta primavera served in a bowl" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCuJcYQwUJLExOHx3m-e9q340UHtScqRoLyYiiiad7nopHSxsvgaDggOYgdLHXQS4bK5IY91hKLECCGfOJdMpgxIQg8Cv93m8LcKaQ54UzrM6cwsdcQfTBY4eav2d-mE0s4wx9mnPgjQeHfMsyRgHHPiHxX3sfX8RNfkNBxdv8UDzLnMKp6vzsnDojeG0nQ8C0DSwvigOQ4CNNdiWyFXJxwpE_E2Wdb3mEBJqeMQTRfmTcNYgxJ_UjT-XuwZ6UUZHFYRj08l0HEyqQV");'>
                            </div>
                        </div>
                        <div>
                            <p class="text-[#0d141b] dark:text-white text-lg font-bold leading-tight">Pasta Primavera</p>
                            <div class="flex justify-between items-center mt-1">
                                <p class="text-[#4c739a] dark:text-slate-400 text-sm font-medium">Italian • $$</p>
                                <span class="text-xs text-[#4c739a] dark:text-slate-500">Little Italy</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="group flex flex-col gap-3 bg-white dark:bg-slate-900 p-3 rounded-xl shadow-sm hover:shadow-md transition-all cursor-pointer">
                        <div class="relative w-full aspect-[4/3] overflow-hidden rounded-lg">
                            <div class="absolute top-2 right-2 bg-white/90 dark:bg-slate-800/90 backdrop-blur px-2 py-1 rounded text-xs font-bold text-primary z-10">
                                4.6 ★
                            </div>
                            <div class="w-full h-full bg-center bg-no-repeat bg-cover group-hover:scale-105 transition-transform duration-500" data-alt="Juicy steak on a plate with garnish" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCDMcPMfdVMlA5XBWpm7mwqC_gg_3QCHyZLVLZka4Y2BeAGDU2PxhobMQ-EKoogyUWBHVQGNvqwqYj_YG1mfzICxQkjpVcUR_B_sKOao006GESCeQLivSo7vU_jfV6BmIUFHAV2zVckqIaOV2Hq8GcRw43fkMwpdmwNNGAJrruTsMy8XYmnvHqxsHSOAy64iisB4sHYj_FQF_MlPM2XxAVh6hSnBSkTRbtFXnty9XSl1eSZXTgEa0F682LdQyQNnCTa5FXY5OBZ9nXF");'>
                            </div>
                        </div>
                        <div>
                            <p class="text-[#0d141b] dark:text-white text-lg font-bold leading-tight">Steakhouse Central</p>
                            <div class="flex justify-between items-center mt-1">
                                <p class="text-[#4c739a] dark:text-slate-400 text-sm font-medium">Steakhouse • $$$$</p>
                                <span class="text-xs text-[#4c739a] dark:text-slate-500">Financial Dist.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Call to Action Banner -->
            <section class="max-w-[1200px] mx-auto px-4 md:px-10 py-12">
                <div class="bg-primary rounded-2xl p-8 md:p-12 flex flex-col md:flex-row items-center justify-between gap-8 overflow-hidden relative">
                    <div class="relative z-10 flex flex-col gap-4 text-center md:text-left">
                        <h2 class="text-white text-3xl md:text-4xl font-bold">List your restaurant on BookMyTable</h2>
                        <p class="text-white/80 text-lg max-w-[500px]">Join thousands of restaurants who use our platform to manage their reservations and grow their business.</p>
                        <div class="flex flex-wrap gap-4 mt-2 justify-center md:justify-start">
                            <button class="bg-white text-primary font-bold px-8 py-3 rounded-lg hover:bg-slate-100 transition-all shadow-lg">Get Started</button>
                            <button class="bg-transparent border border-white text-white font-bold px-8 py-3 rounded-lg hover:bg-white/10 transition-all">Learn More</button>
                        </div>
                    </div>
                    <div class="hidden md:block absolute -right-10 -bottom-10 opacity-20">
                        <span class="material-symbols-outlined text-[300px] text-white">restaurant_menu</span>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <footer class="bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 py-12 px-4 md:px-10">
            <div class="max-w-[1200px] mx-auto grid grid-cols-1 md:grid-cols-4 gap-12">
                <div class="col-span-1 md:col-span-1">
                    <div class="flex items-center gap-2 mb-6 text-primary">
                        <svg class="size-6" fill="currentColor" viewbox="0 0 48 48">
                            <path d="M12.0799 24L4 19.2479L9.95537 8.75216L18.04 13.4961L18.0446 4H29.9554L29.96 13.4961L38.0446 8.75216L44 19.2479L35.92 24L44 28.7521L38.0446 39.2479L29.96 34.5039L29.9554 44H18.0446L18.04 34.5039L9.95537 39.2479L4 28.7521L12.0799 24Z"></path>
                        </svg>
                        <span class="text-xl font-bold text-[#0d141b] dark:text-white">BookMyTable</span>
                    </div>
                    <p class="text-[#4c739a] dark:text-slate-400 text-sm leading-relaxed">
                        The easiest way to find and book a table at your favorite restaurants. Available in over 50 cities worldwide.
                    </p>
                </div>
                <div>
                    <h4 class="font-bold mb-6">Discover</h4>
                    <ul class="flex flex-col gap-3 text-sm text-[#4c739a] dark:text-slate-400">
                        <li><a class="hover:text-primary" href="#">Featured Restaurants</a></li>
                        <li><a class="hover:text-primary" href="#">Cuisines</a></li>
                        <li><a class="hover:text-primary" href="#">Near Me</a></li>
                        <li><a class="hover:text-primary" href="#">Dining Rewards</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-6">BookMyTable</h4>
                    <ul class="flex flex-col gap-3 text-sm text-[#4c739a] dark:text-slate-400">
                        <li><a class="hover:text-primary" href="#">About Us</a></li>
                        <li><a class="hover:text-primary" href="#">Careers</a></li>
                        <li><a class="hover:text-primary" href="#">Press</a></li>
                        <li><a class="hover:text-primary" href="#">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-6">Support</h4>
                    <ul class="flex flex-col gap-3 text-sm text-[#4c739a] dark:text-slate-400">
                        <li><a class="hover:text-primary" href="#">Help Center</a></li>
                        <li><a class="hover:text-primary" href="#">Terms of Service</a></li>
                        <li><a class="hover:text-primary" href="#">Privacy Policy</a></li>
                        <li><a class="hover:text-primary" href="#">Cookie Settings</a></li>
                    </ul>
                </div>
            </div>
            <div class="max-w-[1200px] mx-auto mt-12 pt-8 border-t border-slate-200 dark:border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-xs text-[#4c739a] dark:text-slate-500">© 2024 BookMyTable Inc. All rights reserved.</p>
                <div class="flex gap-6">
                    <span class="material-symbols-outlined text-[#4c739a] hover:text-primary cursor-pointer">social_leaderboard</span>
                    <span class="material-symbols-outlined text-[#4c739a] hover:text-primary cursor-pointer">potted_plant</span>
                    <span class="material-symbols-outlined text-[#4c739a] hover:text-primary cursor-pointer">alternate_email</span>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>