<x-app>
    <div class="mx-auto mt-10 w-full max-w-md px-4">
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

                <button type="submit" class="rounded bg-gray-900 px-4 py-2 text-sm font-medium text-white">
                    Log in
                </button>
            </div>
        </form>
    </div>
</x-app>
