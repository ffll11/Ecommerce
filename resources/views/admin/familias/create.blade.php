<x-admin-layout
{{-- :breadcrumbs = "[
    [
        'name' => 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name' => 'Familias',
        'route' => route('admin.familias.index'),
    ],[
        'name' => 'Nuevo',

    ]
]" --}}
>

<div class="card">
    <form action="{{route('admin.familias.store')}}" method="POST">
        @csrf

        <x-validation-errors class="mb-4"> </x-validation-errors>

        <div class="mb-4">
            <x-label class="mb-2">
                Categoria
            </x-label>

            <x-select name="Categoria_id" class="w-full">
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->Id}}">{{$categoria->Categoria}}</option>
                @endforeach
            </x-select>

        </div>
        <div class="mb-4">
            <x-label class="mb-2">
                Nombre
            </x-label>

            <x-input class="w-full" placeholder="Ingrese el nombre de la familia" name="Familia" value="{{old('Familia')}}" />

        </div>
        <div class="flex justify-end">
            <x-button>
                Guardar
            </x-button>
        </div>
    </form>
</div>
</x-admin-layout>
