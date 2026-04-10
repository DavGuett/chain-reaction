<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=barlow-condensed:700,800|dm-sans:400,500" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="bg-asphalt text-chalk-white shadow-md">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Main navigation">
            <div class="flex items-center justify-between h-16">
                <a href="{{ url('/') }}" class="flex items-center gap-2 shrink-0" aria-label="Home">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="18.5" cy="17.5" r="3.5"/>
                        <circle cx="5.5" cy="17.5" r="3.5"/>
                        <circle cx="15" cy="5" r="1"/>
                        <path d="M12 17.5V14l-3-3 4-3 2 3h2"/>
                    </svg>
                    <span class="font-barlow text-xl font-bold tracking-wide uppercase">{{ config('app.name', 'Chain Reaction') }}</span>
                </a>

                <ul class="flex items-center gap-1">
                    <li>
                        <a href="{{ route('dashboard') }}"
                           class="flex items-center gap-1.5 px-3 py-2 rounded-workshop text-sm font-medium transition-colors {{ request()->routeIs('dashboard') ? 'bg-signal-orange text-chalk-white' : 'text-chalk-white/70 hover:text-chalk-white hover:bg-white/10' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect width="7" height="9" x="3" y="3" rx="1"/><rect width="7" height="5" x="14" y="3" rx="1"/>
                                <rect width="7" height="9" x="14" y="12" rx="1"/><rect width="7" height="5" x="3" y="16" rx="1"/>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('queue') }}"
                           class="flex items-center gap-1.5 px-3 py-2 rounded-workshop text-sm font-medium transition-colors {{ request()->routeIs('queue') ? 'bg-signal-orange text-chalk-white' : 'text-chalk-white/70 hover:text-chalk-white hover:bg-white/10' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="3" y="5" width="6" height="6" rx="1"/><path d="m3 17 2 2 4-4"/>
                                <path d="M13 6h8"/><path d="M13 12h8"/><path d="M13 18h8"/>
                            </svg>
                            Service Queue
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('customers') }}"
                           class="flex items-center gap-1.5 px-3 py-2 rounded-workshop text-sm font-medium transition-colors {{ request()->routeIs('customers') ? 'bg-signal-orange text-chalk-white' : 'text-chalk-white/70 hover:text-chalk-white hover:bg-white/10' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                            Customers
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}"
                           class="flex items-center gap-1.5 px-3 py-2 rounded-workshop text-sm font-medium transition-colors {{ request()->routeIs('services') ? 'bg-signal-orange text-chalk-white' : 'text-chalk-white/70 hover:text-chalk-white hover:bg-white/10' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                            </svg>
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('booking') }}"
                           class="flex items-center gap-1.5 px-3 py-2 rounded-workshop text-sm font-medium transition-colors {{ request()->routeIs('booking') ? 'bg-signal-orange text-chalk-white' : 'text-chalk-white/70 hover:text-chalk-white hover:bg-white/10' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M8 2v4"/><path d="M16 2v4"/>
                                <rect width="18" height="18" x="3" y="4" rx="2"/>
                                <path d="M3 10h18"/>
                            </svg>
                            Book Appointment
                        </a>
                    </li>
                </ul>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="flex items-center gap-1.5 px-3 py-2 rounded-workshop text-sm font-medium text-chalk-white/70 hover:text-chalk-white hover:bg-white/10 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                            <polyline points="16 17 21 12 16 7"/>
                            <line x1="21" y1="12" x2="9" y2="12"/>
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
        </nav>
    </header>

    <main class="mx-auto w-full max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        {{ $slot }}
    </main>
</body>
</html>
