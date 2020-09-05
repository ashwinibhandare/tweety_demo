

    <x-app>
        <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="mb-6">
                <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="border border-gray-300 p-2 w-full"
                           name="name" value="{{ $user->name }}" required  autofocus>

                    @error('name')
                    <span class="text-red-500 text-xs mt-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-6">
                <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>

                <div class="col-md-6">
                    <input id="username" type="text" class="border border-gray-300 p-2 w-full"
                           name="username" value="{{ $user->username }}" required  autofocus>

                    @error('username')
                    <span class="text-red-500 text-xs mt-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-6">
                <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="border border-gray-300 p-2 w-full"
                           name="email" value="{{ $user->email }}" required autofocus>

                    @error('email')
                    <span class="text-red-500 text-xs mt-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-6 flex">
                <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">Avatara</label>

                <div class="col-md-6">
                    <input id="avatar" type="file" class="border border-gray-300 p-2 w-full"
                           name="avatar" value="" required autofocus>

                    @error('avatar')
                    <span class="text-red-500 text-xs mt-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                </div>
                <img src="{{$user->avatar}}" width="40px">
            </div>

            <div class="mb-6">
                <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="border border-gray-300 p-2 w-full"
                           name="password" value="" required>

                    @error('password')
                    <span class="text-red-500 text-xs mt-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-6">
                <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">Confirm Password</label>

                <div class="col-md-6">
                    <input id="password_confirmation" type="password" class="border border-gray-300 p-2 w-full"
                           name="password_confirmation" value="" required autocomplete="password" autofocus>

                    @error('password_confirmation')
                    <span class="text-red-500 text-xs mt-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                </div>
            </div>




            <div class="form-group row mb-0">
                <div class="col-md-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </x-app>
