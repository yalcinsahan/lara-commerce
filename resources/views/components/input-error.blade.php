<ul>
    @foreach ($errors as $error)
        <li class="text-sm text-red-700">
            {{ $error }}
        </li>
    @endforeach
</ul>