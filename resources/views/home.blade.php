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
                        <div class="p-6 bg-white border-b border-gray-200">
                            {{ $product->title }}
                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                {{ $product->description }}
                            </div>
                            <div>
                                {{ $product->price }}
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
{{--                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                    <div class="p-6 bg-white border-b border-gray-200">--}}
{{--                        Product Page--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                    <div class="p-6 bg-white border-b border-gray-200">--}}
{{--                        Product Page--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</x-app-layout>

