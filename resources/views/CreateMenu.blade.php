<x-app-layout class="bg-background-light dark:bg-background-dark text-[#0d0d1b] dark:text-white antialiased">
    <div class="min-h-screen bg-background-light dark:bg-background-dark text-[#0d0d1b] dark:text-white">
        <div class="max-w-5xl mx-auto px-6 py-10">
            <form method="POST" action="{{ route('menu.store', $id) }}" class="bg-white dark:bg-[#161632] rounded-2xl shadow-sm border border-[#cfcfe7] dark:border-[#2a2a4a] overflow-hidden">
                @csrf
                <div class="p-4 bg-gray-50 dark:bg-white/5 border-b border-[#cfcfe7] dark:border-[#2a2a4a] flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[#4c4c9a] cursor-move">drag_indicator</span>
                        <input class="bg-transparent border-none font-bold text-lg p-0 focus:ring-0 w-40" type="text" name="category_name" value="Starters" />
                    </div>
                    <button type="button" class="p-2 text-gray-500 hover:text-red-500 transition-colors" aria-label="Delete category">
                        <span class="material-symbols-outlined">delete</span>
                    </button>
                </div>
                <div class="p-6 grid gap-6 lg:grid-cols-[minmax(0,1fr)_280px]">
                    <div id="items-container" class="flex flex-col gap-6">
                        <!-- Item 1 -->
                        <div class="menu-item group flex flex-col lg:flex-row gap-6 p-6 rounded-xl border border-dashed border-[#cfcfe7] dark:border-[#2a2a4a] relative">
                            <div class="size-32 bg-background-light dark:bg-background-dark rounded-lg flex-shrink-0 flex items-center justify-center border border-[#cfcfe7] dark:border-[#2a2a4a]">
                                <span class="material-symbols-outlined text-4xl text-[#4c4c9a]">image</span>
                            </div>
                            <div class="flex-1 grid grid-cols-1 md:grid-cols-4 gap-4">
                                <div class="md:col-span-3 flex flex-col gap-2">
                                    <label class="text-xs font-bold uppercase text-[#4c4c9a]">Item Name</label>
                                    <input class="text-sm rounded-lg border-[#cfcfe7] dark:border-[#2a2a4a] bg-background-light dark:bg-background-dark text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:ring-primary focus:border-primary px-3 py-2" name="name[]" placeholder="e.g., Bruschetta" type="text" />
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label class="text-xs font-bold uppercase text-[#4c4c9a]">Price ($)</label>
                                    <input class="text-sm rounded-lg border-[#cfcfe7] dark:border-[#2a2a4a] bg-background-light dark:bg-background-dark text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:ring-primary focus:border-primary px-3 py-2" name="price[]" placeholder="0.00" type="number" step="0.01" min="0" />
                                </div>
                                <div class="md:col-span-4 flex flex-col gap-2">
                                    <label class="text-xs font-bold uppercase text-[#4c4c9a]">Description</label>
                                    <input class="text-sm rounded-lg border-[#cfcfe7] dark:border-[#2a2a4a] bg-background-light dark:bg-background-dark text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:ring-primary focus:border-primary px-3 py-2" name="description[]" placeholder="Lightly toasted sourdough topped with tomatoes..." type="text" />
                                </div>
                            </div>
                            <button type="button" class="remove-item absolute top-2 right-2 text-gray-400 hover:text-red-500" aria-label="Remove item">
                                <span class="material-symbols-outlined text-[20px]">close</span>
                            </button>
                        </div>

                        <div id="items-actions" class="grid grid-cols-1 md:grid-cols-[minmax(0,1fr)_200px] gap-4">
                            <button id="add-item-btn" type="button" class="flex items-center justify-center gap-2 border-2 border-dashed border-[#cfcfe7] dark:border-[#2a2a4a] rounded-xl p-6 text-[#4c4c9a] hover:text-primary hover:border-primary/50 transition-all font-medium text-sm min-h-[140px]">
                                <span class="material-symbols-outlined">add</span>
                                Add Item to Starters
                            </button>
                            <button type="submit" class="bg-primary text-white px-6 py-6 rounded-xl text-sm font-bold shadow-lg shadow-primary/20 hover:opacity-90 transition-all min-h-[140px]">
                                Publish Menu
                            </button>
                        </div>
                        <template id="menu-item-template">
                            <div class="menu-item group flex flex-col lg:flex-row gap-6 p-6 rounded-xl border border-dashed border-[#cfcfe7] dark:border-[#2a2a4a] relative">
                                <div class="size-32 bg-background-light dark:bg-background-dark rounded-lg flex-shrink-0 flex items-center justify-center border border-[#cfcfe7] dark:border-[#2a2a4a]">
                                    <span class="material-symbols-outlined text-4xl text-[#4c4c9a]">image</span>
                                </div>

                                <div class="flex-1 grid grid-cols-1 md:grid-cols-4 gap-4">
                                    <div class="md:col-span-3 flex flex-col gap-2">
                                        <label class="text-xs font-bold uppercase text-[#4c4c9a]">Item Name</label>
                                        <input class="text-sm rounded-lg border-[#cfcfe7] dark:border-[#2a2a4a] bg-background-light dark:bg-background-dark text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:ring-primary focus:border-primary px-3 py-2" name="name[]" placeholder="Item name" type="text" />
                                    </div>

                                    <div class="flex flex-col gap-2">
                                        <label class="text-xs font-bold uppercase text-[#4c4c9a]">Price ($)</label>
                                        <input class="text-sm rounded-lg border-[#cfcfe7] dark:border-[#2a2a4a] bg-background-light dark:bg-background-dark text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:ring-primary focus:border-primary px-3 py-2" name="price[]" placeholder="0.00" type="number" step="0.01" min="0" />
                                    </div>

                                    <div class="md:col-span-4 flex flex-col gap-2">
                                        <label class="text-xs font-bold uppercase text-[#4c4c9a]">Description</label>
                                        <input class="text-sm rounded-lg border-[#cfcfe7] dark:border-[#2a2a4a] bg-background-light dark:bg-background-dark text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:ring-primary focus:border-primary px-3 py-2" name="description[]" placeholder="Description" type="text" />
                                    </div>
                                </div>

                                <button type="button" class="remove-item absolute top-2 right-2 text-gray-400 hover:text-red-500" aria-label="Remove item">
                                    <span class="material-symbols-outlined text-[20px]">close</span>
                                </button>
                            </div>
                        </template>
                    </div>

                    <aside class="rounded-xl border border-[#cfcfe7] dark:border-[#2a2a4a] bg-gray-50 dark:bg-white/5 p-4 h-fit lg:sticky lg:top-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-sm font-bold text-slate-700 dark:text-slate-200 uppercase tracking-wide">Current Items</h3>
                            <span id="current-items-count" class="text-xs font-semibold text-slate-500 dark:text-slate-400">{{ count($menu) > 0 ?count($menu):0 }}</span>
                        </div>
                        <ul id="current-items-list" class="mt-3 space-y-2 text-sm">
                            @forelse($menu as $item)
                            <li class="flex items-center justify-between gap-3 rounded-lg border border-[#e2e6f2] dark:border-[#2a2a4a] bg-white dark:bg-[#1b1b3a] px-3 py-2">
                                <span class="text-slate-700 dark:text-slate-200 font-medium truncate">{{ $item->title }}</span>
                                <span class="text-slate-500 dark:text-slate-400 text-xs font-semibold whitespace-nowrap">${{ $item->price}}</span>
                            </li>
                            @empty
                            <li class="text-slate-400 dark:text-slate-500">No items yet</li>
                            @endforelse
                        </ul>
                    </aside>
                </div>
            </form>
        </div>
    </div>
    <script>
        const addBtn = document.getElementById("add-item-btn");
        const container = document.getElementById("items-container");
        const template = document.getElementById("menu-item-template");
        const actionsRow = document.getElementById("items-actions");
        const currentItemsList = document.getElementById("current-items-list");
        const currentItemsCount = document.getElementById("current-items-count");

        const formatPrice = (raw) => {
            if (!raw) {
                return "—";
            }
            const value = Number.parseFloat(raw);
            if (Number.isNaN(value)) {
                return "—";
            }
            return `$${value.toFixed(2)}`;
        };

        const syncCurrentItems = () => {
                if (!currentItemsList || !currentItemsCount || !container) {
                    return;
                }
                const items = Array.from(container.querySelectorAll(".menu-item"));
                currentItemsCount.textContent = String(items.length);

                if (items.length === 0) {
                    currentItemsList.innerHTML = `<li class="text-slate-400 dark:text-slate-500">No items yet.</li>`;
                    return;
                }

                //     const listMarkup = items
                //         .map((item, index) => {
                //             const nameInput = item.querySelector('input[name="name[]"]');
                //             const priceInput = item.querySelector('input[name="price[]"]');
                //             const name = nameInput?.value.trim() || `Item ${index + 1}`;
                //             const price = formatPrice(priceInput?.value.trim());
                //             return `
                //                 <li class="flex items-center justify-between gap-3 rounded-lg border border-[#e2e6f2] dark:border-[#2a2a4a] bg-white dark:bg-[#1b1b3a] px-3 py-2">
                //                     <span class="text-slate-700 dark:text-slate-200 font-medium truncate">${name}</span>
                //                     <span class="text-slate-500 dark:text-slate-400 text-xs font-semibold whitespace-nowrap">${price}</span>
                //                 </li>
                //             `;
                //         })
                //         .join("");

                //     currentItemsList.innerHTML = listMarkup;
                // };

                if (addBtn && container && template && actionsRow) {
                    addBtn.addEventListener("click", (e) => {
                        e.preventDefault();
                        const clone = template.content.cloneNode(true);
                        container.insertBefore(clone, actionsRow);
                        syncCurrentItems();
                    });
                }

                if (container) {
                    container.addEventListener("input", (e) => {
                        if (e.target.matches('input[name="name[]"], input[name="price[]"]')) {
                            syncCurrentItems();
                        }
                    });
                }

                document.addEventListener("click", function(e) {
                    if (e.target.closest(".remove-item")) {
                        e.target.closest(".menu-item").remove();
                        syncCurrentItems();
                    }
                });

                syncCurrentItems();
    </script>
</x-app-layout>