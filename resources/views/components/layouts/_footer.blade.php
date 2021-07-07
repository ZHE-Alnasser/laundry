<footer>
    <div class="flex justify-center mb-3 mt-3">
        &copy; <a class="flex items-end lg:mt-0 mt-1 mr-1 ml-1" href="{{url('/')}}"
                  title="{{config('app.name')}}">{{config('app.name')}}</a>{{ date('Y') }}.
    </div>
</footer>

<script src="{{ mix('js/app.js') }}"></script>


@livewireScripts
{{--@stack('scripts')--}}
