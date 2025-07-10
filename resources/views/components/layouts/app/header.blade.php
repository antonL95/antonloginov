<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')
</head>
<body class="flex h-full bg-zinc-50 dark:bg-black">
<div class="flex w-full">
    <div class="fixed inset-0 flex justify-center sm:px-8">
        <div class="flex w-full max-w-7xl lg:px-8">
            <div class="w-full bg-white ring-1 ring-zinc-100 dark:bg-zinc-900 dark:ring-zinc-300/20"></div>
        </div>
    </div>
    <div class="relative flex w-full flex-col">
        <x-header/>
        <main class="flex-auto">
            {{ $slot }}
        </main>
        <x-footer/>
    </div>
</div>
@persist('toast')
<flux:toast/>
@endpersist
@fluxScripts
</body>
</html>
