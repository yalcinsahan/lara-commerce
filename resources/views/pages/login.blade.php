<x-app-layout>

    <div class="fixed w-screen h-screen top-0 flex flex-col justify-center items-center">
        <!--route methodu ile isimli route'lara gidilebilir-->
        <form action="{{ route('login') }}" method="POST" class="w-96">
            <!--csrf güvenlik açığını önleme amaçlı kullanılır-->
            @csrf

            <!--email-->
            <div class="mt-4">
                <label for="email" class="block font-medium text-sm text-gray-700">Email:</label>
                <input type="email"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-0 focus:border-gray-500"
                    id="email" name="email" required>
                <ul>
                    @foreach ($errors->get('email') as $emailError)
                        <li class="text-sm text-red-700">
                            {{ $emailError }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <!--password-->
            <div class="mt-4">
                <label for="password" class="block font-medium text-sm text-gray-700">Password:</label>
                <input type="text"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-0 focus:border-gray-500"
                    id="password" name="password" type="password" required>
                <ul>
                    @foreach ($errors->get('password') as $passwordError)
                        <li class="text-sm text-red-700">
                            {{ $passwordError }}
                        </li>
                    @endforeach
                </ul>
            </div>

             <!-- remember me -->
             <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-transparent" name="remember">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <!--actions-->
            <div class="flex flex-row justify-end mt-2 items-center">

                <button type="submit" class="block bg-black text-white px-4 py-2 rounded-xl">
                    Login
                </button>
            </div>

        </form>
    </div>

</x-app-layout>
