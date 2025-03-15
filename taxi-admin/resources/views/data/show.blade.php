<x-layout>
    <x-breadcrumbs class="mb-4" :links="['Cuentas' => route('data.index')]"></x-breadcrumbs>
    <x-data-card :$item>
        <p class="mb-4 text-sm text-slate-500"> 
            {!! nl2br(e($item->description)) !!}
        </p>
    </x-data-card>
</x-layout>