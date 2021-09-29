{{--<x-card>--}}
    {{--sales items--}}
    {{--<div id="{{$id}}"></div>--}}
{{--</x-card>--}}

@push('scripts')
{{--@once--}}
{{--<script src="{{asset('js/apexcharts.js')}}"></script>--}}
{{--@endonce--}}
{{$slot}}
{{--<script>--}}

    {{--var chart = new ApexCharts(document.querySelector('#{{$id}}'), options)--}}
    {{--chart.render()--}}
{{--</script>--}}
@endpush
