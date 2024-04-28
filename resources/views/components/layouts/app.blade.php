<!DOCTYPE html>
<html
    class="h-full antialiased"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    x-data="{
        theme: $persist('light'),
        toggleTheme() {
            this.theme = this.theme === 'light' ? 'dark' : 'light'
        },
    }"
    :class="theme === 'light' ? 'light' : 'dark'"
    x-cloak
>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" type="image/jpeg" href="{{ asset('assets/img/profile.webp') }}" />

        <!-- Scripts -->
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="flex h-full bg-zinc-50 dark:bg-black">
        <div class="flex w-full">
            <div class="fixed inset-0 flex justify-center sm:px-8">
                <div class="flex w-full max-w-7xl lg:px-8">
                    <div class="w-full bg-white ring-1 ring-zinc-100 dark:bg-zinc-900 dark:ring-zinc-300/20"></div>
                </div>
            </div>
            <div class="relative flex w-full flex-col">
                <x-header />
                <main class="flex-auto">
                    {{ $slot }}
                </main>
                <x-footer />
            </div>
        </div>
        @livewireScripts
    </body>
</html>
