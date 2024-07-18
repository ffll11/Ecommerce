<x-admin-layout {{-- :breadcrumbs = "[
    [
        'name' => 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name' => 'Categorias',
        'route' => route('admin.categorias.index'),
    ],
    [
        'name' => 'Nuevo',

    ]
]" --}}>
    <form action="{{ route('admin.categorias.store') }}" method="POST">

        @csrf
        <div class="card">
            <x-validation-errors class="mb-4"> </x-validation-errors>
            <div class="mb-4">
                <x-label class="mb-2">
                    Nombre
                </x-label>
                <x-input class="w-full" placeholder="Ingrese el nombre de la categoria" name="Categoria"
                    value="{{ old('Categoria') }}" />
            </div>
            <div class="flex justify-end">
                <x-button>
                    Guardar
                </x-button>
            </div>
    </form>
</x-admin-layout>
