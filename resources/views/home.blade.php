<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @foreach($products as $product)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <a href="{{ route('products.show', $product) }}">
                        <div class="p-6 bg-white">
                            <div>
                                <img src="{{asset('images/'.$product->image)}}" alt="">
                            </div>

                            <div class="mb-4 mt-2 text-lg">
                                {{ $product->title }}
                            </div>

                            <div class="grid grid-cols-3 gap-4">
                                <div class="col-span-2">
                                    {{ $product->description }}
                                </div>
                                <div class="relative">
                                    <img src="{{ asset('images/pastle.jpg') }}" width="80px" alt="">
                                    <div class="absolute top-14 right-0">
                                        @money($product->price)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

