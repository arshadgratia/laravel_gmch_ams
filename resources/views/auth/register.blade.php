<x-layout title="Register">
    <div class="w-full max-w-md m-auto h-full  flex flex-col    justify-center ">
        <form method="POST" action="{{route('register')}}">
            @csrf
            <x-dropdown-select id="countries" name="role"  for="role">
                <option selected>Choose a Role</option>
                <option value="professor">Professor</option>
                <option value="student">Student</option>


            </x-dropdown-select>

            <x-form-input
                name="name"
                type="name"
                id="name"
                placeholder="John Doe"
            >
                Name
            </x-form-input>
            <x-form-input
                name="email"
                type="email"
                id="email"
                placeholder="johndoe@example.com"
            >
                Email
            </x-form-input>

            <x-form-input
                 name="password"
                type="password"
                id="password"
                placeholder="password"

            >
                password

            </x-form-input>
            <div class="flex justify-around mt-4">
                <x-button
                    type="submit"

                >
                    Register
                </x-button>
            </div>
        </form>


    </div>


</x-layout>
