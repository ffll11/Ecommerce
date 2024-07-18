<div>
    <form>
        <div class="card">
            <x-validation-errors class="mb-4"></x-validation-errors>

            <div class="mb-4">
                <x-label class="mb-2">
                    Categorías
                </x-label>
                <x-select name="Categoria_id" class="w-full" wire:model="subfamilia.Categoria_id">
                    <option value="" disabled>
                        Seleccione una categoría
                    </option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->Id }}">{{ $categoria->Categoria }}</option>
                    @endforeach
                </x-select>
            </div>

            <x-label class="mb-2">
                Familia
            </x-label>

            <x-select name="Familia_id" class="w-full" wire:model="subfamilia.Familia_id">
                <option value="" disabled>
                    Seleccione una familia
                </option>
                @foreach ($this->familias as $familia)
                    <option value="{{ $familia->Id }}">{{ $familia->Familia }}</option>
                @endforeach
            </x-select>

        </div>
        <div class="mb-4">
            <x-label class="mb-2">
                Nombre
            </x-label>

            <x-input class="w-full" placeholder="Ingrese el nombre de la subfamilia"
                wire:model.lazy="subfamilia.Subfamilia" />

        </div>
        <div class="flex justify-end">
            <x-button>
                Guardar
            </x-button>
        </div>
    </form>

</div>
