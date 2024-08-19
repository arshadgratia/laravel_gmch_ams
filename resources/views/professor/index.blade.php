<x-layout title="Dashboard">
    <div class=" flex items-center max-w-screen-2xl   justify-between w-full py-2 mx-2">
        <h1 class="text-xl flex font-semibold text-blue ml-2">
            <x-fas-filter class="w-4 mr-2 text-lighter-blue"/>
            Filters
        </h1>
        <div>
            <form method="GET" action="/">
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
                        <option selected value="">All Activities</option>
                        <option value="act1">Ac1</option>
                        <option value="act2">Ac2</option>
                        <option value="act3">Ac3</option>
                        <option value="act4">Ac4</option>
                        <option value="act5">Ac5</option>
                        <option value="act6">Ac6</option>
                        <option value="act7">Ac7</option>
                        <option value="act8">Ac8</option>
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


            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Age</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Address</th>
                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">John Brown</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">45</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">New York No. 1 Lake Park</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                    </td>
                                </tr>

                                <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Jim Green</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">27</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">London No. 1 Lake Park</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                    </td>
                                </tr>

                                <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Joe Black</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">31</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">Sidney No. 1 Lake Park</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                    </td>
                                </tr>

                                <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Edward King</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">16</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">LA No. 1 Lake Park</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                    </td>
                                </tr>

                                <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Jim Red</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">45</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">Melbourne No. 1 Lake Park</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-5 m-5">
                {{$students->onEachSide(5)->links()}}
            </div>
        </div>
    </div>


</x-layout>
