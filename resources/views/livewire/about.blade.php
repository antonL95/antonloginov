@php
    use Illuminate\Support\Facades\Vite;
@endphp

<x-container class="mt-16 sm:mt-32">
    <div class="grid grid-cols-1 gap-y-16 lg:grid-cols-2 lg:grid-rows-[auto_1fr] lg:gap-y-12">
        <div class="lg:pl-20">
            <div class="max-w-xs px-2.5 lg:max-w-none">
                <img
                    src="{{ asset('assets/images/photo.webp') }}"
                    alt="about"
                    sizes="(min-width: 1024px) 32rem, 20rem"
                    class="aspect-square -rotate-2 rounded-2xl bg-zinc-100 object-cover dark:bg-zinc-800"
                />
            </div>
        </div>
        <div class="lg:order-first lg:row-span-2">
            <h1 class="text-pretty text-4xl font-bold tracking-tight text-zinc-800 dark:text-zinc-100 sm:text-5xl">
                I'm Anton, a full-stack developer
            </h1>
            <div class="mt-6 space-y-7 text-base text-zinc-600 dark:text-zinc-400">
                <p>
                    I have been interested in tech since I was a kid. I used to spend a lot of time playing video games
                    and during my teenage years, I was obsessed with WoW. Whenever someone asked me the most annoying
                    question, my answer has always been that I want to make video games.
                </p>
                <p>
                    In my last year of high school I realised that I'm not into building games anymore, but I had a
                    awesome teacher who was teaching web design class and in that class I got really into building
                    websites and programming but I also loved physics particularly I was fascinated by astrophysics.
                    When it was time to decide where I would go to college I chose to study physics, but soon after
                    starting I realized it was not my true passion, so I dropped out.
                </p>
                <p>
                    Then I was hit with the reality of the world and had to find a job, but the only thing I could do
                    was building websites. I wasn't good at it but I knew I had to try to pursue it as a career. I was
                    lucky enough that I was hired as a junior developer for a e-commerce company where I spent my first
                    few months relearning the basics and most importantly how to work in a team, how to use git.
                </p>
                <p>
                    As I write this bio (May 2024) I've been programming for 9+ years and I'm still enjoying it as much
                    as I was at the beginning. I'm constantly learning new concepts, new programming languages, new
                    frameworks. I have recently rekindled passion for building projects. I have created this site to try
                    to do some writing and sharing my thoughts and my work with the world.
                </p>
                <p>
                    In addition to programming I'm still fascinated by astrophysics and love discussing it with people.
                    Also I'm a big fan of Tolkien and could talk to anyone about his works for a very long time. And I'm
                    also a casual runner. If you find any of this interesting consider following me on socials and feel
                    free to contact me.
                </p>
            </div>
        </div>
        <div class="lg:pl-20">
            <ul role="list">
                <li class="flex">
                    <a
                        class="group flex text-sm font-medium text-zinc-800 transition hover:text-teal-500 dark:text-zinc-200 dark:hover:text-teal-500"
                        href="https://twitter.com/aLog129"
                        target="_blank"
                    >
                        <x-phosphor-x-logo
                            class="h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-teal-500"
                        />
                        <span class="ml-4">
                            {{ __('Follow on X') }}
                        </span>
                    </a>
                </li>
                <li class="mt-4 flex">
                    <a
                        class="group flex text-sm font-medium text-zinc-800 transition hover:text-teal-500 dark:text-zinc-200 dark:hover:text-teal-500"
                        href="https://www.linkedin.com/in/anton-loginov-934010109/"
                        target="_blank"
                    >
                        <x-phosphor-linkedin-logo
                            class="h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-teal-500"
                        />
                        <span class="ml-4">
                            {{ __('Follow on LinkedIn') }}
                        </span>
                    </a>
                </li>
                <li class="mt-4 flex">
                    <a
                        class="group flex text-sm font-medium text-zinc-800 transition hover:text-teal-500 dark:text-zinc-200 dark:hover:text-teal-500"
                        href="https://github.com/antonL95"
                        target="_blank"
                    >
                        <x-phosphor-github-logo
                            class="h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-teal-500"
                        />
                        <span class="ml-4">
                            {{ __('Follow on GitHub') }}
                        </span>
                    </a>
                </li>
                <li class="mt-8 border-t border-zinc-100 pt-8 dark:border-zinc-700/40">
                    <a
                        class="group flex text-sm font-medium text-zinc-800 transition hover:text-teal-500 dark:text-zinc-200 dark:hover:text-teal-500"
                        href="mailto:me@antonloginov.com"
                    >
                        <x-phosphor-envelope
                            class="h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-teal-500"
                        />
                        <span class="ml-4">me@antonloginov.com</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</x-container>
