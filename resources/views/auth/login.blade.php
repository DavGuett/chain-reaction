<x-app>
    <div class="mx-auto mt-10 w-full max-w-md p-4 bg-asphalt text-chalk-white">
        <div class="flex gap-5 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <circle cx="18.5" cy="17.5" r="3.5"/>
                <circle cx="5.5" cy="17.5" r="3.5"/>
                <circle cx="15" cy="5" r="1"/>
                <path d="M12 17.5V14l-3-3 4-3 2 3h2"/>
            </svg>
            <span class="font-barlow text-5xl font-bold tracking-wide uppercase">{{ config('app.name', 'Chain Reaction') }}</span>
        </div>
        <h1 class="mb-6 text-2xl font-semibold">Log in</h1>

        @if (session('status'))
            <div class="mb-4 rounded border border-green-300 bg-green-50 p-3 text-sm text-green-800">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-4 rounded border border-red-300 bg-red-50 p-3 text-sm text-red-800">
                <ul class="list-inside list-disc">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="mb-1 block text-sm font-medium">Email</label>
                <input
                    id="email"
                    name="email"
                    type="email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                    autocomplete="username"
                    class="w-full rounded border border-gray-300 px-3 py-2"
                >
            </div>

            <div>
                <label for="password" class="mb-1 block text-sm font-medium">Password</label>
                <input
                    id="password"
                    name="password"
                    type="password"
                    required
                    autocomplete="current-password"
                    class="w-full rounded border border-gray-300 px-3 py-2"
                >
            </div>

            <label class="inline-flex items-center gap-2 text-sm">
                <input
                    id="remember"
                    name="remember"
                    type="checkbox"
                    value="1"
                    @checked(old('remember'))
                >
                <span>Remember me</span>
            </label>

            <div class="flex items-center justify-between gap-4">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline">
                        Forgot your password?
                    </a>
                @endif

                <button type="submit" class="rounded bg-signal-orange px-4 py-2 text-sm font-medium">
                    Log in
                </button>
            </div>
        </form>
    </div>
</x-app>
