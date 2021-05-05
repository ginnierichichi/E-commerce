<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cart') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(optional(optional($cart)->products)->count())
                       @foreach($cart->products as $product)
                           <div class="mb-4 pb-4 border-b">
                               <div class="flex items-baseline justify-between ">
                                   <div class="flex items-center space-x-4">
                                       <img src="{{ asset('images/'.$product->image) }}" alt="" width="120px">
                                       <div>
                                           <div>{{ $product->title }}</div>
                                           <div>@money($product->price)</div>
                                       </div>
                                   </div>
                                  <div>
                                      <form action="{{ route('products.destroy', $product) }}" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <button>remove</button>
                                      </form>
                                  </div>
                               </div>
                           </div>
                        @endforeach

                        <div class="mt-4 flex justify-end">
                            <div>Cart Total: @money($cart->total())</div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('checkout.index') }}" class="bg-green-500 rounded-lg shadow-lg px-4 py-2 text-gray-100 font-bold tracking-wider">CHECK OUT</a>
                        </div>
                    @else
                        <p>Your cart  is empty</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
