<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 text-gray-700">


    <h1 class="text-3xl text-center font-semibold mb-8">Complete esta información para crear un producto</h1>

    <div class="grid grid-cols-2 gap-6 mb-4">

        {{-- Categoría --}}
        <div>
            <x-jet-label value="Categorías" />
            <select class="w-full form-control" wire:model="category_id">
                <option value="" selected disabled>Seleccione una categoría</option>

                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <x-jet-input-error for="category_id" />
        </div>

        {{-- Precio --}}
        <div>
            <x-jet-label value="Precio" />
            <x-jet-input wire:model="product.price" type="number" class="w-full" step=".01" />
            <x-jet-input-error for="product.price" />
        </div>


    </div>


    <div class="mb-4">

        {{-- Nombre --}}
        <div class="mb-4">
            <x-jet-label value="Nombre" />
            <x-jet-input type="text" class="w-full" wire:model="product.name"
                placeholder="Ingrese el nombre del producto" />
            <x-jet-input-error for="product.name" />
        </div>

        {{-- Slug --}}
        <div class="mb-4">
            <x-jet-label value="Slug" />
            <x-jet-input type="text" disabled wire:model="product.slug" class="w-full bg-gray-200"
                placeholder="Ingrese el slug del producto" />

            <x-jet-input-error for="product.slug" />
        </div>

        {{-- referencia --}}
        <div class="mb-4">
            <x-jet-label value="Referencia" />
            <x-jet-input type="text" class="w-full" wire:model="product.reference"
                placeholder="Ingrese la referencia del producto" />
            <x-jet-input-error for="product.reference" />
        </div>


        {{-- peso --}}
        <div class="mb-4">
            <x-jet-label value="Peso" />
            <x-jet-input type="text" class="w-full" wire:model="product.weight"
                placeholder="Ingrese el peso del producto" />
            <x-jet-input-error for="product.weight" />
        </div>

        {{-- Cantidad --}}
        <div class="mb-4">
            <x-jet-label value="Cantidad" />
            <x-jet-input type="text" class="w-full" wire:model="product.quantity"
                placeholder="Ingrese la cantidad del producto" />
            <x-jet-input-error for="product.quantity" />
        </div>

        <div class="flex mt-4">
            <x-jet-button wire:loading.attr="disabled" wire:target="save" wire:click="save" class="ml-auto">
                Editar producto
            </x-jet-button>
        </div>
    </div>

</div>
