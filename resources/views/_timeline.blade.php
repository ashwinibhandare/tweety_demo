<div class="border border-gray-300 rounded-lg">
    @forelse($tweets as $tweet)
        @include('tweet.tweets')
    @empty
        <p class="p-4">No any tweets yet</p>
    @endforelse
        {{ $tweets->links()  }}
</div>
