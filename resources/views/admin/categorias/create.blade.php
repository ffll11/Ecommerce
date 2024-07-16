<x-admin-layout
 {{-- :breadcrumbs = "[
    [
        'name' => 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name' => 'Categorias'
        'route' => route('admin.categorias.index'),
    ],[
        'name' => 'Nuevo',

    ]
]" --}}
>
<div class="card">
    <form action="{{route('admin.categorias.store')}}" method="POST">
        @csrf
        <div class="mb-4">
            <x-label class="mb-2">
                Nombre
            </x-label>
            <x-input class="w-full" placeholder ="Ingrese el nombre de la categoria " 
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