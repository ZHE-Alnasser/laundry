


    <div id="sidebar" class="">
    <div class="md:flex flex-col md:flex-row md:min-h-screen w-full "  >

        <div class="bg-white pb-3  ">

            <div class="hidden md:flex">
                <x-layouts._menu/>


            </div>

<div class="md:hidden " x-data="{show: false}" @click.away="show = false" x-cloak

      >
    <div class="flex mx-5 justify-between"
        >
    <img  src="{{asset('/img/favicon/android-icon-192x192.png')}}" alt="{{__('logo')}}" class="mx-3 mt-2 w-20">


<div class="fixed inset-0 z-20"

            x-show="show"
            class="fixed left-0 top-0 p-6"

    >
    <div
            @click.away="show=false"
            class="bg-white bottom-0 fixed right-0 top-0 z-10 pt-4 pb-4 w-4/6 overflow-y-auto"
    >
    <x-layouts._menu/>
    </div>


    </div>
        <button    @click="show = ! show"
                   class="flex-row text-gray-500 cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent
        rounded bg-transparent block md:hidden outline-none focus:outline-none mr-2"
                 type="button" >
            <svg

                    xmlns="http://www.w3.org/2000/svg"
                    class="w-8 fill-current h-8"
                    style="color:#258ae0"
                    viewBox="0 0 32 32"
            >
                <path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/>
            </svg>

            {{--<svg--}}
                    {{--x-show="show"--}}
                    {{--style="display: none; color:#258ae0;"--}}
                    {{--xmlns="http://www.w3.org/2000/svg"--}}
                    {{--class="w-6 fill-current h-8"--}}
                    {{--viewBox="0 0 36 30"--}}
            {{-->--}}
                {{--<polygon--}}
                        {{--points="32.8,4.4 28.6,0.2 18,10.8 7.4,0.2 3.2,4.4 13.8,15 3.2,25.6 7.4,29.8 18,19.2 28.6,29.8 32.8,25.6 22.2,15 "/>--}}
            {{--</svg>--}}
        </button>
    </div>

</div>


</div>

        </div>
    </div>

    {{--<script>--}}
        {{--feather.replace()--}}
    {{--</script>--}}
{{--<script>--}}
    {{--function toggleNavbar(collapseID) {--}}
        {{--document.getElementById(collapseID).classList.toggle("hidden");--}}
        {{--document.getElementById(collapseID).classList.toggle("flex");--}}
    {{--}--}}
{{--</script>--}}
    {{--<script>--}}
        {{--document.getElementById('nav-toggle').onclick = function () {--}}
            {{--document.getElementById("nav-content").classList.toggle("hidden");--}}
        {{--}--}}
    {{--</script>--}}
