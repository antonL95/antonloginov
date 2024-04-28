@php
    use Illuminate\Support\Str;
@endphp

<div>
    <x-container class="mt-9">
        <div class="max-w-2xl">
            <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl dark:text-zinc-100">
                {{ __('Senior full-stack Laravel developer') }}
            </h1>
            <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400">
                {!!
                    __('I\'m Anton, a senior full-stack software engineer based in Prague. I\'m a Laravel and Typescript developer with interest in building products and experimenting with various programming languages and technologies. I\'m the founder of :moneysky and CTO of :artists_hero', [
                        'moneysky' => '<a class="transition hover:text-teal-500 dark:hover:text-teal-400 underline" target="_blank" href="https://moneysky.app">Moneysky.app</a>',
                        'artists_hero' => '<a class="transition hover:text-teal-500 dark:hover:text-teal-400 underline" target="_blank" href="https://artistshero.com">Artist\'s Hero</a>',
                    ])
                !!}
            </p>
            <div class="mt-6 flex gap-6">
                <a class="group -m-1 p-1" href="https://twitter.com/aLog129" target="_blank">
                    <x-phosphor-x-logo
                        class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300"
                    />
                </a>
                <a class="group -m-1 p-1" href="https://www.linkedin.com/in/anton-loginov-934010109/" target="_blank">
                    <x-phosphor-linkedin-logo
                        class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300"
                    />
                </a>
                <a class="group -m-1 p-1" href="https://github.com/antonL95" target="_blank">
                    <x-phosphor-github-logo
                        class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300"
                    />
                </a>
            </div>
        </div>
    </x-container>
    <x-container class="mt-24 md:mt-28">
        <div class="mx-auto grid max-w-xl grid-cols-1 gap-y-20 lg:max-w-none lg:grid-cols-2">
            <div class="flex flex-col gap-16">
                @foreach ($articles as $article)
                    <x-card.card>
                        <x-card.card-title :href="route('article', ['slug' => $article->slug])">
                            {{ $article->title }}
                        </x-card.card-title>
                        <x-card.card-eyebrow :time="true" datetime="{{ $article->published_at }}" :decorate="true">
                            {{ $article->published_at->diffForHumans() }}
                        </x-card.card-eyebrow>
                        <x-card.card-description>{{ Str::limit($article->content) }}</x-card.card-description>
                        <x-card.card-cta>{{ __('Read article') }}</x-card.card-cta>
                    </x-card.card>
                @endforeach
            </div>
            <div class="space-y-10 lg:pl-16 xl:pl-24">
                <div class="rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40">
                    <h2 class="flex text-sm font-semibold text-zinc-900 dark:text-zinc-100">
                        <x-phosphor-briefcase class="h-6 w-6 flex-none" />
                        <span class="ml-3">{{ __('Work') }}</span>
                    </h2>
                    <ol class="my-6 space-y-4">
                        @foreach ($roles as $role)
                            <li class="flex gap-4">
                                <div
                                    class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0"
                                >
                                    <img
                                        src="{{ $role['logo'] }}"
                                        alt="{{ $role['company'] }}"
                                        class="h-7 w-7 rounded-full"
                                    />
                                </div>
                                <dl class="flex flex-auto flex-wrap gap-x-2">
                                    <dt class="sr-only">Company</dt>
                                    <dd class="w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100">
                                        {{ $role['company'] }}
                                    </dd>
                                    <dt class="sr-only">Role</dt>
                                    <dd class="text-xs text-zinc-500 dark:text-zinc-400">
                                        {{ $role['title'] }}
                                    </dd>
                                    <dt class="sr-only">Date</dt>
                                    <dd
                                        class="ml-auto text-xs text-zinc-400 dark:text-zinc-500"
                                        aria-label="{{ $role['start'] . ' until ' . $role['end'] }}"
                                    >
                                        <time datetime="{{ $role['start'] }}">{{ $role['start'] }}</time>
                                        <span aria-hidden="true">—</span>
                                        <time datetime="{{ $role['end'] }}">
                                            {{ $role['end'] }}
                                        </time>
                                    </dd>
                                </dl>
                            </li>
                        @endforeach
                    </ol>
                    <x-button
                        href="{{ asset('/assets/CV-downloadable.pdf') }}"
                        download="Anton_Loginov_CV.pdf"
                        variant="secondary"
                        class="group mt-6 w-full"
                        :no-wire-navigate="true"
                    >
                        {{ __('Download CV') }}
                        <x-phosphor-arrow-down
                            class="h-4 w-4 stroke-zinc-400 transition group-active:stroke-zinc-600 dark:group-hover:stroke-zinc-50 dark:group-active:stroke-zinc-50"
                        />
                    </x-button>
                </div>
            </div>
        </div>
    </x-container>
</div>
