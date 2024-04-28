@props([
    'time' => false,
    'decorate' => false,
])

@if ($time)
    <time
        {{ $attributes->merge(['class' => 'relative z-10 order-first mb-3 flex items-center pl-3.5 text-sm text-zinc-400 dark:text-zinc-500']) }}
    >
        @if ($decorate)
            <span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true">
                <span class="h-4 w-0.5 rounded-full bg-zinc-200 dark:bg-zinc-500"></span>
            </span>
        @endif

        {{ $slot }}
    </time>
@else
    <p
        {{ $attributes->merge(['class' => 'relative z-10 order-first mb-3 flex items-center pl-3.5 text-sm text-zinc-400 dark:text-zinc-500']) }}
    >
        @if ($decorate)
            <span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true">
                <span class="h-4 w-0.5 rounded-full bg-zinc-200 dark:bg-zinc-500"></span>
            </span>
        @endif

        {{ $slot }}
    </p>
@endif
