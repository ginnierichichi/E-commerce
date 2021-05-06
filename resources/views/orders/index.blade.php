<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                @if($orders->count())
                    @foreach($orders as $order)
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mb-4">
                            <div class="font-semibold mb-2">Order #{{ $order->id }}</div>

                            <div class="mb-2 ">
                                @foreach($order->products as $product)
                                    <div class="flex items-center mb-4">
                                        <img src="{{ asset('images/'.$product->image) }}" alt="" width="100px">
                                        <div class="px-3">{{ $product->title }} </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="flex items-center justify-between">
                                <span>Total: @money($order->total())</span>

                                <a href="{{ route('products.download.show', $order) }}" class="hover:text-indigo-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="m-4">You have no orders</div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

