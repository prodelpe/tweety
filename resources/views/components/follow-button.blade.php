@unless(current_user()->is($user))
    <form method="POST" action="{{ route('follow', $user->username) }}">
        @csrf
        <button
            type="submit"
            class="bg-blue-500 rounded-lg border border-gray-300 py-2 px-4 text-white text-xs "
        >
            {{ current_user()->following($user) ? 'Unfollow me' : 'Follow Me' }}
        </button>
    </form>
@endunless
