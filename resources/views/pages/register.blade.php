<x-app-layout>

    <div class="fixed w-screen h-screen top-0 flex flex-col justify-center items-center">
        <!--route methodu ile isimli route'lara gidilebilir-->
        <form action="{{ route('register') }}" method="POST" class="w-96">
            <!--csrf güvenlik açığını önleme amaçlı kullanılır-->
            @csrf

            <!--name-->
            <div>
                <label for="name" class="block font-medium text-sm text-gray-700">Name:</label>
                <input type="text"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-0 focus:border-gray-500"
                    id="name" name="name">
                <x-input-error :errors="$errors->get('name')"></x-input-error>

            </div>

            <!--email-->
            <div class="mt-4">
                <label for="email" class="block font-medium text-sm text-gray-700">Email:</label>
                <input type="text"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-0 focus:border-gray-500"
                    id="email" name="email">
                <x-input-error :errors="$errors->get('email')"></x-input-error>

            </div>

            <!--password-->
            <div class="mt-4">
                <label for="password" class="block font-medium text-sm text-gray-700">Password:</label>
                <input type="text"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-0 focus:border-gray-500"
                    id="password" name="password">
                <x-input-error :errors="$errors->get('password')"></x-input-error>

            </div>

            <!--confirm password-->
            <div class="mt-4">
                <label for="password_confirmation" class="block font-medium text-sm text-gray-700">Confirm
                    Password:</label>
                <input type="text"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-0 focus:border-gray-500"
                    id="password_confirmation" name="password_confirmation">
                <x-input-error :errors="$errors->get('password_confirmation')"></x-input-error>

            </div>

            <!--actions-->
            <div class="flex flex-row justify-between mt-4 items-center">
                <a href="{{ route('login') }}"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Already
                    Registered?</a>

                <button type="submit" class="block bg-black text-white px-4 py-2 rounded-xl">
                    Register
                </button>
            </div>

        </form>
    </div>

</x-app-layout>
