<x-app-layout>
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
                @foreach($restaurants as $restaurant )
                <div class="group bg-white dark:bg-background-dark rounded-xl border border-[#e7edf3] dark:border-slate-800 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Modern Italian restaurant interior with warm lighting" src="{{ $restaurant->photos->first() ? $restaurant->photos->first()->url:'https://lh3.googleusercontent.com/aida-public/AB6AXuC-k2t1oFCQ2ZR_kD6PsKnzhReFUMiJbqqk-cwo_OOo28EWWRYIaQMp5ZlSW41BCi-yfKgkhqZboYFhlK3FEUWmY0L-DV2QtNs4uyJRmz3o5UsANSmNxP2rPUdeTt9zZZaOnesks-vMTIo-m7wqB8674bpePr0OPjcJ50mZuJphCE5uFGsTR0dgUU0KCwxgPqinZcCyV5cv6aAoQ3s3HteSh4TqaIMfQj3CyrinQrQZX_xz7ePiITVQVkKw7XTig6Oq4CEqijIUJL2U'}}"/>
                        <button class="absolute top-3 left-3 size-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white hover:bg-white hover:text-red-500 transition-all">
                            <span class="material-symbols-outlined text-lg">favorite</span>
                        </button>
                    </div>
                    <div class="p-4 flex flex-col gap-2">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-[#0d141b] dark:text-white font-bold text-lg leading-tight">{{ $restaurant->name }}</h3>
                                <p class="text-slate-500 dark:text-slate-400 text-xs font-medium uppercase tracking-wider">{{ $restaurant->city }} • {{ $restaurant->address }}</p>
                            </div>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 line-clamp-2">{{ $restaurant->description }}</p>
                        <div class="pt-2 flex items-center justify-between">
                            <div class="flex flex-col">
                                <span class="text-[10px] text-slate-400 font-bold uppercase">Ouvrir à</span>
                                <span class="text-sm font-semibold text-primary">{{ (new DateTime( $restaurant->opening_time))->format('H:i') }}</span>
                            </div>
                            <a href="{{ route('show.restaurant', $restaurant->id) }}" class="bg-primary text-white px-5 py-2 rounded-lg font-bold text-sm hover:bg-primary/90 transition-colors">Voir détail</a>
                        </div>
                    </div>
                </div>
                @endforeach
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
</x-app-layout>