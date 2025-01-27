<x-admin-layout>
    <div class="card">
        <form action="{{ route('admin.familias.update', $familia) }}" method="POST">
            @csrf
            @method('PUT')

            <x-validation-errors class="mb-4"> </x-validation-errors>

            <div class="mb-4">
                <x-label class="mb-2">
                    Categoria
                </x-label>

                <x-select name="categoria_id" class="w-full">
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->Id }}" @selected(old('Categoria_id',$familia->Categoria_id )== $categoria->Id)>{{ $categoria->Categoria }}
                        </option>
                    @endforeach
                </x-select>

            </div>
            <div class="mb-4">
                <x-label class="mb-2">
                    Nombre
                </x-label>

                <x-input class="w-full" placeholder="Ingrese el nombre de la familia" name="Familia"
                    value="{{ old('Familia', $familia->Familia) }}" />

            </div>

            <div class="flex justify-end">
                <x-danger-button onclick="confirmDelete()">
                    Eliminar
                </x-danger-button>
                <x-button class="ml-2">
                    Guardar
                </x-button>
            </div>
        </form>

        <form action="{{ route('admin.familias.destroy', $familia) }}" method="POST" id="delete-form">
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
