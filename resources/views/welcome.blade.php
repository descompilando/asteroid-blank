<x-layout.app>
    <x-slot name="title">Welcome</x-slot>
    <div class="flex h-screen overflow-hidden bg-gray-50">
        <div class="container flex flex-col mx-auto">
            <div class="grid flex-1 mb-20 place-items-center">
                <div class="text-center">
                    <h1 class="text-4xl font-medium text-gray-900">
                        {{ __('Asteroid Blank') }}
                    </h1>
                    <p class="text-lg leading-loose tracking-wider text-gray-600">
                        {{ __('Start new Laravel apps with power-ups') }}
                    </p>
                    <a href="https://github.com/descompilando/asteroid-blank" class="inline-block mt-5">
                        <x-icon-github class="w-10 h-10" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>
