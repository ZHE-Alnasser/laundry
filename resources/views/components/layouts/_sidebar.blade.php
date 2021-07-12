<div class="md:flex flex-col md:flex-row md:min-h-screen w-full mb-4">
    <div class="flex flex-col w-full md:w-64 text-gray-700 bg-gray-100 dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0">
        <button class="flex-row text-gray-500 cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent
        rounded bg-transparent block md:hidden outline-none focus:outline-none mr-2"
                type="button" onclick="toggleNavbar('example-collapse-navbar')">
            <div class="flex flex1">

                <svg fill="currentColor" viewBox="0 0 20 20" class="flex-row w-6 h-6">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                          clip-rule="evenodd"></path>
                </svg>
                {{__("Manage")}}

                <nav class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto hidden flex-col"
                     id="example-collapse-navbar">
                </nav>
            </div>
        </button>
    </div>
 </div>
<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("flex");
    }
</script>