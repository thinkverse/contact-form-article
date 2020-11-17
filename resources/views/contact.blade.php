<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.9.6/dist/tailwind.min.css" />

    <livewire:styles />
</head>
<body class="antialiased">
    <div class="relative flex justify-center min-h-screen bg-gray-100 items-top sm:items-center sm:pt-0">
        <div class="w-full max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 ml-4">
                <h1 class="text-4xl font-extrabold">
                    Drop us a line.
                </h1>
            </div>

            <div class="mt-8 overflow-hidden bg-white shadow sm:rounded-lg">
                <div class="grid grid-cols-1">
                    {{-- Here's where our Livewire component will live. --}}
                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-sm text-center text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 ml-4 -mt-px text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                        </svg>

                        <a href="#_" class="ml-1 underline">
                            Privacy
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <livewire:scripts />
</body>
</html>
