<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $product->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 grid grid-cols-2 gap-8">
                    <div class="relative">
                        <img src="{{ asset('images/'.$product->image) }}" alt="" >

                    </div>
                    <div class="mt-10 relative">
                        <div class="flex justify-end">
                            <img src="{{ asset('images/blob.png') }}" alt="" width="300px">
                        </div>
                        <div class="absolute top-0 right-0">
                            <div class="text-4xl tracking-widest pb-6">
                                {{ $product->title }}
                            </div>
                            <div class="text-2xl">
                                @money($product->price)
                            </div>
                            <div class="mt-8">
                                <span>Description</span>
                                <div>{{ $product->description }}</div>
                            </div>
                            <form action="{{ route('products.store') }}" method="post">
                                @csrf
                                <div>
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <x-button class="bg-green-500 rounded-lg shadow-lg py-2 px-4 mt-6 text-gray-100 font-bold tracking-winder">Add To Cart</x-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
