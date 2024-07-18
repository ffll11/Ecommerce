<x-admin-layout>
    <div class="card">
        <form action="{{ route('admin.subfamilias.update', $subfamilia) }}" method="POST">
            @csrf
            @method('PUT')

            <x-validation-errors class="mb-4"> </x-validation-errors>

            <div class="mb-4">
                <x-label class="mb-2">
                    Familia
                </x-label>

                <x-select name="Familia_id" class="w-full">
                    @foreach ($familias as $familia)
                        <option value="{{ $familia->Id }}" @selected(old('Familia_id',$subfamilia->Familia_id ) == $familia->Id)>{{ $familia->Familia }}
                        </option>
                    @endforeach
                </x-select>

            </div>
            <div class="mb-4">
                <x-label class="mb-2">
                    Nombre
                </x-label>

                <x-input class="w-full" placeholder="Ingrese el nombre de la subfamilia" name="Subfamilia"
                    value="{{ old('Subfamilia', $subfamilia->SubFamilia) }}" />

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

        <form action="{{ route('admin.subfamilias.destroy', $subfamilia) }}" method="POST" id="delete-form">
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
