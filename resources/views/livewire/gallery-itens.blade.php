<div>
    <div class="relative bg-white">
        <div class="container m-auto pt-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                @foreach ($products as $product)
                <div>
                    <a href="#" onclick="return false;" data-modal-target="cart-modal-{{$product->id}}"
                        data-modal-toggle="cart-modal-{{$product->id}}"
                        class="relative flex items-center bg-white sm:border border-b mx-2 border-gray-200 md:rounded-lg sm:shadow flex-row hover:bg-gray-100">
                        <div class="grid grid-cols-3">
                            <div class="col-span-2 flex flex-col justify-between p-2 leading-normal">
                                <h5 class="mb-2 text-base font-bold md:text-2xl tracking-tight text-gray-700">
                                    {{$product->name}}
                                </h5>
                                <p class="mb-3 text-sm md:text-sm font-normal text-gray-700">{{
                                    substr($product->description, 0, 100) }}{{ strlen($product->description) > 100 ?
                                    '...' : '' }}</p>
                                <p class="mb-3 text-gray-500 font-black py-2"> {{$product->people > 0 ?
                                    ($product->people == 1 ? 'Serve ' . $product->people . ' pessoa' : 'Serve ' .
                                    $product->people . ' pessoas') : ''}}
                                </p>
                                <h5 class="mb-2 sm:text-lg md:text-xl tracking-tight text-gray-700 ">R$ {{
                                    str_replace('.', ',', $product->price) }}</h5>
                            </div>
                            <div class="col-span-1 sm:px-4">
                                <img class="object-cover h-auto w-full my-4 rounded-lg"
                                    src="/storage/{{$product->image}}" alt="">
                            </div>
                        </div>
                    </a>
                </div>



                <div id="cart-modal-{{$product->id}}" tabindex="-1"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-screen-xl max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <div class="flex flex-col md:grid md:grid-cols-2 gap-4">
                                <div class="lg:ps-4">
                                    <img class="object-cover h-auto w-full my-4 rounded-lg"
                                        src="/storage/{{$product->image}}" alt="">
                                </div>
                                <div class="p-4">
                                    <h5 class="mb-2 text-base font-bold md:text-2xl tracking-tight text-gray-700">
                                        {{$product->name}}
                                    </h5>
                                    <p class="mb-3 text-sm md:text-sm font-normal text-gray-700">{{
                                        substr($product->description, 0, 100) }}{{ strlen($product->description) > 100 ?
                                        '...' : '' }}</p>
                                    <p class="mb-3 text-gray-500 font-black py-2"> {{$product->people > 0 ?
                                        ($product->people == 1 ? 'Serve ' . $product->people . ' pessoa' : 'Serve ' .
                                        $product->people . ' pessoas') : ''}}
                                    </p>
                                    <h5 class="mb-2 sm:text-lg md:text-xl tracking-tight text-gray-700 ">R$ {{
                                        str_replace('.', ',', $product->price) }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>
