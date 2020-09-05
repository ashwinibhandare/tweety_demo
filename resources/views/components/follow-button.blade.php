@unless (auth()->user()->is($user))
    <form method="post" action="{{ route('follow', $user->username)}}">
        @csrf
        <button type="submit"
                class="rounded-full bg-blue-500 rounded-lg shadow py-4 px-2 text-white text-sm ">

            {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
        </button>
    </form>
@endunless
