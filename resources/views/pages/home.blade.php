<x-app-layout>
    <div class="grid grid-cols-3 gap-3">
        @foreach ($products as $product)
            <div class="bg-yellow-300">
                {{ $product->name }}
            </div>
        @endforeach
    </div>

    <h1>
        @auth
            {{ Auth::user()->name }}

        @else
         Guest session    
        @endauth
    </h1>
</x-app-layout>



