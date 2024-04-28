<x-simple-layout
    :title="__('Projects I am building')"
    :intro="__('Besides my day job I spend a lot of time learning new frameworks and programming languages and system design techniques. I also like to build interesting projects.')"
>
    <ul role="list" class="grid grid-cols-1 gap-x-12 gap-y-16 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($projects as $project)
            <li class="group relative flex flex-col items-start">
                <div
                    class="relative z-10 flex h-12 w-12 items-center justify-center rounded-full bg-white shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0"
                >
                    <img src="{{ $project['logo'] }}" alt="" class="h-8 w-8 rounded-full object-contain" />
                </div>
                <h2 class="mt-6 text-base font-semibold text-zinc-800 dark:text-zinc-100">
                    <x-card.card-link href="{{ $project['link'] }}">{{ $project['name'] }}</x-card.card-link>
                </h2>
                <x-card.card-description class="min-h-[50px]">
                    {{ $project['description'] }}
                </x-card.card-description>
                <p
                    class="relative z-10 mt-6 flex text-sm font-medium text-zinc-400 transition group-hover:text-teal-500 dark:text-zinc-200"
                >
                    <x-phosphor-link class="h-6 w-6 flex-none" />
                    <span class="ml-2">{{ $project['link-label'] }}</span>
                </p>
            </li>
        @endforeach
    </ul>
</x-simple-layout>
