<x-app>

    <form method="POST" action="{{ $user->path() }}">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="name">
                Name
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="text"
                   name="name"
                   id="name"
                   value={{ $user->name }}
                       required
            >
        </div>

        @error('name')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="username">
                Username
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="text"
                   name="username"
                   value={{ $user->username }}
                       id="username"
                   required
            >
        </div>

        @error('username')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror


        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="avatar">
                Avatar
            </label>

            <div class="flex">
                <input class="border border-gray-400 p-2 w-full"
                       type="file"
                       name="avatar"
                       value={{ $user->avatar }}
                           id="avatar"
                >
                <img src="{{ $user->avatar }}" alt="Avatar" width="40"/>
            </div>
        </div>

        @error('avatar')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="email">
                Email
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="email"
                   name="email"
                   value={{ $user->email }}
                       id="email"
                   required
            >
        </div>

        @error('email')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror


        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="password">
                Password
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="password"
                   name="password"
                   id="password"
                   required
            >
        </div>

        @error('password')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="password_confirmation">
                Password Confirmation
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="password"
                   name="password_confirmation"
                   id="password_confirmation"
                   required
            >
        </div>

        @error('password_confirmation')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror

        <div class="mb-6">
            <button type="submit"
                    clasS="bg-blue-400 text-white rounded oy-2 px-4 hover:bg-blue-500">
                Submit
            </button>
        </div>

    </form>

</x-app>
