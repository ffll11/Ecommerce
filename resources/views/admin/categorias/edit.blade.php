<x-admin-layout {{-- :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name' => 'Categorias',
        'route' => route('admin.categorias.index'),
    ],[
        'name' => $categoria->Categoria,

    ]
] " --}}>
    <div class="card">
        <form action="{{ route('admin.categorias.update', $categoria) }}" method="PATCH">
            @csrf
            <div class="mb-4">
                <x-label class="mb-2">
                    Nombre
                </x-label>

                <x-input class="w-full" placeholder="Ingrese el nombre de la categoria" name="Categoria"
                    value="{{ old('Categoria', $categoria->Categoria) }}" />

                <div class="flex justify-end ">

                    <x-danger-button onclick="confirmDelete()">
                        Eliminar
                    </x-danger-button>
                    <x-button class="ml-2">
                        Actualizar
                    </x-button>
                </div>
        </form>

        <form action="{{ route('admin.categorias.destroy', $categoria) }}" method="POST" id="delete-form">
            @csrf

            @method('DELETE')

        </form>

        @push('js')
            <script>
                function confirmDelete() {
                    // document.getElementById('delete-form').submit();
                    Swal.fire({
                        title: "¿Estas seguro?",
                        text: "¡No podras revertir esto!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Si, eliminalo!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('delete-form').submit();

                        }
                    });
                }
            </script>
        @endpush
    </div>

</x-admin-layout>
