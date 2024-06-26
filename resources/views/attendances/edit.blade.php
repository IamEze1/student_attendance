<x-layout>
    <h1 class="text-lg font-semibold text-left mb-4">Edit Attendance</h1>
    <div class="w-full p-5 text-gray-900 bg-white dark:text-white dark:bg-gray-800 rounded-xl pb-12 space-y-2">
        <h2 class="font-semibold text-left">Attendance for {{$user[0]->firstName}} {{$user[0]->lastName}}</h2>
        <h3>Course: <strong>{{$course[0]->title}}</strong></h3>
        <h3>Code: <strong>{{$course[0]->code}}</strong></h3>
        <form method="POST" action="/attendances/{{$attendance->id}}" class="space-y-4">
            @csrf
            @method('PUT')
            <div class="w-full flex flex-row items-center justify-between space-x-4">
            <div class="basis-1/2">
                    <label for="date" class="block text-sm font-medium leading-6 text-gray-900">Date</label>
                    <input type="date" name="date" value="{{$attendance->date}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-400 sm:text-sm sm:leading-6" />
                    @error('date')
                    <x-alert>{{$message}}</x-alert>
                    @enderror
                </div>
                <div class="basis-1/2">
                    <label for="status" class="block text-sm font-medium leading-6 text-gray-900">Status</label>
                    <div>
                        <select name="status" id="status" class="block w-full rounded-md border-0 py-1.5 px-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-400 sm:text-sm sm:leading-6">
                            <option value="" class="hover:bg-sky-100">-- select status --</option>
                            <option class="hover:bg-sky-100" value="present" {{$attendance->status == "present" ? 'selected' : ''}}>Present</option>
                            <option class="hover:bg-sky-100" value="absent" {{$attendance->status == "absent" ? 'selected' : ''}}>Absent</option>
                        </select>
                    </div>
                    @error('status')
                    <x-alert>{{$message}}</x-alert>
                    @enderror
                </div>
                <input type="hidden" name="course" value="{{$course[0]->id}}">
            </div>

            <div class="mx-auto flex flex-row items-center justify-between space-x-2">
                <button type="submit" class="flex w-60 justify-center rounded-md bg-sky-400 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-400">
                    Save
                </button>
                <a href="/attendances/course/{{$course[0]->id}}" class="flex w-60 justify-center rounded-md bg-sky-400 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-400">
                    Back
                </a>
            </div>
        </form>
    </div>
</x-layout>