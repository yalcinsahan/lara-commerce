<nav class="flex justify-between items-center bg-black text-white p-3 sticky z-50">
    <a href="{{ route('home') }}" class="">
        Home
    </a>

    <div>
        @auth
        <form action="{{route('logout')}}" method="POST">
            @csrf
        <a href="{{ route('add-product') }}" class="mr-3">Add Product</a>
            <button type="submit">Logout</button>
        </form>
        @else
        <a href="{{ route('login') }}" class="mr-3">Login</a>
        <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
</nav>
