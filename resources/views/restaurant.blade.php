<x-app-layout>
    <main class="max-w-[1200px] mx-auto px-4 md:px-10 lg:px-40 py-6">
        <!-- Breadcrumbs -->
        <nav class="flex flex-wrap gap-2 mb-4">
            <a class="text-[#4c739a] dark:text-slate-400 text-sm font-medium leading-normal hover:text-primary" href="#">Home</a>
            <span class="text-[#4c739a] dark:text-slate-400 text-sm font-medium leading-normal">/</span>
            <a class="text-[#4c739a] dark:text-slate-400 text-sm font-medium leading-normal" href="#">Explore</a>
            <span class="text-[#4c739a] dark:text-slate-400 text-sm font-medium leading-normal">/</span>
            <span class="text-[#0d141b] dark:text-white text-sm font-medium leading-normal">{{ $restaurant->name }}</span>
        </nav>
        <!-- Image Gallery Grid -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-3 mb-8">
            <div class="md:col-span-2 h-[400px]">
                <div class="w-full h-full bg-center bg-no-repeat bg-cover rounded-lg" data-alt="Interior view of a cozy French bistro" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDSranjpJlXXk-2pMXXSkahEPy1Wqboj9TLNrh0TqjIM4Oaw9rtYnvW0Bqjlihlz6InHEUXTHhY7aQVaI-IGBBsuEiZtU3WtEwSjJHbeWTC3wLKE-r5TGZoAu6cY3UvAUdO6UBMo2QglMUKZqyoX7OrO5Zz247nWNpgKzvpG7sIlOia1IQsuGHptqgzeqRT_NaFqmQA3EUUV8CPYu5_-uDWuAPoj1vbBYh6X2B6a1PBVRJpP_SaPBVx0P9jlGjQ7xXfqIFW5CBMdOgP");'></div>
            </div>
            <div class="flex flex-col gap-3 h-[400px]">
                <div class="flex-1 bg-center bg-no-repeat bg-cover rounded-lg" data-alt="Platter of gourmet French appetizers" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBNDboEcyiHn0FRa0O6eTa45f0eF5M75NZ-98nD-IK-tbE9CisP3oiuzDpwf_2DIoLzXJ4IVjBaEeUmU43UgO9mS_VhLDkSYSqVghJ13-VZr6Qvz-dDzw7SSMIMqqb_nge07KizlFtd2NgB29nEdb7nywTwVqAq21rNknhi54cbccyQ53Q5ZC3-QovriJ_xZU4YRJT7xfe7X4OFrJ4SF1KV3XsPhVObg83kvAkVDjv332oHZdTvt9Mk0BjKP0TfvH7hzcMRyhyrN8p1");'></div>
                <div class="flex-1 bg-center bg-no-repeat bg-cover rounded-lg relative group cursor-pointer" data-alt="Selection of French desserts" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDDw0gkA2ctebHKq8R-jNfIjFpfkup-DAGWNv72RU5Y2RYHQ0W73epLeLthQ7RubJ5-Zu7jlFXfRtru0Z1xqQ1kmuj3AjnRIQCc2F9P4iBZgH7wGnjElZTXg9UCJbRcFJ6Xg-YyAGtDVGECnIT4kLmj1nLQziIPtSp7azONiKdkHsxVMPnDvFBt_51iKAW-M6I1XEIyIRcY2g07kT376SxWLWUH-K2q3aVCi8uTSgYcaD-JeYi1u30OuTcr8X3qfy_BKjqFUzsYP45B");'>
                    <div class="absolute inset-0 bg-black/40 rounded-lg flex items-center justify-center group-hover:bg-black/50 transition-all">
                        <span class="text-white font-bold text-lg">+12 Photos</span>
                    </div>
                </div>
            </div>
        </section>
        <div class="flex flex-col lg:flex-row gap-10">
            <div class="flex-1 min-w-0">
                <!-- Page Heading -->
                <div class="flex flex-wrap justify-between items-start gap-3 mb-6">
                    <div class="flex flex-col gap-2">
                        <h1 class="text-[#0d141b] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">{{ $restaurant->name }}</h1>
                        <p class="text-[#4c739a] dark:text-slate-400 text-lg font-normal leading-normal">{{ $restaurant->city }} • {{ $restaurant->address }}</p>
                        <div class="flex items-center gap-2 mt-1">
                            <button class="flex items-center justify-center rounded-lg h-10 px-4 bg-[#e7edf3] dark:bg-slate-800 text-[#0d141b] dark:text-white text-sm font-bold leading-normal hover:bg-[#d0dbe7] transition-colors">
                                <span class="material-symbols-outlined text-lg mr-2">favorite</span>
                                Save
                            </button>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-[#0d141b] dark:text-white text-2xl font-bold mb-6">Main Courses</h3>
                    <div class="grid grid-cols-1 gap-6">
                        @foreach($menuItems as $Item)
                        <div class="flex flex-col gap-1 pb-4 border-b border-dashed border-slate-300 dark:border-slate-700">
                            <div class="flex justify-between font-bold text-lg">
                                <span class="dark:text-white">{{ $Item->title }}</span>
                                <span class="text-primary">${{ $Item->price }}</span>
                            </div>
                            <p class="text-[#4c739a] dark:text-slate-400">{{ $Item->description }}</p>
                        </div>
                        @endforeach
                        <div class="flex flex-col gap-1 pb-4 border-b border-dashed border-slate-300 dark:border-slate-700">
                            <div class="flex justify-between font-bold text-lg">
                                <span class="dark:text-white">Coq au Vin</span>
                                <span class="text-primary">$34</span>
                            </div>
                            <p class="text-[#4c739a] dark:text-slate-400">Red wine braised chicken, mushrooms, pearl onions, bacon</p>
                        </div>
                        <div class="flex flex-col gap-1 pb-4 border-b border-dashed border-slate-300 dark:border-slate-700">
                            <div class="flex justify-between font-bold text-lg">
                                <span class="dark:text-white">Roasted Duck Breast</span>
                                <span class="text-primary">$38</span>
                            </div>
                            <p class="text-[#4c739a] dark:text-slate-400">Orange gastrique, parsnip puree, glazed carrots</p>
                        </div>
                    </div>
                </div>


            </div>

            <div class="bg-white dark:bg-slate-800/50 w-[50%] h-fit rounded-xl p-8 mb-12">
                <div>
                    <h3 class="text-[#0d141b] dark:text-white text-2xl font-bold mb-6">Opening Hours</h3>
                    <div class="grid grid-cols-1 gap-6">
                        <div class="flex flex-col gap-1 pb-4 border-b border-dashed border-slate-300 dark:border-slate-700">
                            <div class="flex justify-between font-bold text-lg">
                                <span class="dark:text-white">Open at:</span>
                                <span class="text-primary">{{ (new DateTime($restaurant->opening_time))->format('H:i')." AM" }}</span>
                            </div>
                            <div class="flex justify-between font-bold text-lg">
                                <span class="dark:text-white">Close at:</span>
                                <span class="text-primary">{{ (new DateTime($restaurant->closing_time))->format('H:i')." PM" }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <aside class="lg:w-[360px] mt-10">
            <div class="sticky top-24">
                <div class="bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-slate-200 dark:border-slate-700 p-6">
                    <h4 class="text-[#0d141b] dark:text-white text-xl font-bold mb-6">Make a Reservation</h4>
                    <div class="flex flex-col gap-4">
                        <div>
                            <label class="text-sm font-bold mb-2 block dark:text-slate-300">Party Size</label>
                            <div class="relative">
                                <select class="form-select w-full rounded-lg border-slate-300 dark:border-slate-700 bg-transparent py-3 pl-4 pr-10 appearance-none focus:ring-primary focus:border-primary">
                                    <option>2 People</option>
                                    <option>3 People</option>
                                    <option>4 People</option>
                                    <option>5+ People</option>
                                </select>
                                <span class="material-symbols-outlined absolute right-3 top-3 text-slate-400 pointer-events-none">expand_more</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="text-sm font-bold mb-2 block dark:text-slate-300">Date</label>
                                <div class="relative">
                                    <input class="form-input w-full rounded-lg border-slate-300 dark:border-slate-700 bg-transparent py-3 pl-4 focus:ring-primary focus:border-primary" type="text" value="Oct 24, 2023" />
                                    <span class="material-symbols-outlined absolute right-3 top-3 text-slate-400 pointer-events-none text-xl">calendar_today</span>
                                </div>
                            </div>
                            <div>
                                <label class="text-sm font-bold mb-2 block dark:text-slate-300">Time</label>
                                <div class="relative">
                                    <select class="form-select w-full rounded-lg border-slate-300 dark:border-slate-700 bg-transparent py-3 pl-4 pr-10 appearance-none focus:ring-primary focus:border-primary">
                                        <option>7:00 PM</option>
                                        <option>7:30 PM</option>
                                        <option>8:00 PM</option>
                                        <option>8:30 PM</option>
                                    </select>
                                    <span class="material-symbols-outlined absolute right-3 top-3 text-slate-400 pointer-events-none">schedule</span>
                                </div>
                            </div>
                        </div>
                        <button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 rounded-lg transition-all shadow-lg shadow-primary/20 mt-4">
                            Reserve a Table
                        </button>
                        <p class="text-xs text-center text-[#4c739a] dark:text-slate-500 mt-2">No credit card required to book</p>
                    </div>
                    <hr class="my-6 border-slate-200 dark:border-slate-700" />
                    <div class="flex flex-col gap-4">
                        <div class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary">location_on</span>
                            <div>
                                <p class="font-bold text-sm dark:text-white">123 French Quarter Ave</p>
                                <p class="text-sm text-[#4c739a] dark:text-slate-400">Upper East Side, NY 10021</p>
                                <a class="text-primary text-xs font-bold hover:underline" href="#">Get Directions</a>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary">call</span>
                            <p class="text-sm font-medium dark:text-slate-300">(212) 555-0198</p>
                        </div>
                        <div class="rounded-lg overflow-hidden h-32 w-full mt-2 grayscale">
                            <div class="w-full h-full bg-slate-200 dark:bg-slate-700 flex items-center justify-center text-slate-400" data-location="New York City" style="">
                                <span class="material-symbols-outlined text-4xl">map</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6 bg-primary/10 rounded-xl p-4 border border-primary/20">
                    <div class="flex gap-3">
                        <span class="material-symbols-outlined text-primary">loyalty</span>
                        <div>
                            <p class="text-sm font-bold text-primary">Points Booster</p>
                            <p class="text-xs text-primary/80">Earn 500 bonus points for dining here this month!</p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        </div>
    </main>
    </body>

    </html>
</x-app-layout>