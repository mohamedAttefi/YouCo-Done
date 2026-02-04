<x-app-layout>
    <main class="max-w-[1000px] mx-auto px-6 py-10">
        <!-- Page Heading -->
        <div class="flex flex-wrap items-center justify-between gap-4 mb-8">
            <div class="flex flex-col gap-1">
                <h1 class="text-3xl font-black leading-tight tracking-tight">Add New Restaurant</h1>
                <p class="text-slate-500 dark:text-slate-400 text-base">Fill in the details below to list your restaurant on BookMyTable.</p>
            </div>
            <button class="flex items-center gap-2 px-4 py-2 bg-slate-100 dark:bg-slate-800 rounded-lg text-sm font-bold hover:bg-slate-200 transition-colors">
                <span class="material-symbols-outlined text-sm">arrow_back</span>
                <span>Back to Dashboard</span>
            </button>
        </div>
        <div class="space-y-8">
            <form
                action=""
                method="POST"
                enctype="multipart/form-data">
                @csrf
                <!-- Basic Information Section -->
                <section class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-100 dark:border-slate-800 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">info</span>
                        <h2 class="text-lg font-bold">Basic Information</h2>
                    </div>
                    <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold">Restaurant Name</label>
                            <input name="" class="form-input w-full rounded-lg border-slate-200 dark:border-slate-700 bg-background-light dark:bg-slate-800 h-12 px-4 focus:ring-primary focus:border-primary" placeholder="e.g. The Golden Bistro" type="text" />
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold">Cuisine Type</label>
                            <select class="form-input w-full rounded-lg border-slate-200 dark:border-slate-700 bg-background-light dark:bg-slate-800 h-12 px-4 focus:ring-primary focus:border-primary">
                                <option value="">Select cuisine</option>
                                <option value="italian">Italian</option>
                                <option value="japanese">Japanese</option>
                                <option value="fusion">Fusion</option>
                                <option value="mexican">Mexican</option>
                                <option value="vegan">Vegan</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-2 md:col-span-2">
                            <label class="text-sm font-semibold">Tagline (Brief Description)</label>
                            <input class="form-input w-full rounded-lg border-slate-200 dark:border-slate-700 bg-background-light dark:bg-slate-800 h-12 px-4 focus:ring-primary focus:border-primary" placeholder="e.g. Authentic Italian flavors in the heart of the city" type="text" />
                        </div>
                    </div>
                </section>
                <!-- Location Details -->
                <section class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-100 dark:border-slate-800 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">location_on</span>
                        <h2 class="text-lg font-bold">Location Details</h2>
                    </div>
                    <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold">City</label>
                            <input class="form-input w-full rounded-lg border-slate-200 dark:border-slate-700 bg-background-light dark:bg-slate-800 h-12 px-4 focus:ring-primary focus:border-primary" placeholder="e.g. San Francisco" type="text" />
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold">Zip Code</label>
                            <input class="form-input w-full rounded-lg border-slate-200 dark:border-slate-700 bg-background-light dark:bg-slate-800 h-12 px-4 focus:ring-primary focus:border-primary" placeholder="94103" type="text" />
                        </div>
                        <div class="flex flex-col gap-2 md:col-span-2">
                            <label class="text-sm font-semibold">Full Address</label>
                            <textarea class="form-input w-full rounded-lg border-slate-200 dark:border-slate-700 bg-background-light dark:bg-slate-800 p-4 focus:ring-primary focus:border-primary" placeholder="Enter full street address, floor, and suite number" rows="3"></textarea>
                        </div>
                    </div>
                </section>
                <!-- Operations -->
                <section class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-100 dark:border-slate-800 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">schedule</span>
                        <h2 class="text-lg font-bold">Logistics &amp; Operations</h2>
                    </div>
                    <div class="p-6 space-y-6">
                        <div class="flex flex-col gap-2 max-w-[240px]">
                            <label class="text-sm font-semibold">Seating Capacity</label>
                            <div class="flex items-center gap-3">
                                <button class="flex size-10 items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700">
                                    <span class="material-symbols-outlined">remove</span>
                                </button>
                                <input class="form-input w-full text-center rounded-lg border-slate-200 dark:border-slate-700 bg-background-light dark:bg-slate-800 h-10 focus:ring-primary focus:border-primary" type="number" value="25" />
                                <button class="flex size-10 items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700">
                                    <span class="material-symbols-outlined">add</span>
                                </button>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <p class="text-sm font-semibold">Opening Hours</p>
                            <div class="grid grid-cols-1 gap-3">
                                <!-- Weekday entry example -->
                                <div class="flex flex-wrap items-center justify-between p-3 rounded-lg border border-slate-100 dark:border-slate-800 bg-slate-50 dark:bg-slate-800/50">
                                    <span class="font-medium w-24">Monday - Friday</span>
                                    <div class="flex items-center gap-2">
                                        <input class="form-input text-sm rounded-lg border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 focus:ring-primary" type="time" value="09:00" />
                                        <span class="text-slate-400">to</span>
                                        <input class="form-input text-sm rounded-lg border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 focus:ring-primary" type="time" value="22:00" />
                                    </div>
                                    <div class="flex items-center gap-2 mt-2 sm:mt-0">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input checked="" class="sr-only peer" type="checkbox" />
                                            <div class="w-9 h-5 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-primary"></div>
                                            <span class="ml-3 text-xs font-medium text-slate-500">Open</span>
                                        </label>
                                    </div>
                                </div>
                                <!-- Weekend entry example -->
                                <div class="flex flex-wrap items-center justify-between p-3 rounded-lg border border-slate-100 dark:border-slate-800 bg-slate-50 dark:bg-slate-800/50">
                                    <span class="font-medium w-24">Sat - Sun</span>
                                    <div class="flex items-center gap-2">
                                        <input class="form-input text-sm rounded-lg border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 focus:ring-primary" type="time" value="10:00" />
                                        <span class="text-slate-400">to</span>
                                        <input class="form-input text-sm rounded-lg border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 focus:ring-primary" type="time" value="23:30" />
                                    </div>
                                    <div class="flex items-center gap-2 mt-2 sm:mt-0">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input checked="" class="sr-only peer" type="checkbox" />
                                            <div class="w-9 h-5 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-primary"></div>
                                            <span class="ml-3 text-xs font-medium text-slate-500">Open</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Media Upload -->
                <section class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-100 dark:border-slate-800 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">photo_library</span>
                        <h2 class="text-lg font-bold">Media &amp; Gallery</h2>
                    </div>
                    <div class="p-6 space-y-6">

                        <input
                            type="file"
                            name="images[]"
                            multiple
                            accept="image/png,image/jpeg"
                            class="hidden"
                            id="images" />

                        <label for="images"
                            class="border-2 border-dashed border-slate-200 dark:border-slate-700 rounded-xl p-10 flex flex-col items-center justify-center bg-slate-50 dark:bg-slate-800/30 hover:bg-slate-100 dark:hover:bg-slate-800/50 transition-all cursor-pointer">
                            <span class="material-symbols-outlined text-4xl text-primary mb-4">cloud_upload</span>
                            <p class="text-base font-bold mb-1">Upload Gallery</p>
                            <p class="text-sm text-slate-500 text-center">
                                PNG, JPG up to 10MB.
                            </p>
                        </label>
                    </div>

                    <!-- Previews -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-5 gap-4">
                        <div class="relative aspect-square rounded-lg overflow-hidden border border-slate-200 dark:border-slate-700 group">
                            <img class="object-cover w-full h-full" data-alt="Modern restaurant interior with warm lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCN6D9urUxBDsY812rhpJIvbF_8L_yKJharuPuqOsyd6C9EEy76AoBKmXW9rlRUplr8InIOLhFSc5b1qOzbANFQ1q8opjyFB7Ty51oxhDpRkKIw2W57s_TWiqVbFkY7BkEpJGb2rLK56h2Rz69H4Q2AOXbihZWrWFAd3IBct5XnVsWPdRL4wNguE0alW0GEICCZ5JdnRvtPHRDIFnZFQdaApXUn_EuvuyOTMxfpkHtKRQsGGomswSnJzjnAgAwkLYjAtRe42ZEdmawa" />
                            <button class="absolute top-1 right-1 size-6 bg-red-500 text-white rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity shadow-lg">
                                <span class="material-symbols-outlined text-[16px]">close</span>
                            </button>
                        </div>
                        <div class="relative aspect-square rounded-lg overflow-hidden border border-slate-200 dark:border-slate-700 group">
                            <img class="object-cover w-full h-full" data-alt="Close up of gourmet food plate" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBH_CLD8golIezTphJGhcN1Mx_xcgTuwNGllz3W_VRDXhmvzVnpOoBMi42SZfFILKhCAjbhtwzWnOaUU_hD6HgE1RPOI25NKJiUwZACfezLGPQ9PbOX751enCqXzSC31GdnOoztpohQmR_YBWalL7Ac7StWsxImuDSxoFUkjELQWjbA0RSkhd8sImvKVPGFtD992dmUK-kGWNQlnM3cH1OfQlJb1EZL_vOKA9x9bTrQyv3ncVo3Y5HA3viEh29Zgao_y1mNYw2oUjaG" />
                            <button class="absolute top-1 right-1 size-6 bg-red-500 text-white rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity shadow-lg">
                                <span class="material-symbols-outlined text-[16px]">close</span>
                            </button>
                        </div>
                        <div class="relative aspect-square rounded-lg overflow-hidden border border-slate-200 dark:border-slate-700 group flex items-center justify-center bg-slate-100 dark:bg-slate-800">
                            <span class="material-symbols-outlined text-slate-400">add_photo_alternate</span>
                        </div>
                    </div>
                </section>
            </form>
        </div>

        </div>
        <!-- Sticky Footer Action Bar -->
        <div class="mt-10 mb-20 flex items-center justify-end gap-4 p-6 bg-white dark:bg-slate-900 rounded-xl shadow-lg border border-slate-200 dark:border-slate-800">
            <button class="px-6 py-3 rounded-lg font-bold text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                Cancel
            </button>
            <button class="px-10 py-3 bg-primary text-white rounded-lg font-bold hover:bg-blue-600 transition-colors shadow-md shadow-primary/20">
                Save Restaurant
            </button>
        </div>
    </main>
    <!-- Map Visualization Support -->
    <div class="hidden" data-location="San Francisco" style=""></div>
</x-app-layout>