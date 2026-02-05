<x-app-layout class="bg-background-light dark:bg-background-dark text-[#0d0d1b] dark:text-white antialiased">
    <div class="relative flex min-h-screen flex-col">
        <!-- Top Navigation Bar -->
        <header class="flex items-center justify-between border-b border-solid border-[#cfcfe7] dark:border-[#2a2a4a] bg-white dark:bg-[#161632] px-10 py-3 sticky top-0 z-50">
            <div class="flex items-center gap-4">
                <div class="text-primary size-8">
                    <svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" d="M12.0799 24L4 19.2479L9.95537 8.75216L18.04 13.4961L18.0446 4H29.9554L29.96 13.4961L38.0446 8.75216L44 19.2479L35.92 24L44 28.7521L38.0446 39.2479L29.96 34.5039L29.9554 44H18.0446L18.04 34.5039L9.95537 39.2479L4 28.7521L12.0799 24Z" fill-rule="evenodd"></path>
                    </svg>
                </div>
                <h2 class="text-lg font-bold tracking-tight">BookMyTable</h2>
            </div>
            <div class="flex flex-1 justify-end gap-8 items-center">
                <nav class="hidden md:flex items-center gap-9">
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Dashboard</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Reservations</a>
                    <a class="text-primary text-sm font-semibold border-b-2 border-primary py-1" href="#">Menus</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Staff</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Settings</a>
                </nav>
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 ring-2 ring-primary/20" data-alt="User avatar profile picture" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD2kKIuMtpdO2wMWEQTdTHjDF80AsTXbIrp9vqvuhftzbFJ86Yl1mFhCCU3HMiBiSzgBfNe8ZpXNc8QsWAUkK73o0MjJWf7hJk48tzKp5x--r5CgbL0cLaGD9CRqGuA34cVygZ_xF-rBIwqNs53EoAvQVe8207Rr-kWAzs40_oYLqpMWy7PpM9J0-zMG6cRKterhmy6D2pA3kcmZyTGXfzquUF2z6udreCQ3ovlDFJUxuGajaoycPicRhFFls4ov5Fs5drrUg85ikrT");'></div>
            </div>
        </header>
        <main class="flex-1 flex justify-center py-10 px-6">
            <div class="max-w-4xl w-full flex flex-col gap-8">
                <!-- Page Header -->
                <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-4">
                    <div>
                        <h1 class="text-4xl font-black tracking-tight">Create New Menu</h1>
                        <p class="text-[#4c4c9a] dark:text-gray-400 mt-1">Design your seasonal or daily catalog.</p>
                    </div>
                    <div class="flex gap-3">
                        <button class="px-5 py-2.5 rounded-lg border border-[#cfcfe7] dark:border-[#2a2a4a] text-sm font-bold hover:bg-gray-50 dark:hover:bg-[#1a1a3a] transition-all">Save Draft</button>
                        <button class="bg-primary text-white px-6 py-2.5 rounded-lg text-sm font-bold shadow-lg shadow-primary/20 hover:opacity-90 transition-all">Publish Menu</button>
                    </div>
                </div>
                <!-- Menu Basics Card -->
                <section class="bg-white dark:bg-[#161632] rounded-xl shadow-sm border border-[#cfcfe7] dark:border-[#2a2a4a] overflow-hidden">
                    <div class="p-6 border-b border-[#cfcfe7] dark:border-[#2a2a4a]">
                        <h2 class="text-lg font-bold">Menu Basics</h2>
                        <p class="text-sm text-[#4c4c9a] dark:text-gray-400">Basic information about this specific menu.</p>
                    </div>
                    <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold">Menu Name</label>
                            <input class="rounded-lg border-[#cfcfe7] dark:border-[#2a2a4a] bg-background-light dark:bg-background-dark focus:ring-primary focus:border-primary px-4 py-3" placeholder="e.g., Summer Dinner Menu" type="text" />
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold">Availability</label>
                            <select class="rounded-lg border-[#cfcfe7] dark:border-[#2a2a4a] bg-background-light dark:bg-background-dark focus:ring-primary focus:border-primary px-4 py-3">
                                <option>Daily</option>
                                <option>Weekends Only</option>
                                <option>Specific Dates</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-2 md:col-span-2">
                            <label class="text-sm font-semibold">Short Description</label>
                            <textarea class="rounded-lg border-[#cfcfe7] dark:border-[#2a2a4a] bg-background-light dark:bg-background-dark focus:ring-primary focus:border-primary px-4 py-3" placeholder="Tell your guests what makes this menu special..." rows="3"></textarea>
                        </div>
                    </div>
                </section>
                <!-- Menu Content Editor -->
                <section class="flex flex-col gap-6">
                    <div class="flex justify-between items-center">
                        <h2 class="text-xl font-bold tracking-tight">Categories &amp; Items</h2>
                        <button class="flex items-center gap-2 text-primary font-bold text-sm bg-primary/10 px-4 py-2 rounded-lg hover:bg-primary/20 transition-all">
                            <span class="material-symbols-outlined text-[18px]">add_circle</span>
                            Add Category
                        </button>
                    </div>
                    <!-- Category Block: Starters -->
                    <div class="bg-white dark:bg-[#161632] rounded-xl shadow-sm border border-[#cfcfe7] dark:border-[#2a2a4a]">
                        <div class="p-4 bg-gray-50 dark:bg-white/5 border-b border-[#cfcfe7] dark:border-[#2a2a4a] flex justify-between items-center">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-[#4c4c9a] cursor-move">drag_indicator</span>
                                <input class="bg-transparent border-none font-bold text-lg p-0 focus:ring-0 w-40" type="text" value="Starters" />
                            </div>
                            <div class="flex gap-2">
                                <button class="p-2 text-gray-500 hover:text-red-500 transition-colors">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col gap-6">
                            <!-- Item 1 -->
                            <div class="group flex flex-col md:flex-row gap-6 p-4 rounded-lg border border-dashed border-[#cfcfe7] dark:border-[#2a2a4a] relative">
                                <div class="size-32 bg-background-light dark:bg-background-dark rounded-lg flex-shrink-0 flex items-center justify-center border border-[#cfcfe7] dark:border-[#2a2a4a] relative overflow-hidden">
                                    <span class="material-symbols-outlined text-4xl text-[#4c4c9a]">image</span>
                                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity cursor-pointer">
                                        <span class="text-white text-xs font-bold">Upload</span>
                                    </div>
                                </div>
                                <div class="flex-1 grid grid-cols-1 md:grid-cols-4 gap-4">
                                    <div class="md:col-span-3 flex flex-col gap-2">
                                        <label class="text-xs font-bold uppercase text-[#4c4c9a]">Item Name</label>
                                        <input class="text-sm rounded-lg border-[#cfcfe7] dark:border-[#2a2a4a] bg-background-light dark:bg-background-dark px-3 py-2" placeholder="e.g., Bruschetta" type="text" />
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <label class="text-xs font-bold uppercase text-[#4c4c9a]">Price ($)</label>
                                        <input class="text-sm rounded-lg border-[#cfcfe7] dark:border-[#2a2a4a] bg-background-light dark:bg-background-dark px-3 py-2" placeholder="0.00" type="number" />
                                    </div>
                                    <div class="md:col-span-4 flex flex-col gap-2">
                                        <label class="text-xs font-bold uppercase text-[#4c4c9a]">Description</label>
                                        <input class="text-sm rounded-lg border-[#cfcfe7] dark:border-[#2a2a4a] bg-background-light dark:bg-background-dark px-3 py-2" placeholder="Lightly toasted sourdough topped with tomatoes..." type="text" />
                                    </div>
                                </div>
                                <button class="absolute top-2 right-2 text-gray-400 hover:text-red-500">
                                    <span class="material-symbols-outlined text-[20px]">close</span>
                                </button>
                            </div>
                            <!-- Add Item Placeholder -->
                            <button class="flex items-center justify-center gap-2 border-2 border-dashed border-[#cfcfe7] dark:border-[#2a2a4a] rounded-lg p-4 text-[#4c4c9a] hover:text-primary hover:border-primary/50 transition-all font-medium text-sm">
                                <span class="material-symbols-outlined">add</span>
                                Add Item to Starters
                            </button>
                        </div>
                    </div>
                    <!-- Category Block: Mains -->
                    <div class="bg-white dark:bg-[#161632] rounded-xl shadow-sm border border-[#cfcfe7] dark:border-[#2a2a4a]">
                        <div class="p-4 bg-gray-50 dark:bg-white/5 border-b border-[#cfcfe7] dark:border-[#2a2a4a] flex justify-between items-center">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-[#4c4c9a] cursor-move">drag_indicator</span>
                                <input class="bg-transparent border-none font-bold text-lg p-0 focus:ring-0 w-40" type="text" value="Mains" />
                            </div>
                            <div class="flex gap-2">
                                <button class="p-2 text-gray-500 hover:text-red-500 transition-colors">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col gap-6">
                            <!-- Item 1 (Pre-filled example) -->
                            <div class="group flex flex-col md:flex-row gap-6 p-4 rounded-lg border border-[#cfcfe7] dark:border-[#2a2a4a] relative">
                                <div class="size-32 bg-cover bg-center rounded-lg flex-shrink-0 border border-[#cfcfe7] dark:border-[#2a2a4a]" data-alt="Plated gourmet main course dish" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBO6BDE5CSMtD184Tz9Ed7g8jkKLlbFK0YEUuA6pS-zseD5jhda9J41FpgLdE9ej5QJsBV9eLeuXfcLZr9JqFXdAFOZyDf2RMLF8gmk2WFeTDLytR-x40KoGA9d1GYaCJ-O2r7jCR8sKAps6YvdWVB1M6WWTHLKDEtdey0UmWp5HEgeZWFof4PSZiCDKQXz2HXpaOqkQ81I4XHTeAUXIAj64jlTgKS_LYo0M1DSNkNFjEa3Wx6lbryagIaC2PN9zIaMmuwWlFjy3RoF');"></div>
                                <div class="flex-1 grid grid-cols-1 md:grid-cols-4 gap-4">
                                    <div class="md:col-span-3 flex flex-col gap-2">
                                        <label class="text-xs font-bold uppercase text-[#4c4c9a]">Item Name</label>
                                        <input class="text-sm rounded-lg border-[#cfcfe7] dark:border-[#2a2a4a] bg-background-light dark:bg-background-dark px-3 py-2" type="text" value="Grilled Sea Bass" />
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <label class="text-xs font-bold uppercase text-[#4c4c9a]">Price ($)</label>
                                        <input class="text-sm rounded-lg border-[#cfcfe7] dark:border-[#2a2a4a] bg-background-light dark:bg-background-dark px-3 py-2" type="number" value="32.00" />
                                    </div>
                                    <div class="md:col-span-4 flex flex-col gap-2">
                                        <label class="text-xs font-bold uppercase text-[#4c4c9a]">Description</label>
                                        <input class="text-sm rounded-lg border-[#cfcfe7] dark:border-[#2a2a4a] bg-background-light dark:bg-background-dark px-3 py-2" type="text" value="Fresh sea bass served with asparagus and lemon butter sauce." />
                                    </div>
                                </div>
                                <button class="absolute top-2 right-2 text-gray-400 hover:text-red-500">
                                    <span class="material-symbols-outlined text-[20px]">close</span>
                                </button>
                            </div>
                            <button class="flex items-center justify-center gap-2 border-2 border-dashed border-[#cfcfe7] dark:border-[#2a2a4a] rounded-lg p-4 text-[#4c4c9a] hover:text-primary hover:border-primary/50 transition-all font-medium text-sm">
                                <span class="material-symbols-outlined">add</span>
                                Add Item to Mains
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
</x-app-layout>