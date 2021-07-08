<x-layouts.admin >
{{--<div x-data="{show:false}">--}}
    <p x-show="show" CLASS="text-red-400 text-center"  >we</p>
{{--@livewire('item-data')--}}
    <livewire:item-data />


    {{--<livewire:restore-all model="App\Model\Item" />--}}
    <button class="bg-red"  @click="show= ! show" x-text="show ? 'hide' : 'show'">mm</button></div>
</x-layouts.admin>
