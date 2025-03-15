<x-layout>
<x-breadcrumbs class="mb-4" :links="['Cuentas' => route('data.index'),
                                    
                                    'Apply' => '#']" />  
    <x-data-card item = {{$data}}/>
    <x-row-data>
        <h2 class="mb-4 text-lg font-medium">
        Record Save
        </h2>

        <form action="{{ route('data.register.store', $data) }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="record_expense"
            class="mb-2 block text-sm font-medium text-slate-900">Expense</label>
            <x-text-input type="number" name="record_expense" />
        </div>

        <x-button class="w-full">Apply</x-button>
        </form>
    </x-row-data>
</x-layout>