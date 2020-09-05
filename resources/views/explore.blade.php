<x-app>
    <div>
        @foreach( $users as $user)
            <div class="flex items-center mb-5">
                <div>
                    <a href="{{ $user->path() }}">
            <img src="{{ $user->avatar }}" width="60px" class="rounded-full">
                    </a>
                </div>
            <div>
                <h4 class="font-bold">{{ '@' . $user->name}}</h4>
            </div>
            </div>
        @endforeach
        {{ $users->links()  }}
    </div>
</x-app>
