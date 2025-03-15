<x-row-data class="mt-2">
    <div class="flex justify-between">
        <div><h2 class="text-lg font-medium">{{ $item->date }}</h2></div>
        <div class="text-slate-500">${{number_format($item->value)}}</div>
    </div> 
    <div class="mb-4 flex justify-between text-sm text-slate-500 items-center">
        <div class="flex space-x-4">
            <div>Tipo</div>
            <div>{{ $item->type()?->get()?->first()?->getTypeName() ?? "--"}}</div>
        </div> 
        <div class="flex space-x-1 text-xs">
            <div class="rounded-md border px-2 py-1">
                Edit
            </div>
        </div>
    </div>
 
    {{$slot}}

</x-row-data>