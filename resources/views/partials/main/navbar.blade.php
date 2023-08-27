<nav class="w-full navbar bg-base-100 shadow max-w-8xl px-5 sticky top-0 z-40">
    <div class="container mx-auto px-4 lg:max-w-screen-xl flex justify-between">
        <div class="flex-1">
            <a href="{{ route('home') }}" class="btn btn-ghost normal-case text-xl">HOTEL<b>HEBAT</b></a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{ route('home') }}"
                        class="hidden md:inline-flex mx-5 {{ Request::routeIs('home') ? 'btn btn-active btn-outline' : '' }}">Home</a>
                </li>
                <li><a href="{{ route('room') }}"
                        class="hidden md:inline-flex mx-5 {{ Request::routeIs('room') ? 'btn btn-active btn-outline' : '' }}">Room</a>
                </li>
                <li><a href="{{ route('facilities') }}"
                        class="hidden md:inline-flex mx-5 {{ Request::routeIs('facilities') ? 'btn btn-active btn-outline' : '' }}">Facilities</a>
                </li>
            </ul>
        </div>
        <div class="md:hidden">
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </label>
                <ul class="menu menu-horizontal dropdown-content mt-16 p-2 shadow bg-base-100 rounded-box">
                    <li class="px-2"><a href="{{ route('home') }}"
                            class="{{ Request::routeIs('home') ? 'btn btn-active btn-outline' : '' }}">Home</a></li>
                    <li class="px-2"><a href="{{ route('room') }}"
                            class="{{ Request::routeIs('room') ? 'btn btn-active btn-outline' : '' }}">Room</a></li>
                    <li class="px-2"><a href="{{ route('facilities') }}"
                            class="{{ Request::routeIs('facilities') ? 'btn btn-active btn-outline' : '' }}">Facilities</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
