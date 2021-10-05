@props(['alignment' => 'left','arrow'=>''])

@php
    $alignmentClasses = [
        'left' => 'left-0',
        'right' => 'right-0'
    ];
@endphp

<div {{$attributes->merge(['class'=>'relative'])}} x-data="{ open: false }" x-on:click.outside="open = false">
    <div class="flex items-center" class="cursor-pointer" x-on:click="open = ! open">
        {{ $trigger }}
        {{$arrow}}
        @if(!$arrow)
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" :class="{'rotate-180': open}"
                 class="ml-1 transform inline-block fill-current text-gray-500 cursor-pointer w-6 h-6">
                <path fill-rule="evenodd"
                      d="M15.3 10.3a1 1 0 011.4 1.4l-4 4a1 1 0 01-1.4 0l-4-4a1 1 0 011.4-1.4l3.3 3.29 3.3-3.3z"/>
            </svg>
        @endif
    </div>

    <div style="display: none"
         class="absolute {{ $alignmentClasses[$alignment] }} z-20 bg-white text-black rounded shadow-md py-2 mt-1"
         x-show="open"
         x-transition:enter="transition transform duration-300"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition transform duration-300"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
    >
        {{ $slot }}
    </div>
</div>
