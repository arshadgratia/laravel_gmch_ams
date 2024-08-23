<nav class="bg-blue w-full flex justify-around sticky top-0 z-10   ">
    <div class="w-full max-w-screen-2xl  flex justify-between ">

        <div class="flex m-2 ">
            <div class="flex items-center ">
                <h1 class="font-Italiana text-2xl  text-white">GMCH</h1>
            </div>
            <div class="flex items-center">
                <form method="GET" action="/">
                    <x-button type="submit"
                              class=" text-md font-light border-cyan  border px-3 rounded-3xl text-cyan-dark ">AMS
                    </x-button>


                </form>
            </div>


        </div>


        <div class="lg:hidden flex items-center justify-between">
            <x-nav-link href="{{ route('home') }}">
                Home
            </x-nav-link>
            <button id="menu-toggle" class="text-cyan-dark p-2 rounded-md focus:outline-none">
                <!-- Menu Icon (Hamburger) -->
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

        <!-- Menu Links -->
        <div id="menu-links" class="hidden lg:flex flex-col lg:flex-row items-center mt-2 lg:mt-0 lg:space-x-4">
            <x-nav-link href="{{ route('home') }}">
                Home
            </x-nav-link>

            @guest
                <x-nav-link href="{{ route('register') }}">
                    Register
                </x-nav-link>
                <x-nav-link href="{{ route('login') }}">
                    Login
                </x-nav-link>
            @endguest

            @auth
                @if(Auth::user()->role == 'student')
                    <x-nav-link href="{{ route('student.dashboard') }}">
                        Dashboard
                    </x-nav-link>
                @endif

                @if(Auth::user()->role == 'professor')
                    <x-nav-link href="{{ route('professor.students') }}">
                        Students
                    </x-nav-link>
                    <x-nav-link href="{{route('professor.all.activities')}}">
                        Activities
                    </x-nav-link>
                @endif

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-button class="text-sm bg-cyan-dark hover:bg-red px-3 py-2 rounded-2xl" type="submit">
                        Logout
                    </x-button>
                </form>
            @endauth
        </div>

    </div>

</nav>
