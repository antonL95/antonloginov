<div
    {{ $attributes }}
    x-data="{
        show: false,
        toggle() {
            this.show = ! this.show
        },
    }"
    x-on:keydown.escape.window="show = false"
    x-cloak
>
    <button
        x-on:click="toggle()"
        class="group flex items-center rounded-full bg-white/90 px-4 py-2 text-sm font-medium text-zinc-800 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur dark:bg-zinc-800/90 dark:text-zinc-200 dark:ring-white/10 dark:hover:ring-white/20"
    >
        {{ __('Menu') }}
        <x-phosphor-caret-down
            class="ml-3 h-auto w-2 stroke-zinc-500 group-hover:stroke-zinc-700 dark:group-hover:stroke-zinc-400"
        />
    </button>
    <div
        x-show="show"
        x-transition:enter="duration-150 ease-out"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="duration-150 ease-in"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 bg-zinc-800/40 backdrop-blur-sm dark:bg-black/80"
    ></div>
    <div
        x-show="show"
        x-transition:enter="duration-150 ease-out"
        x-transition:enter-start="scale-95 opacity-0"
        x-transition:enter-end="scale-100 opacity-100"
        x-transition:leave="duration-150 ease-in"
        x-transition:leave-start="scale-100 opacity-100"
        x-transition:leave-end="scale-95 opacity-0"
        class="fixed inset-x-4 top-8 z-50 origin-top rounded-3xl bg-white p-8 ring-1 ring-zinc-900/5 dark:bg-zinc-900 dark:ring-zinc-800"
        x-on:click.outside="show = false"
    >
        <div class="flex flex-row-reverse items-center justify-between">
            <button class="-m-1 p-1">
                <x-phosphor-x class="h-6 w-6 text-zinc-500 dark:text-zinc-400" x-on:click="show = false" />
            </button>
            <h2 class="text-sm font-medium text-zinc-600 dark:text-zinc-400">
                {{ __('Navigation') }}
            </h2>
        </div>
        <nav class="mt-6">
            <ul
                class="-my-2 divide-y divide-zinc-100 text-base text-zinc-800 dark:divide-zinc-100/5 dark:text-zinc-300"
            >
                <li><a href="{{ route('about') }}" class="block py-2" wire:navigate>About</a></li>
                <li><a href="{{ route('articles') }}" class="block py-2" wire:navigate>Articles</a></li>
                <li><a href="{{ route('projects') }}" class="block py-2" wire:navigate>Projects</a></li>
            </ul>
        </nav>
    </div>
</div>
