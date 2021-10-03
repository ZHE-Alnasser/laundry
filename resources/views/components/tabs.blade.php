@props(['active'])

<div x-data="{
        activeTab: '{{ $active }}',
        tabs: [],
        tabHeadings: [],
     }"
     x-init="
     $nextTick(() => {
        tabs = [...$refs.tabs.children];
        tabHeadings = tabs.map((tab, index) => {
        return tab.getAttribute('x-ref')
        });
})
"
     x-cloak
>
    <div class="mb-3"
         role="tablist"
    >
        <template x-for="(tab, index) in tabHeadings"
                  :key="index"
        >
            <button x-text="tab"
                    @click="activeTab = tab"
                    class="px-4 py-1 mx-1 text-sm rounded hover:bg-blue-500 hover:text-white"
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
