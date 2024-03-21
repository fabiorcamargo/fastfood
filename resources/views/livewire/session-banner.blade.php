<div>
    <style>
        #banner {
            position: fixed;
            top: -50px;
            left: 0;
            width: 100%;
            background-color: #ffffff;
            color: black;
            padding: 10px 0;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 999;
            transition: top 0.3s ease-in-out;
        }
    </style>

    <div class="pb-10 xl:px-40">
        <div class="relative bg-white">
            <div class="container p-4 m-auto lg:px-7">
                <div class="sm:py-10">
                    <div class="w-full sd:mx-auto">
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search" wire:model.live="search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-gray-500 focus:border-gray-500" placeholder="Buscar no cardápio" required />
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1">
                    @if($search == '')
                        @foreach ($categories as $category)
                        <div class="session py-6" id="{{$category->name}}">
                            <h1 class="sm:text-2xl text-xl text-gray-600">{{$category->name}} </h1>
                            <div class="border-b border-gray-200 py-2"></div>
                            @livewire('gallery-itens', ['products' => $category->products])
                        </div>
                        @endforeach
                    @else
                    <div class="session py-6" id="Itens da Pesquisa">
                        <h1 class="sm:text-2xl text-xl text-gray-600">Itens da Pesquisa</h1>
                        <div class="border-b border-gray-200 py-2"></div>
                        @livewire('gallery-itens', ['products' => $products], key('gallery-' . time()))
                    </div>
                    @endif
                </div>

            </div>
        </div>
        <div id="banner" class="hidden">Nome da Sessão</div>
    </div>
    <script>
        window.addEventListener('scroll', function() {
            if (window.innerWidth <= 976) {
                let banner = document.getElementById('banner');
                let sessions = document.querySelectorAll('.session');

                sessions.forEach(session => {
                    let rect = session.getBoundingClientRect();
                    if (rect.top >= 0 && rect.top < window.innerHeight/3) { // Verifica se o topo da sessão está dentro dos primeiros 20 pixels da janela
                        if (session.id !== 'logo') { // Verifica se o ID da sessão não é "logo"
                            banner.innerText = session.id;
                            banner.style.top = '0';
                        } else {
                            banner.style.top = '-100px'; // Oculta o banner quando a sessão for "logo"
                        }
                    }
                });
            }
        });
    </script>



</div>
