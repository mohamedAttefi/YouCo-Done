<x-app-layout>
    <main class="flex-1 flex justify-center py-10 px-4">
        <div class="layout-content-container flex flex-col max-w-[1024px] flex-1 gap-6">
            
            <div class="bg-white dark:bg-slate-900 rounded-xl p-6 border border-slate-200 dark:border-slate-800 shadow-sm">
                <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                    <div class="flex flex-col md:flex-row items-center gap-6">
                        <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-24 w-24 border-4 border-slate-50 dark:border-slate-800 shadow-inner" 
                             style='background-image: url("https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=137fec&color=fff");'></div>
                        <div class="flex flex-col items-center md:items-start">
                            <h1 class="text-slate-900 dark:text-white text-2xl font-bold tracking-tight">{{ $user->name }}</h1>
                            <p class="text-slate-500 dark:text-slate-400 text-base">{{ $user->email }} • {{ ucfirst($user->role ?? 'Customer') }}</p>
                            <div class="mt-2 flex gap-2">
                                <span class="inline-flex items-center rounded-full bg-primary/10 px-2.5 py-0.5 text-xs font-medium text-primary">{{ strtoupper($user->role ?? 'Diner') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2 space-y-6">
                    
                    <div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden p-6">
                        @include('profile.partials.update-profile-information-form')
                    </div>

                    <div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden p-6">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="bg-primary/5 dark:bg-primary/10 rounded-xl p-6 border border-primary/20">
                        <h3 class="text-primary text-sm font-bold mb-4 uppercase tracking-wider">Account Stats</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-center">
                                <p class="text-2xl font-bold text-slate-900 dark:text-white">12</p>
                                <p class="text-xs text-slate-500">Reservations</p>
                            </div>
                            <div class="text-center">
                                <p class="text-2xl font-bold text-slate-900 dark:text-white">Gold</p>
                                <p class="text-xs text-slate-500">Tier Status</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-slate-900 rounded-xl border border-red-100 dark:border-red-900/30 p-6 shadow-sm">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>