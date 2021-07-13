


<x-layouts.admin>
{{--<livewire: livewire-datatables/>--}}
{{--<livewire:deletable-demo-table />--}}


{{--<livewire:restore-all model="App\User" />--}}

{{--@push('styles')--}}
    {{--@bukStyles(true)--}}
{{--@endpush--}}

{{--@push('scripts')--}}
    {{--@bukScripts(true)--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"--}}
            {{--integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g=="--}}
            {{--crossorigin="anonymous">--}}
    {{--</script>--}}
{{--@endpush--}}
<div>
    @livewire('users-datatable')
</div>
</x-layouts.admin>
