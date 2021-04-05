<x-app>

    <div>
        <header class="relative mb-6">
            <div class="relative">
                <img
                    src="/images/default-profile-banner.jpg"
                    alt=""
                    class="w-full mb-2 rounded-xl"
                >

                <img
                    src="{{ $user->avatar }}"
                    alt=""
                    class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                    width="150"
                    style="left: 50%"
                >
            </div>

            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                    <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
                </div>

                <div class="flex">
                    @can('edit', $user)
                        <a href="{{ $user->path('edit') }}"
                            class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs"
                        >
                            Edit Profile
                        </a>
                    @endcan

                    <x-follow-button :user="$user"></x-follow-button>

                </div>

            </div>

            <p class="text-sm">
                Muchos pusimos nuestras vidas en stand by en un viaje apasionante para hacer más justo y mejor el país
                que
                amamos porque un día escuchamos a @PabloIglesias y supimos que seguirle era un imperativo histórico. Hoy
                sentimos lo mismo que entonces. Un orgullo, jefe. A ganar Madrid! ✊
            </p>

        </header>

        @include('_timeline', [
            'tweets' => $tweets
        ])

    </div>
</x-app>
