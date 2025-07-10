<div
    x-data="headerScroll({{ request()->routeIs('home') ? 'true' : 'false' }})"
    x-init="init()"
    @scroll.window="updateStyles(),{passive:true}"
    @resize.window="updateStyles()"
>
    <header
        class="pointer-events-none relative z-50 flex flex-none flex-col"
        style="height: var(--header-height); margin-bottom: var(--header-mb)"
    >
        @if (request()->routeIs("home"))
            <div x-ref="avatar" class="order-last mt-[calc(--spacing(16)-(--spacing(3)))]">
                <div class="pt-3sm:px-8 top-0 order-last -mb-3" style="position: var(--header-position)">
                    <div class="mx-auto w-full max-w-7xl lg:px-8">
                        <div class="relative px-4 sm:px-8 lg:px-12">
                            <div class="mx-auto max-w-2xl lg:max-w-5xl">
                                <div
                                    class="top-(--avatar-top,--spacing(3)) w-full"
                                    style="position: var(--header-inner-position)"
                                >
                                    <div class="relative">
                                        <div
                                            class="absolute left-0 top-3 h-10 w-10 origin-left rounded-full bg-white/90 p-0.5 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur-sm transition-opacity dark:bg-zinc-800/90 dark:ring-white/10"
                                            style="
                                                opacity: var(--avatar-border-opacity, 0);
                                                transform: var(--avatar-border-transform);
                                            "
                                        ></div>
                                        <a
                                            aria-label="Home"
                                            href="{{ route("home") }}"
                                            class="pointer-events-auto block h-16 w-16 origin-left"
                                            style="transform: var(--avatar-image-transform)"
                                            wire:navigate
                                        >
                                            <img
                                                src="{{ asset('assets/images/profile.webp') }}"
                                                class="h-16 w-16 rounded-full bg-zinc-100 object-cover dark:bg-zinc-800"
                                                sizes="4rem"
                                                alt=""
                                            />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div x-ref="avatarHeader" class="top-0 z-10 h-16 pt-6" style="position: var(--header-position)">
            <div
                class="top-(--header-top,--spacing(6)) w-full sm:px-8"
                style="position: var(--header-inner-position)"
            >
                <div class="mx-auto w-full max-w-7xl lg:px-8">
                    <div class="relative px-4 sm:px-8 lg:px-12">
                        <div class="mx-auto max-w-2xl lg:max-w-5xl">
                            <div class="relative flex gap-4">
                                <div class="flex flex-1">
                                    @if (! request()->routeIs("home"))
                                        <div
                                            class="h-10 w-10 rounded-full bg-white/90 p-0.5 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur-sm dark:bg-zinc-800/90 dark:ring-white/10"
                                        >
                                            <a
                                                aria-label="Home"
                                                href="{{ route("home") }}"
                                                class="pointer-events-auto block h-16 w-16 origin-left"
                                                style="transform: var(--avatar-image-transform)"
                                                wire:navigate
                                            >
                                                <img
                                                    src="{{ asset("assets/images/profile.webp") }}"
                                                    class="h-9 w-9 rounded-full bg-zinc-100 object-cover dark:bg-zinc-800"
                                                    sizes="2.25rem"
                                                    alt=""
                                                />
                                            </a>
                                        </div>
                                    @endif
                                </div>
                                <div class="flex flex-1 justify-end md:justify-center">
                                    <x-mobile-navigation class="pointer-events-auto md:hidden" />
                                    <x-desktop-navigation class="pointer-events-auto hidden w-full md:block" />
                                </div>
                                <div class="flex justify-end md:flex-1">
                                    <div class="pointer-events-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @if (request()->routeIs("home"))
        <div class="flex-none" style="height: var(--content-offset)"></div>
    @endif
</div>
