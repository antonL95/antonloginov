<div
    @if (request()->routeIs("home"))
        x-data="{
            headerRef: $refs.avatarHeader,
            avatarRef: $refs.avatar,
            isInitial: true,
            upDelay: 64,
            removeProperty(property) {
                document.documentElement.style.removeProperty(property)
            },
            setProperty(property, value) {
                document.documentElement.style.setProperty(property, value)
            },
            updateAvatarStyles() {
                let fromScale = 1
                let toScale = 36 / 64
                let fromX = 0
                let toX = 2 / 16
                let downDelay = this.avatarRef ? this.avatarRef.offsetTop : 0

                let scrollY = downDelay - window.scrollY

                let scale = (scrollY * (fromScale - toScale)) / downDelay + toScale
                scale = clamp(scale, fromScale, toScale)

                let x = (scrollY * (fromX - toX)) / downDelay + toX
                x = clamp(x, fromX, toX)

                this.setProperty(
                    '--avatar-image-transform',
                    `translate3d(${x}rem, 0, 0) scale(${scale})`,
                )

                let borderScale = 1 / (toScale / scale)
                let borderX = (-toX + x) * borderScale
                let borderTransform = `translate3d(${borderX}rem, 0, 0) scale(${borderScale})`

                this.setProperty('--avatar-border-transform', borderTransform)
                this.setProperty(
                    '--avatar-border-opacity',
                    scale === toScale ? '1' : '0',
                )
            },
            updateHeaderStyles() {
                if (! this.headerRef) {
                    return
                }

                let downDelay = this.avatarRef ? this.avatarRef.offsetTop : 0

                let { top, height } = this.headerRef.getBoundingClientRect()
                let scrollY = clamp(
                    window.scrollY,
                    0,
                    document.body.scrollHeight - window.innerHeight,
                )

                if (this.isInitial) {
                    this.setProperty('--header-position', 'sticky')
                }

                this.setProperty('--content-offset', `${downDelay}px`)

                if (this.isInitial || scrollY < downDelay) {
                    this.setProperty('--header-height', `${downDelay + height}px`)
                    this.setProperty('--header-mb', `${-downDelay}px`)
                } else if (top + height < -this.upDelay) {
                    let offset = Math.max(height, scrollY - this.upDelay)
                    this.setProperty('--header-height', `${offset}px`)
                    this.setProperty('--header-mb', `${height - offset}px`)
                } else if (top === 0) {
                    this.setProperty('--header-height', `${scrollY + height}px`)
                    this.setProperty('--header-mb', `${-scrollY}px`)
                }

                if (top === 0 && scrollY > 0 && scrollY >= downDelay) {
                    this.setProperty('--header-inner-position', 'fixed')
                    this.removeProperty('--header-top')
                    this.removeProperty('--avatar-top')
                } else {
                    this.removeProperty('--header-inner-position')
                    this.setProperty('--header-top', '0px')
                    this.setProperty('--avatar-top', '0px')
                }
            },

            updateStyles() {
                this.updateHeaderStyles()
                this.updateAvatarStyles()
                this.isInitial = false
            },
        }"
        @scroll.window="updateStyles(),{passive:true}"
        @resize.window="updateStyles()"
        x-init="$nextTick(() => updateStyles())"
    @endif
>
    <header
        class="pointer-events-none relative z-50 flex flex-none flex-col"
        style="height: var(--header-height); margin-bottom: var(--header-mb)"
    >
        @if (request()->routeIs("home"))
            <div x-ref="avatar" class="order-last mt-[calc(theme(spacing.16)-theme(spacing.3))]">
                <div class="pt-3sm:px-8 top-0 order-last -mb-3" style="position: var(--header-position)">
                    <div class="mx-auto w-full max-w-7xl lg:px-8">
                        <div class="relative px-4 sm:px-8 lg:px-12">
                            <div class="mx-auto max-w-2xl lg:max-w-5xl">
                                <div
                                    class="top-[var(--avatar-top,theme(spacing.3))] w-full"
                                    style="position: var(--header-inner-position)"
                                >
                                    <div class="relative">
                                        <div
                                            class="absolute left-0 top-3 h-10 w-10 origin-left rounded-full bg-white/90 p-0.5 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur transition-opacity dark:bg-zinc-800/90 dark:ring-white/10"
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
                                                src="{{ asset("/assets/img/profile.webp") }}"
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
                class="top-[var(--header-top,theme(spacing.6))] w-full sm:px-8"
                style="position: var(--header-inner-position)"
            >
                <div class="mx-auto w-full max-w-7xl lg:px-8">
                    <div class="relative px-4 sm:px-8 lg:px-12">
                        <div class="mx-auto max-w-2xl lg:max-w-5xl">
                            <div class="relative flex gap-4">
                                <div class="flex flex-1">
                                    @if (! request()->routeIs("home"))
                                        <div
                                            class="h-10 w-10 rounded-full bg-white/90 p-0.5 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur dark:bg-zinc-800/90 dark:ring-white/10"
                                        >
                                            <a
                                                aria-label="Home"
                                                href="{{ route("home") }}"
                                                class="pointer-events-auto block h-16 w-16 origin-left"
                                                style="transform: var(--avatar-image-transform)"
                                                wire:navigate
                                            >
                                                <img
                                                    src="{{ asset("/assets/img/profile.webp") }}"
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
                                        <x-theme-switcher />
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
<script>
    function clamp(number, a, b) {
        let min = Math.min(a, b);
        let max = Math.max(a, b);
        return Math.min(Math.max(number, min), max);
    }
</script>
