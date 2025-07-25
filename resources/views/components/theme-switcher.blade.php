<button
    x-on:click="toggleTheme()"
    aria-label="Switch theme"
    class="group rounded-full bg-white/90 px-3 py-2 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur-sm transition dark:bg-zinc-800/90 dark:ring-white/10 dark:hover:ring-white/20"
>
    <x-phosphor-moon
        x-show="theme === 'light'"
        class="h-6 w-6 fill-zinc-100 stroke-zinc-500 transition group-hover:fill-zinc-200 group-hover:stroke-zinc-700 dark:hidden [@media(prefers-color-scheme:dark)]:fill-teal-50 [@media(prefers-color-scheme:dark)]:stroke-teal-500 [@media(prefers-color-scheme:dark)]:group-hover:fill-teal-50 [@media(prefers-color-scheme:dark)]:group-hover:stroke-teal-600"
    />
    <x-phosphor-sun
        x-show="theme === 'dark'"
        class="hidden h-6 w-6 fill-zinc-700 stroke-zinc-500 transition dark:block [@media(prefers-color-scheme:dark)]:group-hover:stroke-zinc-400 not-[@media_(prefers-color-scheme:dark)]:fill-teal-400/10 not-[@media_(prefers-color-scheme:dark)]:stroke-teal-500"
    />
</button>
