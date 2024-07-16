<x-admin-layout
 {{-- :breadcrumbs = "[
    [
        'name' => 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name' => 'Familias'
        'route' => route('admin.familias.index'),
    ],[
        'name' => 'Nuevo',

    ]
]" --}}
>

<div class="card">
    <form action="{{route('admin.familia.store')}}" method="POST">
        @csrf
        <div class="mb-4">
            <x-label class="mb-2">
                Familia
            </x-label>

            <select name="categoria_id">
                
            </select>

        </div>
        <div class="mb-4">
            <x-label class="mb-2">
                Nombre
            </x-label>
            <x-input class="w-full" placeholder ="Ingrese el nombre de la familia " 
            name="name"
            value="{{old('name')}}"/>
        <div class="flex justify-end">
            <x-button>
                Guardar
            </x-button>
        </div>
    </form>
</div>
</x-admin-layout>