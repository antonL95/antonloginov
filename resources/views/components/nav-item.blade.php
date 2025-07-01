@props([
    'href',
    'active' => false,
])
<a
    href="{{ $href }}"
    wire:navigate
    class="{{ $active ? 'text-teal-500 dark:text-teal-400' : 'hover:text-teal-500 dark:hover:text-teal-400' }} relative block px-3 py-2 transition"
>
    {{ $slot }}
    @if ($active)
        <span
            class="absolute inset-x-1 -bottom-px h-px bg-linear-to-r from-teal-500/0 via-teal-500/40 to-teal-500/0 dark:from-teal-400/0 dark:via-teal-400/40 dark:to-teal-400/0"
        ></span>
    @endif
</a>
