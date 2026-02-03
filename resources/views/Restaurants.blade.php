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
                    <div class="size-8">
                        <svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M12.0799 24L4 19.2479L9.95537 8.75216L18.04 13.4961L18.0446 4H29.9554L29.96 13.4961L38.0446 8.75216L44 19.2479L35.92 24L44 28.7521L38.0446 39.2479L29.96 34.5039L29.9554 44H18.0446L18.04 34.5039L9.95537 39.2479L4 28.7521L12.0799 24Z" fill-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h2 class="text-[#0d141b] dark:text-white text-xl font-bold leading-tight tracking-[-0.015em]">BookMyTable</h2>
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
                <button class="hidden sm:flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold tracking-[0.015em] hover:bg-primary/90 transition-all">
                    Sign In
                </button>
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border border-[#e7edf3]" data-alt="User profile avatar" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBpucZ544wDd1L9UTIzvDYJi8suEsJnW6yiyp8liJ7eI1dxjkpVSXKNQbu7x32yU4ic9lF6P174M-unSO42ngX41JeTuJFVRrUotLHfxbCyGUWj5UgxlhZ1Ayf2E6jeeGKncUH57ase4APtQ8BMEOAiTzxNUCN9a3-jZZabzSBRGqhk5O1mtGA7bUY4O3IEk8zTiSbMPB6wvvJKMNBU-RERIvvs1f4aYyfq63bstQS92RKz4EayJpOuBG2t95-nnL0eKyoYS7PaG4Cp");'></div>
            </div>
        </div>
    </header>
    <main class="max-w-[1440px] mx-auto flex flex-col md:flex-row gap-8 px-6 py-8">
        <!-- Sidebar Filters -->
        <aside class="w-full md:w-64 flex-shrink-0">
            <div class="sticky top-24 bg-white dark:bg-background-dark p-6 rounded-xl border border-[#e7edf3] dark:border-slate-800 shadow-sm flex flex-col gap-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-[#0d141b] dark:text-white font-bold text-lg">Filters</h3>
                    <button class="text-primary text-xs font-semibold hover:underline">Clear All</button>
                </div>
                <!-- Location Filter -->
                <div class="flex flex-col gap-3">
                    <label class="text-sm font-semibold text-[#0d141b] dark:text-slate-300">City</label>
                    <div class="relative">
                        <select class="w-full appearance-none bg-[#e7edf3] dark:bg-slate-800 border-none rounded-lg text-sm px-3 py-2 text-[#0d141b] dark:text-white focus:ring-1 focus:ring-primary">
                            <option>New York City</option>
                            <option>Los Angeles</option>
                            <option>Chicago</option>
                            <option>San Francisco</option>
                        </select>
                        <span class="material-symbols-outlined absolute right-2 top-2 text-slate-400 pointer-events-none">expand_more</span>
                    </div>
                </div>
                <!-- Cuisine Filter -->
                <div class="flex flex-col gap-3">
                    <label class="text-sm font-semibold text-[#0d141b] dark:text-slate-300">Cuisine</label>
                    <div class="flex flex-col gap-2">
                        <label class="flex items-center gap-2 cursor-pointer group">
                            <input checked="" class="rounded text-primary focus:ring-primary border-[#cfdbe7] dark:bg-slate-800 dark:border-slate-700" type="checkbox" />
                            <span class="text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">Italian</span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer group">
                            <input class="rounded text-primary focus:ring-primary border-[#cfdbe7] dark:bg-slate-800 dark:border-slate-700" type="checkbox" />
                            <span class="text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">Japanese</span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer group">
                            <input class="rounded text-primary focus:ring-primary border-[#cfdbe7] dark:bg-slate-800 dark:border-slate-700" type="checkbox" />
                            <span class="text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">Mexican</span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer group">
                            <input class="rounded text-primary focus:ring-primary border-[#cfdbe7] dark:bg-slate-800 dark:border-slate-700" type="checkbox" />
                            <span class="text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">French</span>
                        </label>
                    </div>
                </div>
                <!-- Price Range Filter -->
                <div class="flex flex-col gap-3">
                    <label class="text-sm font-semibold text-[#0d141b] dark:text-slate-300">Price Range</label>
                    <div class="flex h-[38px] w-full pt-4">
                        <div class="flex h-1.5 w-full rounded-full bg-[#cfdbe7] dark:bg-slate-700 relative">
                            <div class="absolute left-[20%] right-[30%] h-full bg-primary rounded-full"></div>
                            <div class="absolute left-[20%] -top-1.5 size-4 rounded-full bg-primary border-2 border-white shadow-sm"></div>
                            <div class="absolute right-[30%] -top-1.5 size-4 rounded-full bg-primary border-2 border-white shadow-sm"></div>
                        </div>
                    </div>
                    <div class="flex justify-between text-xs font-medium text-slate-500">
                        <span>$</span>
                        <span>$$$$</span>
                    </div>
                </div>
                <!-- Rating Filter -->
                <div class="flex flex-col gap-3">
                    <label class="text-sm font-semibold text-[#0d141b] dark:text-slate-300">Minimum Rating</label>
                    <div class="flex gap-2">
                        <button class="flex-1 py-1 rounded-lg border border-[#e7edf3] dark:border-slate-700 text-xs font-semibold hover:border-primary hover:text-primary transition-all">3+</button>
                        <button class="flex-1 py-1 rounded-lg bg-primary/10 border border-primary text-primary text-xs font-semibold">4+</button>
                        <button class="flex-1 py-1 rounded-lg border border-[#e7edf3] dark:border-slate-700 text-xs font-semibold hover:border-primary hover:text-primary transition-all">4.5+</button>
                    </div>
                </div>
                <button class="mt-4 w-full bg-primary text-white py-2.5 rounded-lg font-bold text-sm shadow-md shadow-primary/20 hover:shadow-lg transition-all">
                    Apply Filters
                </button>
            </div>
        </aside>
        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col gap-6">
            <!-- Quick Chips -->
            <div class="flex items-center gap-3 overflow-x-auto pb-2 scrollbar-hide">
                <button class="flex h-9 shrink-0 items-center gap-2 rounded-full bg-white dark:bg-slate-800 border border-[#e7edf3] dark:border-slate-700 px-4 shadow-sm hover:border-primary transition-colors">
                    <span class="text-[#0d141b] dark:text-white text-sm font-medium">Open Now</span>
                </button>
                <button class="flex h-9 shrink-0 items-center gap-2 rounded-full bg-primary/10 border border-primary px-4 shadow-sm">
                    <span class="text-primary text-sm font-medium">Outdoor Seating</span>
                    <span class="material-symbols-outlined text-sm text-primary">close</span>
                </button>
                <button class="flex h-9 shrink-0 items-center gap-2 rounded-full bg-white dark:bg-slate-800 border border-[#e7edf3] dark:border-slate-700 px-4 shadow-sm hover:border-primary transition-colors">
                    <span class="text-[#0d141b] dark:text-white text-sm font-medium">Good for Groups</span>
                </button>
                <button class="flex h-9 shrink-0 items-center gap-2 rounded-full bg-white dark:bg-slate-800 border border-[#e7edf3] dark:border-slate-700 px-4 shadow-sm hover:border-primary transition-colors">
                    <span class="text-[#0d141b] dark:text-white text-sm font-medium">Free Parking</span>
                </button>
            </div>
            <div class="flex items-baseline justify-between px-2">
                <h2 class="text-[#0d141b] dark:text-white text-2xl font-bold tracking-tight">Best Restaurants in New York</h2>
                <p class="text-slate-500 text-sm">Showing 124 results</p>
            </div>
            <!-- Restaurant Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="group bg-white dark:bg-background-dark rounded-xl border border-[#e7edf3] dark:border-slate-800 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Modern Italian restaurant interior with warm lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-k2t1oFCQ2ZR_kD6PsKnzhReFUMiJbqqk-cwo_OOo28EWWRYIaQMp5ZlSW41BCi-yfKgkhqZboYFhlK3FEUWmY0L-DV2QtNs4uyJRmz3o5UsANSmNxP2rPUdeTt9zZZaOnesks-vMTIo-m7wqB8674bpePr0OPjcJ50mZuJphCE5uFGsTR0dgUU0KCwxgPqinZcCyV5cv6aAoQ3s3HteSh4TqaIMfQj3CyrinQrQZX_xz7ePiITVQVkKw7XTig6Oq4CEqijIUJL2U" />
                        <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm rounded-lg px-2 py-1 flex items-center gap-1 shadow-sm">
                            <span class="material-symbols-outlined text-yellow-500 text-base filled-icon">star</span>
                            <span class="text-xs font-bold text-slate-800">4.8</span>
                        </div>
                        <button class="absolute top-3 left-3 size-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white hover:bg-white hover:text-red-500 transition-all">
                            <span class="material-symbols-outlined text-lg">favorite</span>
                        </button>
                    </div>
                    <div class="p-4 flex flex-col gap-2">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-[#0d141b] dark:text-white font-bold text-lg leading-tight">La Dolce Vita</h3>
                                <p class="text-slate-500 dark:text-slate-400 text-xs font-medium uppercase tracking-wider">Italian • West Village • $$$</p>
                            </div>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 line-clamp-2">Authentic homemade pasta and an extensive collection of Italian wines in a cozy, rustic setting.</p>
                        <div class="pt-2 flex items-center justify-between">
                            <div class="flex flex-col">
                                <span class="text-[10px] text-slate-400 font-bold uppercase">Next Table</span>
                                <span class="text-sm font-semibold text-primary">7:30 PM Today</span>
                            </div>
                            <button class="bg-primary text-white px-5 py-2 rounded-lg font-bold text-sm hover:bg-primary/90 transition-colors">Book Now</button>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="group bg-white dark:bg-background-dark rounded-xl border border-[#e7edf3] dark:border-slate-800 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="High-end French restaurant with white table cloths" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCTQqWoT1MzvJDeKWnT_tyDsvpkICljCDzxZZOFjUw17T5u4mtzJWOsQ44rKEFbBNNLMlcQcxHyIvGc8iharoIile7fb0Kpd6EpPL6GSOiGWdoZbXUWi6wVMiG6DVS7HrKK6qu-P0xwojwDePkQjWGiyoeHxPX1rp6VTqw87akHbB5Yltj-ZebAwdRtI9ZYNIXh76Ne8tlCQd38G1WbRbL3_RPfcWFv_W1JbnsiXftmQnV6h59Y-ZaY8j2E7j8Fw8WfZDbxTbhS3bys" />
                        <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm rounded-lg px-2 py-1 flex items-center gap-1 shadow-sm">
                            <span class="material-symbols-outlined text-yellow-500 text-base filled-icon">star</span>
                            <span class="text-xs font-bold text-slate-800">4.9</span>
                        </div>
                        <button class="absolute top-3 left-3 size-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white hover:bg-white hover:text-red-500 transition-all">
                            <span class="material-symbols-outlined text-lg">favorite</span>
                        </button>
                    </div>
                    <div class="p-4 flex flex-col gap-2">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-[#0d141b] dark:text-white font-bold text-lg leading-tight">Le Petit Cochon</h3>
                                <p class="text-slate-500 dark:text-slate-400 text-xs font-medium uppercase tracking-wider">French • Upper East Side • $$$$</p>
                            </div>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 line-clamp-2">Elegant French dining experience featuring seasonal tasting menus and world-class service.</p>
                        <div class="pt-2 flex items-center justify-between">
                            <div class="flex flex-col">
                                <span class="text-[10px] text-slate-400 font-bold uppercase">Next Table</span>
                                <span class="text-sm font-semibold text-primary">8:00 PM Today</span>
                            </div>
                            <button class="bg-primary text-white px-5 py-2 rounded-lg font-bold text-sm hover:bg-primary/90 transition-colors">Book Now</button>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="group bg-white dark:bg-background-dark rounded-xl border border-[#e7edf3] dark:border-slate-800 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Lively Japanese grill with sushi chef at work" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXs3zdDldrJgjiI_TorUVcismmdgbDVvTlr5QwNGt7PwX4Yjw8Tm_rTLBVAhILy2gdY76ox_5WAuxWu_OsfKPg-_5XI31vcXfj8XKCnSH-m67Jh5MepOXT6KceDWslMKcFuvm6gl24qkbRDHsb3DzEcLGPMlNqJZKY2YWOnK5tYV1v8pRnit5j6dyiCcUW2vfYNxfH83_Eq13_JDVCByRAjL6rER4amcKjcde9fB4jHrV6wsQA3ZSEsUIy59a6WdxJaZzVUvJRWq-f" />
                        <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm rounded-lg px-2 py-1 flex items-center gap-1 shadow-sm">
                            <span class="material-symbols-outlined text-yellow-500 text-base filled-icon">star</span>
                            <span class="text-xs font-bold text-slate-800">4.6</span>
                        </div>
                        <button class="absolute top-3 left-3 size-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white hover:bg-white hover:text-red-500 transition-all">
                            <span class="material-symbols-outlined text-lg">favorite</span>
                        </button>
                    </div>
                    <div class="p-4 flex flex-col gap-2">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-[#0d141b] dark:text-white font-bold text-lg leading-tight">Sakura Grill</h3>
                                <p class="text-slate-500 dark:text-slate-400 text-xs font-medium uppercase tracking-wider">Japanese • Brooklyn • $$</p>
                            </div>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 line-clamp-2">Specializing in premium Wagyu beef and fresh omakase selections prepared by master chefs.</p>
                        <div class="pt-2 flex items-center justify-between">
                            <div class="flex flex-col">
                                <span class="text-[10px] text-slate-400 font-bold uppercase">Next Table</span>
                                <span class="text-sm font-semibold text-primary">6:45 PM Today</span>
                            </div>
                            <button class="bg-primary text-white px-5 py-2 rounded-lg font-bold text-sm hover:bg-primary/90 transition-colors">Book Now</button>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="group bg-white dark:bg-background-dark rounded-xl border border-[#e7edf3] dark:border-slate-800 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Chic Mexican restaurant with colorful decor" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUcLAaBa9ITD8LHqLf_gfj-F3kRBj6fm3sbsUwFbdgd8IIoUTD9Y_YVVwu3fXxTeGKkLFsZAwGlGP6AWfe94slDAG-1X9hGqCZUHcMMIwmvNmj9r8SMHPTrF2daIZaysyIieDHPTP6WLM9Dh6wns7lj8_xYc1ZABzGffNX_ppNzzz4DF8QBZJIb4EppVfDS3QZ9-ioGdbEX8pMKb2am7-YJV2QWN46mnEUOZN-8mEeWhutK0buzaes6iCxAi1GrGiznlFW6EwY1owL" />
                        <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm rounded-lg px-2 py-1 flex items-center gap-1 shadow-sm">
                            <span class="material-symbols-outlined text-yellow-500 text-base filled-icon">star</span>
                            <span class="text-xs font-bold text-slate-800">4.7</span>
                        </div>
                        <button class="absolute top-3 left-3 size-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white hover:bg-white hover:text-red-500 transition-all">
                            <span class="material-symbols-outlined text-lg">favorite</span>
                        </button>
                    </div>
                    <div class="p-4 flex flex-col gap-2">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-[#0d141b] dark:text-white font-bold text-lg leading-tight">El Fuego</h3>
                                <p class="text-slate-500 dark:text-slate-400 text-xs font-medium uppercase tracking-wider">Mexican • Chelsea • $$</p>
                            </div>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 line-clamp-2">Vibrant Mexican street food elevated with modern culinary techniques and specialty margaritas.</p>
                        <div class="pt-2 flex items-center justify-between">
                            <div class="flex flex-col">
                                <span class="text-[10px] text-slate-400 font-bold uppercase">Next Table</span>
                                <span class="text-sm font-semibold text-primary">9:00 PM Tomorrow</span>
                            </div>
                            <button class="bg-primary text-white px-5 py-2 rounded-lg font-bold text-sm hover:bg-primary/90 transition-colors">Book Now</button>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="group bg-white dark:bg-background-dark rounded-xl border border-[#e7edf3] dark:border-slate-800 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Gourmet bistro with artistic plate presentation" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7GP_-kBUiv4IVFDKB3RcrXsgEfIRRhBR_nWOozBk6rP2_Z7o1ODamQZ8orqKsJ2dRMukLovom-nY_JwM-dg45Bx2F0DLxbQ9f3DoOLISHgtF8s1QSA01ABAU6TUfR3ddhqITRhEHhJJ2DndFa-7A-52onapDqAGfawYt55yqUiRrdWuegEEkjoJ9t5R1e5qFPf1EdHBYTd8ojOU0dDfL60DrDp_4EbnkMn4VmwnZ6HmTry0Di9InVe3xrWavme5A_cvdXPfATA3_P" />
                        <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm rounded-lg px-2 py-1 flex items-center gap-1 shadow-sm">
                            <span class="material-symbols-outlined text-yellow-500 text-base filled-icon">star</span>
                            <span class="text-xs font-bold text-slate-800">4.5</span>
                        </div>
                        <button class="absolute top-3 left-3 size-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white hover:bg-white hover:text-red-500 transition-all">
                            <span class="material-symbols-outlined text-lg">favorite</span>
                        </button>
                    </div>
                    <div class="p-4 flex flex-col gap-2">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-[#0d141b] dark:text-white font-bold text-lg leading-tight">The Ivy Bistro</h3>
                                <p class="text-slate-500 dark:text-slate-400 text-xs font-medium uppercase tracking-wider">Mediterranean • Soho • $$$</p>
                            </div>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 line-clamp-2">A sun-drenched escape offering fresh seafood and garden-to-table specialties from the Mediterranean.</p>
                        <div class="pt-2 flex items-center justify-between">
                            <div class="flex flex-col">
                                <span class="text-[10px] text-slate-400 font-bold uppercase">Next Table</span>
                                <span class="text-sm font-semibold text-primary">1:00 PM Sunday</span>
                            </div>
                            <button class="bg-primary text-white px-5 py-2 rounded-lg font-bold text-sm hover:bg-primary/90 transition-colors">Book Now</button>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="group bg-white dark:bg-background-dark rounded-xl border border-[#e7edf3] dark:border-slate-800 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Industrial style brewery and kitchen" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBDt9tjn5TX_PNitG7UleeAmW3F5d0zZhrCak_qoAI5uNKTTQsCUR9x0PjDgev5KkgMyGKIGxjL72_aO16LONBqrskgVBuy255xIhgeciCO_UK1nivZ6WThBrDCoU28W2TrXBxUA5wUgZNxZNwvFWIQtK0RcDNjmHFaosEa2T5rK4pNcxXyfnql6as2ED5sr52PWmQ-qYUJ65dSpCOUZhhdNuxl_nkQhXkt78X5AaQb8jiVy36FaxjX7aif3uFk_JUBmDL9Dcc6JR6I" />
                        <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm rounded-lg px-2 py-1 flex items-center gap-1 shadow-sm">
                            <span class="material-symbols-outlined text-yellow-500 text-base filled-icon">star</span>
                            <span class="text-xs font-bold text-slate-800">4.4</span>
                        </div>
                        <button class="absolute top-3 left-3 size-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white hover:bg-white hover:text-red-500 transition-all">
                            <span class="material-symbols-outlined text-lg">favorite</span>
                        </button>
                    </div>
                    <div class="p-4 flex flex-col gap-2">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-[#0d141b] dark:text-white font-bold text-lg leading-tight">Barrel &amp; Bones</h3>
                                <p class="text-slate-500 dark:text-slate-400 text-xs font-medium uppercase tracking-wider">Steakhouse • Midtown • $$$</p>
                            </div>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 line-clamp-2">Modern American steakhouse with an emphasis on dry-aged cuts and small-batch bourbon pairings.</p>
                        <div class="pt-2 flex items-center justify-between">
                            <div class="flex flex-col">
                                <span class="text-[10px] text-slate-400 font-bold uppercase">Next Table</span>
                                <span class="text-sm font-semibold text-primary">7:15 PM Today</span>
                            </div>
                            <button class="bg-primary text-white px-5 py-2 rounded-lg font-bold text-sm hover:bg-primary/90 transition-colors">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="flex items-center justify-center gap-2 mt-8 py-6">
                <button class="size-10 flex items-center justify-center rounded-lg border border-[#e7edf3] dark:border-slate-800 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>
                <button class="size-10 flex items-center justify-center rounded-lg bg-primary text-white font-bold">1</button>
                <button class="size-10 flex items-center justify-center rounded-lg border border-[#e7edf3] dark:border-slate-800 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">2</button>
                <button class="size-10 flex items-center justify-center rounded-lg border border-[#e7edf3] dark:border-slate-800 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">3</button>
                <span class="px-2">...</span>
                <button class="size-10 flex items-center justify-center rounded-lg border border-[#e7edf3] dark:border-slate-800 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">12</button>
                <button class="size-10 flex items-center justify-center rounded-lg border border-[#e7edf3] dark:border-slate-800 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
            </div>
        </div>
    </main>
    <!-- Map View floating action button (Mobile/Tablet visible usually) -->
    <button class="fixed bottom-8 right-8 flex items-center gap-2 bg-[#0d141b] text-white px-6 py-3 rounded-full shadow-xl hover:scale-105 transition-transform">
        <span class="material-symbols-outlined">map</span>
        <span class="font-bold text-sm">Map View</span>
    </button>
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