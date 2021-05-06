<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if($orders->count())
                    @foreach($orders as $order)
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mb-4">
                            <div class="font-semibold mb-2">Order #{{ $order->id }}</div>

                            <div class="mb-2">
                                @foreach($order->products as $product)
                                    <div>{{ $product->title }}</div>
                                @endforeach
                            </div>

                            <div>
                                Total: @money($order->total())
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

