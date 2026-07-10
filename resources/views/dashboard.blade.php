<x-app-layout>

    <div class="p-10">

        <div class="mb-8">

            <h1 class="text-4xl font-bold">
                👋 Buenos días {{ auth()->user()->name }}
            </h1>

            <p class="mt-3 text-gray-500">
                Bienvenido a VendeFácil Studio.
            </p>

        </div>

        <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">

            <div class="rounded-2xl border p-6 shadow">

                <h2 class="text-xl font-semibold">
                    ✨ Crear contenido
                </h2>

                <p class="mt-2 text-gray-500">
                    Publicaciones, reels y campañas.
                </p>

            </div>

            <div class="rounded-2xl border p-6 shadow">

                <h2 class="text-xl font-semibold">
                    🤖 IA Studio
                </h2>

                <p class="mt-2 text-gray-500">
                    Prompt Factory y asistentes.
                </p>

            </div>

            <div class="rounded-2xl border p-6 shadow">

                <h2 class="text-xl font-semibold">
                    📅 Planner
                </h2>

                <p class="mt-2 text-gray-500">
                    Organiza tu calendario.
                </p>

            </div>

        </div>

    </div>

</x-app-layout>