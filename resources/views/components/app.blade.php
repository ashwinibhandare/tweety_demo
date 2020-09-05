<x-master>
<section class="px-8">
    <main class="mx-auto">
        <div class="container">
            <div class="lg:flex lg:justify-between">
                <div class="lg:w-32">
                    @auth
                        @include('_sidebar')
                    @endauth
                </div>
                <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
                    {{ $slot }}
                </div>
                <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
                    @auth
                        @include('_friends')
                    @endauth
                </div>
            </div>
        </div>
    </main>
</section>
</x-master>
