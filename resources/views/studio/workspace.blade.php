<section class="mx-auto max-w-7xl">

    <div class="mb-10">
        <span class="inline-flex rounded-full bg-lime-200 px-3 py-1 text-xs font-bold text-slate-900">
            STUDIO WORKSPACE
        </span>

        <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">
            Buenos días, {{ auth()->user()->name }} 👋
        </h2>

        <p class="mt-3 max-w-2xl text-base leading-7 text-slate-500">
            Continúa tus proyectos, crea contenido y organiza todas tus marcas desde un solo lugar.
        </p>
    </div>

    <section class="mb-10">
        <div class="mb-5 flex items-center justify-between">
            <div>
                <h3 class="text-xl font-bold text-slate-950">
                    ¿Qué quieres hacer hoy?
                </h3>

                <p class="mt-1 text-sm text-slate-500">
                    Comienza directamente desde una acción.
                </p>
            </div>

            <button
                type="button"
                class="rounded-xl bg-slate-950 px-4 py-2.5 text-sm font-bold text-white transition hover:bg-lime-400 hover:text-slate-950"
            >
                + Nuevo proyecto
            </button>
        </div>

        @php
            $actions = [
                [
                    'icon' => '✦',
                    'title' => 'Crear contenido',
                    'description' => 'Publicaciones, carruseles, reels y campañas.',
                ],
                [
                    'icon' => '⌘',
                    'title' => 'Abrir Prompt Factory',
                    'description' => 'Construye prompts reutilizables sin consumir IA.',
                ],
                [
                    'icon' => '▦',
                    'title' => 'Planificar calendario',
                    'description' => 'Organiza una semana o un mes completo.',
                ],
                [
                    'icon' => '◉',
                    'title' => 'Gestionar marcas',
                    'description' => 'Clientes, ADN, identidad y proyectos.',
                ],
            ];
        @endphp

        <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
            @foreach ($actions as $action)
                <button
                    type="button"
                    class="group rounded-2xl border border-slate-200 bg-white p-5 text-left shadow-sm transition hover:-translate-y-1 hover:border-lime-400 hover:shadow-lg"
                >
                    <div class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl bg-slate-950 text-lg font-bold text-white transition group-hover:bg-lime-400 group-hover:text-slate-950">
                        {{ $action['icon'] }}
                    </div>

                    <h4 class="font-bold text-slate-950">
                        {{ $action['title'] }}
                    </h4>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        {{ $action['description'] }}
                    </p>
                </button>
            @endforeach
        </div>
    </section>

    <section>
        <div class="mb-5">
            <h3 class="text-xl font-bold text-slate-950">
                Continúa donde quedaste
            </h3>

            <p class="mt-1 text-sm text-slate-500">
                Tus espacios de trabajo más recientes.
            </p>
        </div>

        <div class="grid gap-5 lg:grid-cols-3">

            <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                <div class="mb-5 flex items-center justify-between">
                    <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-bold text-blue-700">
                        SALUD
                    </span>

                    <span class="text-sm text-slate-400">
                        Hoy
                    </span>
                </div>

                <h4 class="text-lg font-bold text-slate-950">
                    CESMED
                </h4>

                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Campañas médicas, contenido y Google Ads.
                </p>

                <button class="mt-6 text-sm font-bold text-slate-950">
                    Continuar →
                </button>
            </article>

            <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                <div class="mb-5 flex items-center justify-between">
                    <span class="rounded-full bg-amber-100 px-3 py-1 text-xs font-bold text-amber-700">
                        INDUSTRIAL
                    </span>

                    <span class="text-sm text-slate-400">
                        Ayer
                    </span>
                </div>

                <h4 class="text-lg font-bold text-slate-950">
                    Corretaje Industrial
                </h4>

                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Content Factory, calendario y series.
                </p>

                <button class="mt-6 text-sm font-bold text-slate-950">
                    Continuar →
                </button>
            </article>

            <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                <div class="mb-5 flex items-center justify-between">
                    <span class="rounded-full bg-lime-100 px-3 py-1 text-xs font-bold text-lime-700">
                        SAAS
                    </span>

                    <span class="text-sm text-slate-400">
                        Hace 2 días
                    </span>
                </div>

                <h4 class="text-lg font-bold text-slate-950">
                    VendeFácil
                </h4>

                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Academia Partner y estrategia comercial.
                </p>

                <button class="mt-6 text-sm font-bold text-slate-950">
                    Continuar →
                </button>
            </article>

        </div>
    </section>

</section>