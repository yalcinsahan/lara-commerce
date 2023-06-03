<x-app-layout>

    <div class="grid sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-8 py-5">
        @foreach ($products as $product)
            <a class= " w-full cursor-pointer flex flex-col justify-between bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <img src="{{ $product->image }}" alt="" srcset="" class="flex-[4] object-cover overflow-hidden ">

                <div class="p-1 flex-[2] flex flex-col justify-between">
                    <div class="">
                        <h2 class="mt-2 font-bold">{{ $product->name }}</h2>
    
                        <span class="mt-2 line-clamp-3 text-sm">{{ substr($product->details,0,125).'...' }}</span>
                    </div>
    
                    <div class="flex justify-between mt-4">
                        <button class="cursor-pointer">ADD</button>
                        <span class="text-orange-600">
                            {{ '$ '.$product->price }}
                        </span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

</x-app-layout>
