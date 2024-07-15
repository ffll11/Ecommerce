{{-- extendemos layout de admin--}}
{{--pasamos parametros de breadcrumbs--}}
<x-admin-layout {{-- :breadcrumbs = "[
    [
        'name' => 'Dashboard',
        'route' => route('admin.dashboard'),

    ],
    [
        'name' => 'Prueba',
    ]
]" --}}>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex items-center">
                <div class="flex">
                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    <div class="ml-4 flex-1">
                        <h2 class="text-lg font-semibold">
                            Bienvenido,{{auth()->user()->name}}
                        </h2>
                        {{--Formulario para cerrar sesion con jetstream--}}
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="text-sm hover:text-blue-500"> 
                                Cerrar Sesión
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6 flex items-center justify-center">
            <h2 class="text-xl font-semibold">
                ACE
            </h2>
        </div>
    </div>
</x-admin-layout>