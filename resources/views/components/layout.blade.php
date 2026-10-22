<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>MaxFitFlex</title>

        {{-- Favicon --}}
        <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
        <link rel="manifest" href="/site.webmanifest" />

        {{-- Alpine Js --}}
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="grid grid-cols-10 bg-main-background h-screen">

        <aside class="flex flex-col justify-between col-span-2 p-2.5">

            {{-- SECTION 1 --}}

            <div>
                {{-- head --}}
                <div class="flex items-center gap-x-2.5">

                    <img src={{ asset('images/FitFlexPlus.png') }} alt="MaxFitFlex Logo" class="size-6" />

                    {{-- MaxFitFlex Label --}}
                    <p class="font-medium text-main-text text-sm orbitron">MaxFitFlex</p>

                </div>

                {{-- search exercise: list anything that matches the parameter --}}
                <div class="my-2.5">

                    <form>

                        <div
                            class="flex items-center gap-x-1.5 bg-surface shadow p-1.5 border border-divider rounded-lg w-full">

                            {{-- search icon --}}
                            <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                class="size-5 text-muted-text">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z">
                                </path>
                            </svg>

                            {{-- Search input --}}
                            <input type="text" name="quick_search" placeholder="Quick Search..."
                                class="outline-0 text-muted-text text-sm" />
                        </div>

                    </form>

                </div>

                {{-- SECTION 2 --}}

                <div class="align-top">
                    {{-- General --}}
                    <div>

                        <p class="text-muted-text text-xs">General</p>

                        {{-- Dashboard container --}}
                        <div class="my-1">

                            <div class="flex items-center gap-x-1.5 hover:bg-hover p-1.5 rounded-lg cursor-pointer">

                                {{-- icon --}}
                                <div>
                                    <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        class="{{ request()->is('/') ? 'text-primary-blue' : 'text-main-text' }} size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z">
                                        </path>
                                    </svg>
                                </div>
                                {{-- endicon --}}
                                {{-- link --}}

                                <a href="/"
                                    class="{{ request()->is('/') ? 'text-primary-blue' : 'text-main-text' }} text-xs">Dashboard</a>

                            </div>
                        </div>

                    </div>

                    {{-- Workout Plans --}}
                    <div x-data="{ open: true }">

                        <div class="flex items-center gap-x-1 cursor-pointer" x-on:click="open = ! open">

                            <p class="text-muted-text text-xs">Workout Plans</p>

                            {{--  dropdown icon container --}}
                            <div :class="open ? 'rotate-0' : '-rotate-90'" x-transition>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="text-muted-text">
                                    <path d="M4 6H11L7.5 10.5L4 6Z" fill="currentColor"></path>
                                </svg>
                            </div>

                        </div>

                        <div class="my-1">

                            {{-- workout 1 --}}
                            <div class="flex items-center gap-x-1.5 hover:bg-hover p-1.5 rounded-lg cursor-pointer"
                                x-show="open" x-transition:enter="transition ease-out duration-500"
                                x-transition:enter-start="opacity-0 -translate-x-8"
                                x-transition:enter-end="opacity-100 translate-x-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 translate-x-0"
                                x-transition:leave-end="opacity-0 -translate-x-4">
                                {{-- icon --}}
                                <div>
                                    <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        class="{{ request()->routeIs('plans.*') ? 'text-primary-blue' : 'text-main-text' }}  size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z">
                                        </path>
                                    </svg>
                                </div>
                                {{-- link --}}
                                <a href="#"
                                    class="{{ request()->routeIs('plans.*') ? 'text-primary-blue' : 'text-main-text' }}  text-xs">Browse
                                    Plans</a>
                            </div>

                            {{-- workout 3 --}}
                            <div class="flex items-center gap-x-1.5 hover:bg-hover p-1.5 rounded-lg cursor-pointer"
                                x-show="open" x-transition:enter="transition ease-out duration-600"
                                x-transition:enter-start="opacity-0 -translate-x-12"
                                x-transition:enter-end="opacity-100 translate-x-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 translate-x-0"
                                x-transition:leave-end="opacity-0 -translate-x-4">
                                {{-- icon --}}
                                <div>
                                    <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        class="{{ request()->routeIs('plans.*') ? 'text-primary-blue' : 'text-main-text' }}  size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z">
                                        </path>
                                    </svg>
                                </div>
                                {{-- link --}}
                                <a href="#"
                                    class="{{ request()->routeIs('plans.*') ? 'text-primary-blue' : 'text-main-text' }} text-xs">Custom
                                    Plans</a>
                            </div>

                        </div>

                    </div>

                    {{-- Workout Schedule --}}
                    <div x-data="{ open: true }">

                        <div class="flex items-center gap-x-1 cursor-pointer" x-on:click="open = ! open">

                            <p class="text-muted-text text-xs">Workout Schedules</p>

                            {{--  dropdown icon container --}}
                            <div :class="open ? 'rotate-0' : '-rotate-90'" x-transition>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="text-muted-text">
                                    <path d="M4 6H11L7.5 10.5L4 6Z" fill="currentColor"></path>
                                </svg>
                            </div>

                        </div>

                        <div class="my-1">

                            {{-- workout 1 --}}
                            <div class="flex items-center gap-x-1.5 hover:bg-hover p-1.5 rounded-lg cursor-pointer"
                                x-show="open" x-transition:enter="transition ease-out duration-600"
                                x-transition:enter-start="opacity-0 -translate-x-12"
                                x-transition:enter-end="opacity-100 translate-x-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 translate-x-0"
                                x-transition:leave-end="opacity-0 -translate-x-4">
                                {{-- icon --}}
                                <div>
                                    <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        class="{{ request()->routeIs('schedules.*') ? 'text-primary-blue' : 'text-main-text' }}  size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z">
                                        </path>
                                    </svg>
                                </div>
                                {{-- link --}}
                                <a href="#"
                                    class="{{ request()->routeIs('schedules.*') ? 'text-primary-blue' : 'text-main-text' }} text-xs">Active
                                    Calendar</a>
                            </div>

                            {{-- workout 2 --}}
                            <div class="flex items-center gap-x-1.5 hover:bg-hover p-1.5 rounded-lg cursor-pointer"
                                x-show="open" x-transition:enter="transition ease-out duration-800"
                                x-transition:enter-start="opacity-0 -translate-x-16"
                                x-transition:enter-end="opacity-100 translate-x-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 translate-x-0"
                                x-transition:leave-end="opacity-0 -translate-x-4">
                                {{-- icon --}}
                                <div>
                                    <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        class="{{ request()->routeIs('schedules.*') ? 'text-primary-blue' : 'text-main-text' }}  size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                    </svg>
                                </div>
                                {{-- link --}}
                                <a href="#"
                                    class="{{ request()->routeIs('schedules.*') ? 'text-primary-blue' : 'text-main-text' }} text-xs">Schedule
                                    Settup</a>
                            </div>

                        </div>

                    </div>

                    {{-- Exercise Library --}}
                    <div x-data="{ open: true }">

                        <div class="flex items-center gap-x-1 cursor-pointer" x-on:click="open = ! open">

                            <p class="text-muted-text text-xs">Exercise Library</p>

                            {{--  dropdown icon container --}}
                            <div :class="open ? 'rotate-0' : '-rotate-90'" x-transition>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="text-muted-text">
                                    <path d="M4 6H11L7.5 10.5L4 6Z" fill="currentColor"></path>
                                </svg>
                            </div>

                        </div>

                        <div class="my-1">

                            {{-- workout 1 --}}
                            <div class="flex items-center gap-x-1.5 hover:bg-hover p-1.5 rounded-lg cursor-pointer"
                                x-show="open" x-transition:enter="transition ease-out duration-500"
                                x-transition:enter-start="opacity-0 -translate-x-8"
                                x-transition:enter-end="opacity-100 translate-x-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 translate-x-0"
                                x-transition:leave-end="opacity-0 -translate-x-4">
                                {{-- icon --}}
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="{{ request()->routeIs('library.*') ? 'text-primary-blue' : 'text-main-text' }}  size-5  -rotate-90 lucide lucide-dumbbell preview-icon">
                                        <path
                                            d="M17.596 12.768a2 2 0 1 0 2.829-2.829l-1.768-1.767a2 2 0 0 0 2.828-2.829l-2.828-2.828a2 2 0 0 0-2.829 2.828l-1.767-1.768a2 2 0 1 0-2.829 2.829z" />
                                        <path d="m2.5 21.5 1.4-1.4" />
                                        <path d="m20.1 3.9 1.4-1.4" />
                                        <path
                                            d="M5.343 21.485a2 2 0 1 0 2.829-2.828l1.767 1.768a2 2 0 1 0 2.829-2.829l-6.364-6.364a2 2 0 1 0-2.829 2.829l1.768 1.767a2 2 0 0 0-2.828 2.829z" />
                                        <path d="m9.6 14.4 4.8-4.8" />
                                    </svg>
                                </div>
                                {{-- link --}}
                                <a href="#"
                                    class="{{ request()->routeIs('library.*') ? 'text-primary-blue' : 'text-main-text' }} text-xs">Upper
                                    Body</a>
                            </div>

                            {{-- workout 3 --}}
                            <div class="flex items-center gap-x-1.5 hover:bg-hover p-1.5 rounded-lg cursor-pointer"
                                x-show="open" x-transition:enter="transition ease-out duration-600"
                                x-transition:enter-start="opacity-0 -translate-x-12"
                                x-transition:enter-end="opacity-100 translate-x-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 translate-x-0"
                                x-transition:leave-end="opacity-0 -translate-x-4">
                                {{-- icon --}}
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="{{ request()->routeIs('library.*') ? 'text-primary-blue' : 'text-main-text' }} size-5 -rotate-90 lucide lucide-dumbbell preview-icon">
                                        <path
                                            d="M17.596 12.768a2 2 0 1 0 2.829-2.829l-1.768-1.767a2 2 0 0 0 2.828-2.829l-2.828-2.828a2 2 0 0 0-2.829 2.828l-1.767-1.768a2 2 0 1 0-2.829 2.829z" />
                                        <path d="m2.5 21.5 1.4-1.4" />
                                        <path d="m20.1 3.9 1.4-1.4" />
                                        <path
                                            d="M5.343 21.485a2 2 0 1 0 2.829-2.828l1.767 1.768a2 2 0 1 0 2.829-2.829l-6.364-6.364a2 2 0 1 0-2.829 2.829l1.768 1.767a2 2 0 0 0-2.828 2.829z" />
                                        <path d="m9.6 14.4 4.8-4.8" />
                                    </svg>
                                </div>
                                {{-- link --}}
                                <a href="#"
                                    class="{{ request()->routeIs('library.*') ? 'text-primary-blue' : 'text-main-text' }} text-xs">Lower
                                    Body</a>
                            </div>

                            {{-- workout 4 --}}
                            <div class="flex items-center gap-x-1.5 hover:bg-hover p-1.5 rounded-lg cursor-pointer"
                                x-show="open" x-transition:enter="transition ease-out duration-800"
                                x-transition:enter-start="opacity-0 -translate-x-16"
                                x-transition:enter-end="opacity-100 translate-x-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 translate-x-0"
                                x-transition:leave-end="opacity-0 -translate-x-4">
                                {{-- icon --}}
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        class="{{ request()->routeIs('library.*') ? 'text-primary-blue' : 'text-main-text' }} -rotate-90 lucide lucide-dumbbell preview-icon size-5">
                                        <path
                                            d="M17.596 12.768a2 2 0 1 0 2.829-2.829l-1.768-1.767a2 2 0 0 0 2.828-2.829l-2.828-2.828a2 2 0 0 0-2.829 2.828l-1.767-1.768a2 2 0 1 0-2.829 2.829z" />
                                        <path d="m2.5 21.5 1.4-1.4" />
                                        <path d="m20.1 3.9 1.4-1.4" />
                                        <path
                                            d="M5.343 21.485a2 2 0 1 0 2.829-2.828l1.767 1.768a2 2 0 1 0 2.829-2.829l-6.364-6.364a2 2 0 1 0-2.829 2.829l1.768 1.767a2 2 0 0 0-2.828 2.829z" />
                                        <path d="m9.6 14.4 4.8-4.8" />
                                    </svg>
                                </div>
                                {{-- link --}}
                                <a href="#"
                                    class="{{ request()->routeIs('library.*') ? 'text-primary-blue' : 'text-main-text' }} text-xs">Midsection
                                    &amp; Stability</a>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

            {{-- SECTION 3 --}}

            <div class="border border-divider rounded-lg">
                {{-- Settings --}}
                <div class="flex items-center gap-x-1.5 hover:bg-hover p-1.5 py-3 rounded-lg cursor-pointer">

                    {{-- icon --}}
                    <div>
                        <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                            class="{{ request()->is('settings') ? 'text-primary-blue' : 'text-main-text' }}  size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12a7.5 7.5 0 0 0 15 0m-15 0a7.5 7.5 0 1 1 15 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077 1.41-.513m14.095-5.13 1.41-.513M5.106 17.785l1.15-.964m11.49-9.642 1.149-.964M7.501 19.795l.75-1.3m7.5-12.99.75-1.3m-6.063 16.658.26-1.477m2.605-14.772.26-1.477m0 17.726-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205 12 12m6.894 5.785-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495">
                            </path>
                        </svg>
                    </div>
                    {{-- endicon --}}
                    {{-- link --}}

                    <a href="#"
                        class="{{ request()->is('settings') ? 'text-primary-blue' : 'text-main-text' }}  text-xs">Settings</a>

                </div>

            </div>

        </aside>

        <main class="col-span-8 bg-surface shadow p-2.5 border border-divider rounded-l-lg">
            {{ $slot }}
        </main>
    </body>

</html>
