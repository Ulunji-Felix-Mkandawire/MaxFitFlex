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

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="grid grid-cols-10 bg-main-background h-screen">

        <aside class="col-span-2 p-2.5">
            {{-- head --}}
            <div class="flex items-center gap-x-2.5">
                {{-- MaxFitFlex Icon --}}
                <img src={{ asset('images/FitFlexPlus.png') }} alt="MaxFitFlex Logo" class="size-6" />
                {{-- MaxFitFlex Label --}}
                <p class="font-medium text-main-text text-sm orbitron">MaxFitFlex</p>
            </div>

            {{-- search exercise: list anything that matches the parameter --}}
            <div class="my-2.5">
                <form>
                    <div class="flex items-center gap-x-1.5 bg-surface shadow p-1.5 rounded-lg w-full">

                        {{-- search icon --}}
                        <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                            class="size-6 text-muted-text">
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

            {{-- workouts --}}

            {{-- workout plans --}}
        </aside>

        <main class="col-span-8 bg-surface shadow p-2.5 border border-divider rounded-l-lg">
            {{ $slot }}
        </main>
    </body>

</html>
