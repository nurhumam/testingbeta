<link href="{{ asset('/css/style.css') }}" rel="stylesheet"> 
<x-app-layout>
    <x-slot name="header" class="headerdashboard">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div id="tagihan" class="bg-white white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="container font-semibold ">
            <h1>Halo, {{ Auth::user()->name }}</h1>
            <h2>Tagihan #0001</h2>
            <h2>Rp500.000,-</h2>
            <p>Tenggat Waktu : 1 Januari 2025 Status :<span style="color:red"> Belum Bayar</span></p> 
        </div>
    </div>

</x-app-layout>
