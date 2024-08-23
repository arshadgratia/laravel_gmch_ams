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


        <div class=" items-center hidden lg:flex">
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
                        <x-nav-link href="{{route('professor.all.activities')}}">Activities</x-nav-link>
                    @endif
                <form method="POST" action="{{route('logout')}}">
                    @csrf
                    <x-button class="text-sm bg-cyan-dark hover:bg-red px-3 py-2 rounded-2xl" type="submit">
                        Logout
                    </x-button>
                </form>

            @endauth


        </div>


    </div>

</nav>
