<x-app>
    <header style="position: relative">
        <div class="relative">
            <img src="/uploads/facebook-photo-post-size-banner12.png" class="mb-2">
            <img src="{{ $user->avatar }}" class="rounded-full mr-2 absolute bottom-0
transform -translate-x-1/2 translate-y-1/2"
                 style="width:150px;left: 50%;">
        </div>
        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name}}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex">
                @if(auth()->user()->is($user))
                    <a href="{{ $user->path('edit') }} "class="rounded-full border border-gray-300 py-4 px-2 text-black text-sm mr-2">Edit
                        Profile</a>
                @endif
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm mt-10">What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting
            industry
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a
            galley of type and scrambled it to make a type specimen book it has?</p>
    </header>
    @include('_timeline', [
    'tweets' => $tweets
    ])
</x-app>
