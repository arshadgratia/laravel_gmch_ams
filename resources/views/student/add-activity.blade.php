<x-layout
    title="Add Activity"
>
    <div class="w-full max-w-md m-auto h-full  flex flex-col    justify-center ">
        <form method="POST" action="{{route('student.add-activity')}}">


            @csrf
            <x-dropdown-select id="type" name="type"  for="type">

                <option selected >Choose an activity</option>
                <option value="act1">Act1</option>
                <option value="act2">Act2</option>
                <option value="act3">Act3</option>
                <option value="act4">Act4</option>
                <option value="act5">Act5</option>
                <option value="act6">Act6</option>
                <option value="act7">Act7</option>
                <option value="act8">Act8</option>




            </x-dropdown-select>
            <x-form-error name="type"></x-form-error>
            <x-form-textfield placeholder="Describe" rows="4" name="description" id="description">Add description</x-form-textfield>

            <x-form-error name="description"></x-form-error>

            <input class="hidden"  name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">

            <div class="flex justify-around mt-4">
                <x-button
                    type="submit" class="bg-cyan-dark text-white px-6 p-3 rounded-md"

                >
                    Add
                </x-button>
            </div>
        </form>


    </div>
</x-layout>
