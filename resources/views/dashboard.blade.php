<x-auth>
    <section class="space-y-8">
        <header>
            <h1 class="text-6xl leading-none">Dashboard</h1>
            <p class="mt-4 text-4 text-gravel">Today is {{ now()->format('l, F j, Y') }}</p>
        </header>

        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
            <article class="rounded-2xl bg-white p-9 shadow-sm">
                <div class="flex items-start justify-between">
                    <h2 class="text-4 text-gravel font-medium">Today's Appointments</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-signal-orange" aria-hidden="true">
                        <path d="M8 2v4"/><path d="M16 2v4"/>
                        <rect width="18" height="18" x="3" y="4" rx="2"/>
                        <path d="M3 10h18"/>
                    </svg>
                </div>
                <p class="mt-6 text-7xl font-barlow text-signal-orange leading-none">8</p>
            </article>

            <article class="rounded-2xl bg-white p-9 shadow-sm">
                <div class="flex items-start justify-between">
                    <h2 class="text-4 text-gravel font-medium">Pending Repairs</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gravel" aria-hidden="true">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <p class="mt-6 text-7xl font-barlow text-gravel leading-none">12</p>
            </article>

            <article class="rounded-2xl bg-white p-9 shadow-sm">
                <div class="flex items-start justify-between">
                    <h2 class="text-4 text-gravel font-medium">Completed Jobs</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-chain-green" aria-hidden="true">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="m9 12 2 2 4-4"/>
                    </svg>
                </div>
                <p class="mt-6 text-7xl font-barlow text-chain-green leading-none">24</p>
            </article>

            <article class="rounded-2xl bg-white p-9 shadow-sm">
                <div class="flex items-start justify-between">
                    <h2 class="text-4 text-gravel font-medium">Urgent</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-brake-red" aria-hidden="true">
                        <circle cx="12" cy="12" r="10"/>
                        <line x1="12" x2="12" y1="8" y2="12"/>
                        <line x1="12" x2="12.01" y1="16" y2="16"/>
                    </svg>
                </div>
                <p class="mt-6 text-7xl font-barlow text-brake-red leading-none">3</p>
            </article>
        </div>
    </section>
</x-auth>
