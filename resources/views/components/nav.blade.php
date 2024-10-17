<nav class="fixed w-full bg-[#4588FB] top-0 z-50">
    <div class="flex justify-between items-center h-20 text-center font-medium">
        <div class="flex items-center">
            <span class="flex iconify text-white text-5xl ml-10" data-icon="mdi:laravel" data-inline="false"></span>
            <a href="/" class="font-bold text-xl ml-2 text-white focus:outline-none">ContactApp</a>
        </div>
        <div class="flex space-x-8 mr-10">
            @if (request()->is('home'))
                <form action="/login" class="inline">
                    @csrf
                    <button type="submit" class="text-white font-semibold bg-red-500 px-6 py-2 rounded-lg hover:bg-red-600 hover:text-white">
                        Logout
                    </button>
                </form>
            @else
                <a href="/login" class="text-white font-semibold border border-white px-6 py-2 rounded-lg hover:bg-gray-300/50 hover:text-white">Login</a>
                <a href="/register" class="text-white font-semibold text-lg bg-yelPrimary px-6 py-2 rounded-lg hover:bg-yellow-500 hover:text-white">
                    Register
                </a>
            @endif
        </div>
    </div>
</nav>
