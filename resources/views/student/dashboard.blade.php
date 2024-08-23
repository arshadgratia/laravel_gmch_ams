<x-layout title="Dashboard">
    <div class=" flex items-center max-w-screen-2xl   justify-between w-full py-2 mx-2">
        <h1 class="text-xl flex font-semibold text-blue ml-2">
            <x-fas-filter class="w-4 mr-2 text-lighter-blue"/>
            Filters
        </h1>
        <div>
            <form method="GET" action="/add">
                <x-button type="submit" class=" text-white px-4 py-2 bg-cyan-dark rounded-3xl">Add</x-button>
            </form>
        </div>
    </div>


    <div class="grid  grid-cols-4 max-w-screen-2xl    w-full ">
        <div class=" max-sm:hidden p-3 rounded-3xl">
            <form method="GET" action="{{ route('student.dashboard') }}">


                <x-form-input
                    name="search"
                    type="text"
                    id="search"
                    placeholder="Search"

                >
                    Search
                </x-form-input>
                <div class="m-2">
                    <label for="type" id="type" class="block font-medium text-cyan-dark">Select type</label>
                    <select name="type" id='type'
                            class="mt-2   w-full p-3 text-lg font-semibold text-light-blue  rounded-md border border-cyan shadow-[0_5px_5px_rgba(118,171,174,100)] ease-in-out duration-300 outline-none focus:shadow-[0_10px_10px_rgba(118,171,174,100)] focus:border-cyan">
                        <option disabled selected>Choose an activity</option>
                        <option value="lecture">Lecture</option>
                        <option value="seminar">Seminar</option>
                        <option value="group_discussion">Group Discussion</option>
                        <option value="presentation">Presentation</option>
                        <option value="research_work">Research Work</option>
                        <option value="grand_round">Grand Round</option>
                        <option value="graded_responsibility">Graded Responsibility</option>
                        <option value="elog_book">E-log Book</option>
                    </select>
                </div>


                <div class="w-full flex justify-around">
                    <x-button type="submit" class="p-2 px-3 rounded-md bg-cyan-dark text-white">
                        Search
                    </x-button>
                </div>


            </form>

        </div>
        <div class="col-span-3 max-sm:col-span-4">
            <div
                class="max-w-screen-2xl    w-full grid grid-cols-3 gap-4 md:grid-cols-2 lg:grid-cols-3  max-sm:grid-cols-1 px-2">

                @foreach($activities as $activity)
                    @if($activity->attachment_path)

                        <x-activity-card user="{{$activity->user->name}}" id="{{$activity->id}}"
                                         :fileUrl="route('activities.download', ['id' => $activity->id])"
                                         name="{{ $activity->formatted_type }}"
                                         date="{{ $activity->created_at->format('jS, F, Y') }}">{{$activity->description}}</x-activity-card>
                    @else
                        <x-activity-card user="{{$activity->user->name}}" id="{{$activity->id}}"

                                         name="{{ $activity->formatted_type }}"
                                         date="{{ $activity->created_at->format('jS, F, Y') }}">{{$activity->description}}</x-activity-card>

                    @endif
                @endforeach

            </div>
            <div class="p-5 m-5">
                {{$activities->onEachSide(5)->links()}}
            </div>
        </div>
    </div>


</x-layout>
