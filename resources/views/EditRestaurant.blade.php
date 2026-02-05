<x-app-layout>
    <main class="max-w-[1000px] mx-auto px-6 py-10">
        @if ($errors->any())
        <div class="mb-6 p-4 rounded-lg bg-red-50 border border-red-200 text-red-800">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form
            action="{{ route('restaurant.update', $restaurant->id) }}"
            method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="flex flex-wrap items-center justify-between gap-4 mb-8">
                <div class="flex flex-col gap-1">
                    <h1 class="text-3xl font-black leading-tight tracking-tight">Update Restaurant</h1>
                    <p class="text-slate-500 dark:text-slate-400 text-base">Fill in the details below to list your restaurant on BookMyTable.</p>
                </div>
                <button class="flex items-center gap-2 px-4 py-2 bg-slate-100 dark:bg-slate-800 rounded-lg text-sm font-bold hover:bg-slate-200 transition-colors">
                    <span class="material-symbols-outlined text-sm">arrow_back</span>
                    <span>Back to Dashboard</span>
                </button>
            </div>
            <div class="space-y-8">

                <!-- Basic Information Section -->
                <section class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-100 dark:border-slate-800 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">info</span>
                        <h2 class="text-lg font-bold">Basic Information</h2>
                    </div>
                    <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold">Restaurant Name</label>
                            <input name="name" value="{{ $restaurant->name }}" name class="form-input w-full rounded-lg border-slate-200 dark:border-slate-700 bg-background-light dark:bg-slate-800 h-12 px-4 focus:ring-primary focus:border-primary" placeholder="e.g. The Golden Bistro" type="text" />
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold">Cuisine Type</label>
                            <select name="cuisine_type" class="form-input w-full rounded-lg border-slate-200 dark:border-slate-700 bg-background-light dark:bg-slate-800 h-12 px-4 focus:ring-primary focus:border-primary">
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
                            <input value="{{ $restaurant->description }}" name="description" class="form-input w-full rounded-lg border-slate-200 dark:border-slate-700 bg-background-light dark:bg-slate-800 h-12 px-4 focus:ring-primary focus:border-primary" placeholder="e.g. Authentic Italian flavors in the heart of the city" type="text" />
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
                            <input value="{{ $restaurant->city }}" name="city" class="form-input w-full rounded-lg border-slate-200 dark:border-slate-700 bg-background-light dark:bg-slate-800 h-12 px-4 focus:ring-primary focus:border-primary" placeholder="e.g. San Francisco" type="text" />
                        </div>
                        <div class="flex flex-col gap-2 md:col-span-2">
                            <label class="text-sm font-semibold">Full Address</label>
                            <textarea name="address" class="form-input w-full rounded-lg border-slate-200 dark:border-slate-700 bg-background-light dark:bg-slate-800 p-4 focus:ring-primary focus:border-primary" placeholder="Enter full street address, floor, and suite number" rows="3">{{ $restaurant->name }}</textarea>
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

                                <input value="{{ $restaurant->capacity }}" name="capacity" class="form-input w-full text-center rounded-lg border-slate-200 dark:border-slate-700 bg-background-light dark:bg-slate-800 h-10 focus:ring-primary focus:border-primary" type="number" value="25" />

                            </div>
                        </div>
                        <div class="space-y-4">
                            <p class="text-sm font-semibold">Opening Hours</p>
                            <div class="grid grid-cols-1 gap-3">
                                <!-- Weekday entry example -->
                                <div class="flex flex-wrap items-center justify-between p-3 rounded-lg border border-slate-100 dark:border-slate-800 bg-slate-50 dark:bg-slate-800/50">
                                    <span class="font-medium w-24">Monday - Sunday</span>
                                    <div class="flex items-center gap-2">
                                        <input value="{{ $restaurant->opening_time }}" name="opening_time" class="form-input text-sm rounded-lg border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 focus:ring-primary" type="time" value="09:00" />
                                        <span class="text-slate-400">to</span>
                                        <input name="closing_time" value="{{ $restaurant->closing_time }}" class="form-input text-sm rounded-lg border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 focus:ring-primary" type="time" value="22:00" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-100 dark:border-slate-800 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">photo_library</span>
                        <h2 class="text-lg font-bold">Media &amp; Gallery</h2>
                    </div>

                    <div class="p-6 space-y-4">
                        <label class="text-sm font-semibold">Add Image URLs</label>
                        <div id="image-inputs" class="space-y-2">
                            <div class="flex gap-2 items-center">
                                <input type="text" name="images[]" placeholder="Enter image URL" class="form-input w-full rounded-lg border-slate-200 dark:border-slate-700 bg-background-light dark:bg-slate-800 h-10 px-4 focus:ring-primary focus:border-primary image-url-input" />
                                <button type="button" class="bg-red-500 text-white px-2 py-1 rounded remove-btn">X</button>
                            </div>
                        </div>
                        <button type="button" id="add-image-btn" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-blue-600 transition-colors">Add Another Image</button>

                        <!-- Previews -->
                        <div id="preview" class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-5 gap-4 mt-4"></div>
                    </div>
                </section>



            </div>

            </div>
            <div class="mt-10 mb-20 flex items-center justify-end gap-4 p-6 bg-white dark:bg-slate-900 rounded-xl shadow-lg border border-slate-200 dark:border-slate-800">
                <button class="px-6 py-3 rounded-lg font-bold text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                    Cancel
                </button>
                <button class="px-10 py-3 bg-primary text-white rounded-lg font-bold hover:bg-blue-600 transition-colors shadow-md shadow-primary/20">
                    Update Restaurant
                </button>
            </div>
        </form>
    </main>
    <!-- Map Visualization Support -->
    <div class="hidden" data-location="San Francisco" style=""></div>
</x-app-layout>
<script>
    const addBtn = document.getElementById('add-image-btn');
    const imageInputs = document.getElementById('image-inputs');
    const previewContainer = document.getElementById('preview');

    function updatePreviews() {
        previewContainer.innerHTML = '';
        document.querySelectorAll('.image-url-input').forEach(input => {
            if (input.value.trim() !== '') {
                const div = document.createElement('div');
                div.classList.add('relative', 'aspect-square', 'rounded-lg', 'overflow-hidden', 'border', 'border-slate-200', 'dark:border-slate-700', 'group');
                div.innerHTML = `<img src="${input.value}" class="object-cover w-full h-full" />`;
                previewContainer.appendChild(div);
            }
        });
    }

    // Update preview when typing
    imageInputs.addEventListener('input', function(e) {
        if (e.target.classList.contains('image-url-input')) {
            updatePreviews();
        }
    });

    // Add new input
    addBtn.addEventListener('click', () => {
        const div = document.createElement('div');
        div.classList.add('flex', 'gap-2', 'items-center');
        div.innerHTML = `
            <input type="text" name="images[]" placeholder="Enter image URL" class="form-input w-full rounded-lg border-slate-200 dark:border-slate-700 bg-background-light dark:bg-slate-800 h-10 px-4 focus:ring-primary focus:border-primary image-url-input" />
            <button type="button" class="bg-red-500 text-white px-2 py-1 rounded remove-btn">X</button>
        `;
        imageInputs.appendChild(div);
    });

    // Remove input
    imageInputs.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-btn')) {
            e.target.parentElement.remove();
            updatePreviews();
        }
    });
</script>