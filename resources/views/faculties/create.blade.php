<x-layout>
    <h1 class="text-lg font-semibold text-left mb-4">Create Faculty</h1>
    <div class="w-full p-5 text-gray-900 bg-white dark:text-white dark:bg-gray-800 rounded-xl pb-12 space-y-2">
        <h2 class="font-semibold text-left">Faculty Datails</h2>
        <form method="POST" action="/faculties" class="space-y-4">
            @csrf

            <div class="w-full">
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Faculty Name</label>
                <input type="text" name="name" placeholder="Enter Faculty Name" value="{{old('name')}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-400 sm:text-sm sm:leading-6" />
                @error('name')
                <x-alert>{{$message}}</x-alert>
                @enderror
            </div>

            <div class="mx-auto flex flex-row items-center justify-between space-x-2">
                <button type="submit" class="flex w-60 justify-center rounded-md bg-sky-400 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-400">
                    Save
                </button>
                <a href="/faculties/manage" class="flex w-60 justify-center rounded-md bg-sky-400 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-400">
                    Back
                </a>
            </div>
        </form>
    </div>
</x-layout>