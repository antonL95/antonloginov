<x-layout.header :title="$title ?? null">
    <flux:main class="p-0! !lg:p-0">
        {{ $slot }}
    </flux:main>
</x-layout.header>
