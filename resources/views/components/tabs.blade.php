{{--/*--}}
{{--name collection name--}}
{{--$tabs = collect([--}}
{{--['name' => 'tab1', 'content' => 'lsdkfjsd'],--}}
{{--['name' => 'tab2', 'content' => 'dfsdf'],--}}
{{--]);--}}
{{--*/--}}

{{--<div class="flex justify-center items-center h-screen">--}}
    {{--<!--actual component start-->--}}
    {{--<div x-data="setup()">--}}
        {{--<ul class="flex justify-center items-center my-4">--}}
            {{--<template x-for="(tab, index) in tabs" :key="index">--}}
                {{--<li class="cursor-pointer py-2 px-4 text-gray-500 border-b-8"--}}
                    {{--:class="activeTab===index ? 'text-green-500 border-green-500' : ''" @click="activeTab = index"--}}
                    {{--x-text="tab"></li>--}}
            {{--</template>--}}
        {{--</ul>--}}

        {{--<div class="w-80 bg-white p-16 text-center mx-auto border">--}}
            {{--<div x-show="activeTab===0">Content 1</div>--}}
            {{--<div x-show="activeTab===1">Content 2</div>--}}
            {{--<div x-show="activeTab===2">Content 3</div>--}}
            {{--<div x-show="activeTab===3">Content 4</div>--}}
        {{--</div>--}}

    {{--</div>--}}
    {{--<!--actual component end-->--}}
{{--</div>--}}

{{--<script>--}}
    {{--function setup() {--}}
        {{--return {--}}
            {{--activeTab: 0,--}}
            {{--tabs: [--}}
                {{--"Tab No.1",--}}
                {{--"Tab No.2",--}}
                {{--"Tab No.3",--}}
                {{--"Tab No.4",--}}
            {{--]--}}
        {{--};--}}
    {{--};--}}
{{--</script>--}}

{{--<!----}}
{{--# Changelog:--}}

{{--## [1.1] - 2021-05-01--}}
{{--### Added--}}
 {{--- Back/Next buttons--}}

{{--## [1.0] - 2021-05-01--}}
{{--### Added--}}
 {{--- Nav bar with two styles--}}
 {{--- Set tabs title dynamically and render on page--}}
{{---->--}}

{{--<div x-data="{ tab: 'foo' }">--}}
        {{--<ul class="flex justify-center items-center my-4">--}}
   {{--@foreach($tabs as $tab)--}}
                {{--<li class="cursor-pointer py-2 px-4 text-gray-500 border-b-8"--}}
                    {{--:class="tab==={{$tab}} ? 'text-green-500 border-green-500' : ''" @click="tab = {{$tab}}">{{__($tab)}}</li>--}}
       {{--@endforeach--}}
        {{--</ul>--}}

    {{--<div class="w-80 bg-white p-16 text-center mx-auto border">--}}
        {{--{{$slot}}--}}

    {{--</div>--}}

    {{--<div x-show="tab === 'foo'">Tab Foo</div>--}}
    {{--<div x-show="tab === 'bar'">Tab Bar</div>--}}

    {{--{{$slot}}--}}
{{--</div>--}}
@props(['active'])

<div x-data="{
        activeTab: '{{ $active }}',
        tabs: [],
        tabHeadings: [],
        toggleTabs() {
            this.tabs.forEach(
                tab => tab.__x.$data.showIfActive(this.activeTab)
            );
        }
     }"
     x-init="() => {
        tabs = [...$refs.tabs.children];
        tabHeadings = tabs.map((tab, index) => {
            tab.__x.$data.id = (index + 1);
            return tab.__x.$data.name;
        });
        toggleTabs();
     }"
     x-cloak
>
    <div class="mb-3"
         role="tablist"
    >
        <template x-for="(tab, index) in tabHeadings"
                  :key="index"
        >
            <button x-text="tab"
                    @click="activeTab = tab; toggleTabs();"
                    class="px-4 py-1 text-sm rounded hover:bg-blue-500 hover:text-white"
                    :class="tab === activeTab ? 'bg-blue-500 text-white' : 'text-gray-800'"
                    :id="`tab-${index + 1}`"
                    role="tab"
                    type="button"
                    :aria-selected="(tab === activeTab).toString()"
                    :aria-controls="`tab-panel-${index + 1}`"
            ></button>
        </template>
    </div>

    <div x-ref="tabs" class="p-3">
        {{ $slot }}
    </div>
</div>