@php
    use Illuminate\Support\Str;
@endphp

<x-simple-layout
    :title="__('Writing on software, finance, and other things.')"
    :intro="__('All of my thoughts on programming, finance, productivity, Tolkien and other things that I find fascinating.')"
>
    <div class="md:border-l md:border-zinc-100 md:pl-6 md:dark:border-zinc-700/40">
        <div class="flex max-w-3xl flex-col space-y-16">
            @foreach ($articles as $article)
                <article class="md:grid md:grid-cols-4 md:items-baseline">
                    <x-card.card class="md:col-span-3">
                        <x-card.card-title :href="route('article', ['slug' => $article->slug])">
                            {{ $article->title }}
                        </x-card.card-title>
                        <x-card.card-eyebrow :time="true" :decorate="true" class="md:hidden">
                            {{ $article->published_at->diffForHumans() }}
                        </x-card.card-eyebrow>
                        <x-card.card-description>
                            {{ Str::limit($article->content) }}
                        </x-card.card-description>
                        <x-card.card-cta>
                            {{ __('Read more') }}
                        </x-card.card-cta>
                    </x-card.card>
                    <x-card.card-eyebrow :time="true" class="mt-1 hidden md:block">
                        {{ $article->published_at->diffForHumans() }}
                    </x-card.card-eyebrow>
                </article>
            @endforeach

            <div
                x-data="{
                    observe () {
                        let observer = new IntersectionObserver((entries) => {
                            entries.forEach(entry => {
                                if (entry.isIntersecting) {
                                    @this.call('loadMore')
                                }
                            })
                        }, {
                            root: null
                        })

                        observer.observe(this.$el)
                    }
                }"
                x-init="observe"
            ></div>
        </div>
    </div>
</x-simple-layout>
