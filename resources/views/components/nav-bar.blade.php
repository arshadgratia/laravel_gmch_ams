<nav class="bg-blue w-full flex justify-around  ">
    <div class="w-full max-w-screen-2xl  flex justify-between ">

        <div class="flex m-2 ">
            <div class="flex items-center ">
                <h1 class="font-Italiana text-2xl  text-white">GMCH</h1>
            </div>
            <div class="mx-1 px-2 border border-cyan rounded-full py-0.5 flex items-center my-auto">
                <h1 class="text-cyan">ams</h1>
            </div>



        </div>


        <div class=" items-center hidden lg:flex">
            <x-nav-link href="{{ route('home') }}">
                Home
            </x-nav-link>
            <x-nav-link href="{{ route('student.dashboard') }}">
                Dashboard

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
                <form method="POST" action="{{route('logout')}}">
                    @csrf
                    <x-button class="text-sm hover:bg-red p-1" type="submit">
                        Logout
                    </x-button>
                </form>

            @endauth


        </div>


    </div>

</nav>
