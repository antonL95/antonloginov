@props(['href' => null])
<h2 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
    @if ($href)
        <x-card.card-link href="{{ $href }}">
            {{ $slot }}
        </x-card.card-link>
    @else
        {{ $slot }}
    @endif
</h2>
