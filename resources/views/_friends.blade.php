<div class="bg-gray-200 border border-gray-300 rounded-lg py-4 px-6">
<h3 class="font-bold text-xl mb-4">friends</h3>
<ul>
    @forelse(auth()->user()->follows as $user)
        <li class="{{ $loop->last ? '' : 'mb-4'}}">
        <li class="mb-4">
            <div class="flex items-center text-sm">
                <a href="{{ $user->path() }}" class="flex item-center text-sm">
                    <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-2" width="40" height="40">
                </a>
                {{ $user->name }}
            </div>
        </li>
        </li>
    @empty
        <li>
            No any friends yet
        </li>
    @endforelse
</ul>
</div>
