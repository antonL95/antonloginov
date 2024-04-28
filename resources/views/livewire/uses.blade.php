<x-simple-layout :title="__('Software I use, gadgets I love, and other things.')">
    <div class="space-y-20">
        <section class="md:border-l md:border-zinc-100 md:pl-6 md:dark:border-zinc-700/40">
            <div class="grid max-w-3xl grid-cols-1 items-baseline gap-y-8 md:grid-cols-4">
                <h2 class="text-sm font-semibold text-zinc-800 dark:text-zinc-100">Workstation</h2>
                <div class="md:col-span-3">
                    <ul class="space-y-16" role="list">
                        <li class="group relative flex flex-col items-start">
                            <h3 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                                14" MacBookPro, M1 Pro, 16GB RAM (2021)
                            </h3>
                            <x-card.card-description>
                                I was using a variety of laptops starting with Acer with Windows 7 then moving to Asus
                                Zenbook running either Ubuntu or PopOS and finally settling on MacBookPro. I love MacOS
                                for my work and the battery life is absolutely a game changer.
                            </x-card.card-description>
                        </li>
                        <li class="group relative flex flex-col items-start">
                            <h3 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                                Gigabyte 27" monitor 2560x1440 px with 170fps HDR
                            </h3>
                            <x-card.card-description>
                                The size and the resolution is a perfect for me and it is a great monitor either as a
                                single monitor setup or using it as a secondary monitor with the built-in MacBook
                                monitor. It's great even for gaming while I am not a FPS gamer myself I appreciate a
                                smoothness that 170fps provides while playing The Witcher or BFME.
                            </x-card.card-description>
                        </li>
                        <li class="group relative flex flex-col items-start">
                            <h3 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                                Logitech MX Master 3S
                            </h3>
                            <x-card.card-description>
                                I think it's the single greatest productivity mouse that money can buy. And I love that
                                the 3S comes with the silent clicks.
                            </x-card.card-description>
                        </li>
                        <li class="group relative flex flex-col items-start">
                            <h3 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                                Keychron K8 wireless mechanical keyboard
                            </h3>
                            <x-card.card-description>
                                At first I wasn't a big fan of mechanical keyboards and was happily using my logitech MX
                                keys, but then I succumbed to the hype and got myself a Keychron K8 and I don't think I
                                can go back even thought I love to switch between mechanical and build-in MackBook
                                keyboard.
                            </x-card.card-description>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="md:border-l md:border-zinc-100 md:pl-6 md:dark:border-zinc-700/40">
            <div class="grid max-w-3xl grid-cols-1 items-baseline gap-y-8 md:grid-cols-4">
                <h2 class="text-sm font-semibold text-zinc-800 dark:text-zinc-100">Development tools</h2>
                <div class="md:col-span-3">
                    <ul class="space-y-16" role="list">
                        <li class="group relative flex flex-col items-start">
                            <h3 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                                PHPStorm
                            </h3>
                            <x-card.card-description>
                                I have been trying almost every editor and IDE there is, except for the VIM (I'm not
                                there yet), but I have always come back to the PHPStorm simply because of the experience
                                I have with it. It probably isn't the fastest IDE but the feature set is amazing and I
                                feel it is essential when working with PHP.
                            </x-card.card-description>
                        </li>
                        <li class="group relative flex flex-col items-start">
                            <h3 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                                ITerm2
                            </h3>
                            <x-card.card-description>
                                I think it is a great terminal. It's fast very customisable and works great.
                            </x-card.card-description>
                        </li>
                        <li class="group relative flex flex-col items-start">
                            <h3 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                                DataGrip
                            </h3>
                            <x-card.card-description>
                                It's a another great tool from JetBrains family of products. It provides connection and
                                support for great amount databases and offers a great set of features while working with
                                databases.
                            </x-card.card-description>
                        </li>
                        <li class="group relative flex flex-col items-start">
                            <h3 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                                Laravel Herd
                            </h3>
                            <x-card.card-description>
                                It's a must have app when working on MacOS or Windows with PHP. It provides hustle free
                                setup of multiple versions of PHP and Node.js and composer. I automatically works with
                                every project I develop. Overall great app for local full-stack PHP development
                                environment.
                            </x-card.card-description>
                        </li>
                        <li class="group relative flex flex-col items-start">
                            <h3 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                                DBnging
                            </h3>
                            <x-card.card-description>
                                It's a lightweight app that is perfect for setting up local databases.
                            </x-card.card-description>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</x-simple-layout>
