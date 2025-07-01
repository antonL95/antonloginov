<nav {{ $attributes }}>
    <ul
        class="flex justify-between rounded-full bg-white/90 px-3 text-sm font-medium text-zinc-800 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur-sm dark:bg-zinc-800/90 dark:text-zinc-200 dark:ring-white/10"
    >
        <li>
            <x-nav-item :active="request()->routeIs('about')" :href="route('about')">
                {{ __('About') }}
            </x-nav-item>
        </li>
        <li>
            <x-nav-item :active="request()->routeIs('articles')" :href="route('articles')">
                {{ __('Articles') }}
            </x-nav-item>
        </li>
        <li>
            <x-nav-item :active="request()->routeIs('projects')" :href="route('projects')">
                {{ __('Projects') }}
            </x-nav-item>
        </li>
    </ul>
</nav>
