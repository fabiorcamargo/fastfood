

<div class="fixed bottom-0 z-30 w-full -translate-x-1/2 bg-white border-t border-gray-200 left-1/2 dark:bg-gray-700 dark:border-gray-600">
    {{-- <div class="w-full">
        <div class="max-w-xs mx-auto my-2 bg-gray-100 rounded-lg dark:bg-gray-600">
            <div class="flex overflow-x-auto" role="group">
                <button type="button" class="px-5 py-1.5 text-xs font-medium text-gray-900 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700 rounded-lg">
                    New
                </button>
                <button type="button" class="px-5 py-1.5 text-xs font-medium text-white bg-gray-900 dark:bg-gray-300 dark:text-gray-900 rounded-lg">
                    Popular
                </button>
                <button type="button" class="px-5 py-1.5 text-xs font-medium text-gray-900 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700 rounded-lg">
                    Following
                </button>
            </div>
        </div>
    </div> --}}

    <div class="grid h-full max-w-lg grid-cols-3 mx-auto">
        <button data-tooltip-target="tooltip-home" type="button" class="inline-flex flex-col items-center justify-center p-2 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <x-heroicon-o-home  class="w-5 h-5 mb-1 text-gray-500 dark:text-gray-400"/>
            <span class="text-xs text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Início</span>
        </button>
        </button>
        <div id="tooltip-home" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Início
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button data-tooltip-target="tooltip-post" type="button" class="inline-flex flex-col items-center justify-center p-2 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <x-tabler-receipt class="w-5 h-5 mb-1 text-gray-600 dark:text-gray-400"  stroke-width="1" />
            <span class="text-xs text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Pedidos</span>
        </button>
        <div id="tooltip-post" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Pedidos
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <button data-tooltip-target="tooltip-settings" type="button" class="inline-flex flex-col items-center justify-center p-2 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <x-heroicon-o-user class="w-5 h-5 mb-1 text-gray-500 dark:text-gray-400"/>
            <span class="text-xs text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Perfil</span>
        </button>
        <div id="tooltip-settings" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Perfil
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>
</div>
