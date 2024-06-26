<x-layout>
    <h1 class="text-lg font-semibold text-left mb-4">Create Academic Session</h1>
    <div class="w-full p-5 text-gray-900 bg-white dark:text-white dark:bg-gray-800 rounded-xl pb-12 space-y-2">
        <h2 class="font-semibold text-left">Academic Session Datails</h2>
        <form method="POST" action="/sections" class="space-y-4">
            @csrf

            <x-row>
                <div class="basis-1/2">
                    <x-label for="start_date">Start date</x-label>
                    <x-input type="date" name="start_date" placeholder="Start Date" value="{{old('start_date')}}" />
                    @error('start_date')
                    <x-alert>{{$message}}</x-alert>
                    @enderror
                </div>
                <div class="basis-1/2">
                    <x-label for="end_date">End Date</x-label>
                    <x-input type="date" name="end_date" placeholder="End Date" value="{{old('end_date')}}" />
                    @error('end_date')
                    <x-alert>{{$message}}</x-alert>
                    @enderror
                </div>
            </x-row>

            <x-row>
                <div class="basis-1/2">
                    <x-label for="session">Session</x-label>
                    <x-input type="text" name="session" placeholder="2024/2025" value="{{old('session')}}" />
                    @error('session')
                    <x-alert>{{$message}}</x-alert>
                    @enderror
                </div>
                <div class="basis-1/2">
                    <x-label for="semester">Semester</x-label>
                    <div>
                        <x-select name="semester" id="semester">
                            <x-option value="">-- select semester --</x-option>
                            <x-option value="first">First</x-option>
                            <x-option value="second">Second</x-option>
                        </x-select>
                    </div>
                    @error('semester')
                    <x-alert>{{$message}}</x-alert>
                    @enderror
                </div>
            </x-row>

            <x-row>
                <x-button type="submit" class="w-60">
                    Save
                </x-button>
                <x-link href="{{url()->previous()}}" class="w-60">
                    Back
                </x-link>
            </x-row>

        </form>
    </div>
</x-layout>