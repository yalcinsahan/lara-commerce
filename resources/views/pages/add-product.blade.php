<x-app-layout>
    
    <form action="{{route('add-product')}}" method="post" enctype="multipart/form-data" 
    class="flex flex-col max-w-2xl m-auto mt-8 p-3">

        @csrf

        <span class="text-center text-green-500 w-full block">
            {{ session('status') }}
        </span>


        <input type="text" placeholder="name" name="name"
        class="rounded-lg mt-4">
        <x-input-error :errors="$errors->get('name')"></x-input-error>

        <textarea type="text" placeholder="details" name="details" rows="8"
        class="rounded-lg  mt-4"></textarea>
        <x-input-error :errors="$errors->get('details')"></x-input-error>

        <div class="flex flex-row items-center  mt-4">
            <div class="flex-[2]">
                <input type="file" name="image" class="">
        <x-input-error :errors="$errors->get('image')"></x-input-error>
            </div>

            <input class="flex-[1] rounded-lg" type="text" name="price" placeholder="price">
        </div>

        <button type="submit" class="bg-green-600 text-white rounded-full p-2  mt-4">ADD PRODUCT TO MARKET</button>

    </form>

</x-app-layout>