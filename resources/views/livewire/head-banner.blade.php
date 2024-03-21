<div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Neonderthaw&display=swap');

        .neon-text-3 {
            font-size: 3rem;
            font-family: 'Neonderthaw', sans-serif;
            font-weight: bold;
            color: #ffffff; /* Vermelho */
            text-shadow: 0 0 10px #ff0000, 0 0 20px #ff0000, 0 0 30px #ff0000, 0 0 40px #ff0000, 0 0 50px #ff0000;
        }
        .neon-text-2 {
            font-size: 2rem;
            font-family: 'Neonderthaw', sans-serif;
            font-weight: bold;
            color: #ffffff; /* Vermelho */
            text-shadow: 0 0 10px #ff0000, 0 0 20px #ff0000, 0 0 30px #ff0000, 0 0 40px #ff0000, 0 0 50px #ff0000;
        }
    </style>

    <div id="logo" class="session relative h-screen flex flex-col items-center justify-center text-center text-white py-10">
        <div class="slide-docker absolute top-0 left-0 w-full h-full overflow-hidden">

            <div class="relative min-w-full min-h-full overflow-hidden rounded-b-lg ">
                <img class="absolute inset-0 object-cover object-top w-full h-full" src="Pao-com-Carne-2.jpg" alt="Imagem">
                <div class="absolute inset-0 bg-black opacity-60"></div>
            </div>

        </div>
        <a href="/" class="slide-content space-y-2 z-10">
            <div class="px-8 max-w-lg rounded-xl py-4 flex smcenter:items- space-y-0 space-x-6">
                <img class="block h-24 rounded-full mx-0 shrink-0" src="logo.jpg" alt="Woman's Face">
                <div  class=" space-y-2 text-left">
                    <div class="sm:space-y-0.5">
                        <h1 class="neon-text-3">Gordos</h1>
                        <h3 class="neon-text-2">Burguer's</h3>
                    </div>
                    {{-- <div class="flex justify-start">
                        <!-- Adicionado classe flex e justify-end -->
                        <button wire:click='wplink()' type="button"
                            class="text-white bg-green-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-green-500 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            <x-tabler-brand-whatsapp class="w-6 h-6" />
                            <span class="sr-only">Icon description</span>
                        </button>
                        <button wire:click='instalink()' type="button"
                            class="text-white bg-pink-600 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-pink-500 dark:hover:bg-pink-700 dark:focus:ring-pink-800">
                            <x-tabler-brand-instagram class="w-6 h-6" />
                            <span class="sr-only">Icon description</span>
                        </button>
                    </div> --}}
                </div>
            </div>
        </a>
    </div>

    @livewire('session-banner')

</div>
