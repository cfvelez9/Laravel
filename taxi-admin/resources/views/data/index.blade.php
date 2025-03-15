<x-layout>
<x-breadcrumbs class="mb-4" :links="['Cuentas' => route('data.index')]"></x-breadcrumbs>

    <x-row-data class="mb-4 text-sm" x-data="">
        <form x-ref="filters" action="{{route('data.index')}}" method="GET" id="filtering-form">
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <div class="mb-1 font-semibold">Search</div>
                    <x-text-input name="search" value="" placeholder="Search for any text" form-ref="filters"></x-text-input>
                </div>
                <div>
                    <div class="mb-1 font-semibold">Fechas</div>
                    <div class="flex space-x-2">
                    <x-text-input name="min_date" value="" placeholder="Fecha inicial" form-ref="filters"></x-text-input>
                    <x-text-input name="max_date" value="" placeholder="Fecha final" form-ref="filters"></x-text-input>
                    </div>
                </div>
                <div>
                    <div class="mb-1 front-semibold">Taxi</div>
                    <x-radio-group name="vehicle" :options="$vehicles"></x-radio-group>
                </div>
                <div> 
                    <div class="mb-1 front-semibold">Tipo</div>
                    <x-radio-group name="type" :options="\App\Models\Type::$types"></x-radio-group>
                </div>
            </div>
            <x-button class="w-full">Filtro</x-button>
        </form>
    </x-row-data>

    @foreach ($data as $item )
        <x-data-card class="mb-4" :$item>
            <div>
                <x-link-button :href="route('data.show', $item)">
                    Show
                </x-link-button>
            </div>
        </x-data-card>
    @endforeach
</x-layout>