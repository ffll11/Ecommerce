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


{{-- <div class="card">
    <form action="{{route('admin.subfamilias.store')}}" method="POST">
        @csrf

        <x-validation-errors class="mb-4"> </x-validation-errors>

        <div class="mb-4">
            <x-label class="mb-2">
                Familia
            </x-label>

            <x-select name="Familia_id" class="w-full">
                @foreach ($familias as $familia)
                    <option value="{{$familia->Id}}">{{$familia->Familia}}</option>
                @endforeach
            </x-select>

        </div>
        <div class="mb-4">
            <x-label class="mb-2">
                Nombre
            </x-label>

            <x-input class="w-full" placeholder="Ingrese el nombre de la subfamilia" name="SubFamilia" value="{{old('SubFamilia')}}" />

        </div>
        <div class="flex justify-end">
            <x-button>
                Guardar
            </x-button>
        </div>
    </form>
</div> --}}

@livewire('admin.subfamilias.subfamilia-create')

</x-admin-layout>
