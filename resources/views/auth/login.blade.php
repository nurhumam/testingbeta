<x-guest-layout>
    <div class="bg-gradient-to-b from-blue-100 to-blue-200 min-h-screen flex items-center justify-center px-4">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden flex w-full max-w-4xl">
            <!-- Bagian Form -->
            <div class="p-8 w-full md:w-1/2">
                <div class="text-left mb-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Masuk</h2>
                    <p class="text-sm text-gray-500">Silakan login untuk melanjutkan.</p>
                </div>

                <!-- Tampilkan Status Session -->
                @if (session('status'))
                    <div class="mb-4 text-sm font-medium text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-4">
                        <label class="block text-gray-700" for="email">Username</label>
                        <input id="email" type="email" name="email"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                               :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label class="block text-gray-700" for="password">Password</label>
                        <div class="relative">
                            <input id="password" type="password" name="password"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                   required autocomplete="current-password" />
                            <i class="fas fa-eye absolute right-3 top-3 text-gray-400"></i>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Lupa Sandi -->
                    <div class="flex justify-between items-center mb-6">
                        @if (Route::has('password.request'))
                            <a class="text-sm text-blue-500 hover:underline" href="{{ route('password.request') }}">
                                Lupa Sandi?
                            </a>
                        @endif
                    </div>

                    <!-- Tombol Masuk -->
                    <button type="submit"
                            class="w-full bg-[#325765] text-white py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Masuk
                    </button>
                </form>
            </div>

            <!-- Bagian Informasi -->
            <div class="bg-[#45A6BA] text-white p-8 w-full md:w-1/2 rounded-tl-[150px] rounded-bl-[150px] flex flex-col justify-center">
                <p class="text-sm text-green-200 mb-2">Halo Selamat Datang di EnviroPay</p>
                <h3 class="text-2xl font-bold leading-tight">Ayo bayar IPL mu dengan mudah</h3>
            </div>
        </div>
    </div>
</x-guest-layout>
