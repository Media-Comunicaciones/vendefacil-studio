<aside class="border-b border-slate-200 bg-slate-950 text-white lg:min-h-screen lg:w-72 lg:border-b-0 lg:border-r lg:border-slate-800">

    <div class="flex h-full flex-col">

        <div class="flex h-20 items-center border-b border-slate-800 px-6">
            <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-lime-400 font-black text-slate-950">
                    S
                </div>

                <div>
                    <p class="font-bold tracking-tight">
                        VendeFácil
                    </p>

                    <p class="text-xs text-slate-400">
                        Studio Workspace
                    </p>
                </div>
            </a>
        </div>

        <nav class="flex-1 space-y-7 px-4 py-6">

            <div>
                <p class="mb-3 px-3 text-xs font-semibold uppercase tracking-wider text-slate-500">
                    Principal
                </p>

                <a
                    href="{{ route('dashboard') }}"
                    class="flex items-center gap-3 rounded-xl bg-lime-400 px-3 py-3 font-semibold text-slate-950"
                >
                    <span>⌂</span>
                    <span>Workspace</span>
                </a>
            </div>

            <div>
                <p class="mb-3 px-3 text-xs font-semibold uppercase tracking-wider text-slate-500">
                    Trabajo
                </p>

                <div class="space-y-1">
                    <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-3 text-slate-300 transition hover:bg-slate-900 hover:text-white">
                        <span>◉</span>
                        <span>Clientes y marcas</span>
                    </a>

                    <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-3 text-slate-300 transition hover:bg-slate-900 hover:text-white">
                        <span>▦</span>
                        <span>Proyectos</span>
                    </a>

                    <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-3 text-slate-300 transition hover:bg-slate-900 hover:text-white">
                        <span>□</span>
                        <span>Planner</span>
                    </a>
                </div>
            </div>

            <div>
                <p class="mb-3 px-3 text-xs font-semibold uppercase tracking-wider text-slate-500">
                    Apps
                </p>

                <div class="space-y-1">
                    <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-3 text-slate-300 transition hover:bg-slate-900 hover:text-white">
                        <span>✦</span>
                        <span>Content Factory</span>
                    </a>

                    <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-3 text-slate-300 transition hover:bg-slate-900 hover:text-white">
                        <span>⌘</span>
                        <span>Prompt Factory</span>
                    </a>

                    <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-3 text-slate-300 transition hover:bg-slate-900 hover:text-white">
                        <span>◇</span>
                        <span>Biblioteca</span>
                    </a>
                </div>
            </div>

        </nav>

        <div class="border-t border-slate-800 p-4">
            <a
                href="{{ route('profile.edit') }}"
                class="flex items-center gap-3 rounded-xl px-3 py-3 text-slate-300 transition hover:bg-slate-900 hover:text-white"
            >
                <div class="flex h-9 w-9 items-center justify-center rounded-full bg-slate-800 text-sm font-bold">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>

                <div class="min-w-0 flex-1">
                    <p class="truncate text-sm font-semibold text-white">
                        {{ auth()->user()->name }}
                    </p>

                    <p class="truncate text-xs text-slate-500">
                        {{ auth()->user()->email }}
                    </p>
                </div>
            </a>
        </div>

    </div>
</aside>