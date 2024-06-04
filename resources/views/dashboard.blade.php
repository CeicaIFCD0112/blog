<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Principal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Primer video -->
                <div class="p-6 text-gray-900 flex">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ThXx0QjBR3U?si=ejDhf0sd12773nmi" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="ml-4 flex flex-col justify-between">
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Descripción del Video 1</h3>
                            <p class="text-sm text-gray-700 mb-4">
                                NoCopyrightSounds (NCS): Música sin derechos de autor para creadores.
                                <br><br>
                                Mensaje para todos los creadores:
                                <br><br>
                                Toda la música de NCS está libre de derechos de autor y es segura para usar en plataformas como YouTube, TikTok y Twitch. No puedes usar ninguna pista con el propósito de crear una experiencia auditiva (es decir, un video musical) donde la música sea el enfoque principal del video.
                                <br><br>
                                Por favor, consulta nuestra política de uso para nuestros términos de uso y cómo utilizar la música de NCS en tus videos → <a href="http://ncs.io/UsagePolicy" class="text-blue-500 underline" target="_blank">http://ncs.io/UsagePolicy</a>.
                            </p>
                        </div>
                        <div class="mt-2">
                            <span class="text-yellow-500">&#9733;</span>
                            <span class="text-yellow-500">&#9733;</span>
                            <span class="text-yellow-500">&#9733;</span>
                            <span class="text-yellow-500">&#9733;</span>
                            <span class="text-gray-300">&#9733;</span>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Segundo video -->
                <div class="p-6 text-gray-900 flex">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/2op-9DGduGE?si=Bs68AN9DONf_F9Vx" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="ml-4 flex flex-col justify-between">
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Descripción del Video 2</h3>
                            <p class="text-sm text-gray-700 mb-4">
                                NoCopyrightSounds (NCS): Música sin derechos de autor para creadores.
                                <br><br>
                                Mensaje para todos los creadores:
                                <br><br>
                                Toda la música de NCS está libre de derechos de autor y es segura para usar en plataformas como YouTube, TikTok y Twitch. No puedes usar ninguna pista con el propósito de crear una experiencia auditiva (es decir, un video musical) donde la música sea el enfoque principal del video.
                                <br><br>
                                Por favor, consulta nuestra política de uso para nuestros términos de uso y cómo utilizar la música de NCS en tus videos → <a href="http://ncs.io/UsagePolicy" class="text-blue-500 underline" target="_blank">http://ncs.io/UsagePolicy</a>.
                            </p>
                        </div>
                        <div class="mt-2">
                            <span class="text-yellow-500">&#9733;</span>
                            <span class="text-yellow-500">&#9733;</span>
                            <span class="text-yellow-500">&#9733;</span>
                            <span class="text-gray-300">&#9733;</span>
                            <span class="text-gray-300">&#9733;</span>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
