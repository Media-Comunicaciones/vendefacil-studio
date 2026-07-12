<header class="sticky top-0 z-20 border-b border-slate-200 bg-white/95 backdrop-blur">

    <div class="flex min-h-20 items-center justify-between gap-4 px-5 sm:px-8 lg:px-10">

        <div>
            <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                Workspace
            </p>

            <h1 class="text-lg font-bold tracking-tight text-slate-950">
                Centro de operaciones
            </h1>
        </div>

        <div class="flex items-center gap-3">

            <button
                type="button"
                class="hidden rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm text-slate-500 transition hover:border-slate-300 hover:bg-white md:block"
            >
                Buscar o ejecutar acción…
                <span class="ml-4 rounded border border-slate-200 bg-white px-2 py-1 text-xs">
                    Ctrl K
                </span>
            </button>

            <div class="relative" x-data="{ open: false }">

                <button
                    type="button"
                    @click="open = !open"
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-slate-950 text-sm font-bold text-white"
                >
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </button>

                <div
                    x-cloak
                    x-show="open"
                    @click.outside="open = false"
                    class="absolute right-0 mt-3 w-52 overflow-hidden rounded-xl border border-slate-200 bg-white shadow-xl"
                >
                    <a
                        href="{{ route('profile.edit') }}"
                        class="block px-4 py-3 text-sm text-slate-700 hover:bg-slate-50"
                    >
                        Mi perfil
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button
                            type="submit"
                            class="block w-full px-4 py-3 text-left text-sm text-red-600 hover:bg-red-50"
                        >
                            Cerrar sesión
                        </button>
                    </form>
                </div>

            </div>

        </div>
    </div>

</header>