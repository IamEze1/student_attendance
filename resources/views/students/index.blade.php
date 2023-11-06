<x-layout>
  <h1 class="text-lg font-semibold text-left mb-4">All Students</h1>
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="w-full flex items-center justify-between p-5 text-gray-900 bg-white dark:text-white dark:bg-gray-800">
      <span class="font-semibold text-left">
        All Students
      </span>
      <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
          </svg>
        </div>
        <form action="/students/manage/">
          <input type="search" id="search" class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 px-4 pl-10" placeholder="Search...">
        </form>
      </div>
    </div>
    @unless(count($students) == 0)
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">
            #
          </th>
          <th scope="col" class="px-6 py-3">
            First Name
          </th>
          <th scope="col" class="px-6 py-3">
            Last Name
          </th>
          <th scope="col" class="px-6 py-3">
            Other Name
          </th>
          <th scope="col" class="px-6 py-3">
            Reg Number
          </th>
          <th scope="col" class="px-6 py-3">
            Course Code
          </th>
          <th scope="col" class="px-6 py-3">
            Level
          </th>
          <th scope="col" class="px-6 py-3">
            <span>Attendance</span>
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach($students as $student)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            {{$loop->index + 1}}
          </th>
          <td class="px-6 py-4">
            {{$student['firstName']}}
          </td>
          <td class="px-6 py-4">
            {{$student['lastName']}}
          </td>
          <td class="px-6 py-4">
            {{$student['otherName']}}
          </td>
          <td class="px-6 py-4">
            {{$student['regNumber']}}
          </td>
          <td class="px-6 py-4">
            {{$student['code']}}
          </td>
          <td class="px-6 py-4">
            {{$student['level']}}
          </td>
          <td class="px-6 py-4">
            <a href="/students/{{$student['id']}}" class="text-sky-400 underline hover:text-sky-500">
              view attendance

            </a>
          </td>
        </tr>
        @endforeach
        @else
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <td colspan="8" class="flex-col px-6 py-4 text-center">
            <button class="text-gray-400">
              <svg class="flex-shrink-0 w-10 h-10 stroke-gray-500 transition duration-75 hover:stroke-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" d="M7.875 14.25l1.214 1.942a2.25 2.25 0 001.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 011.872 1.002l.164.246a2.25 2.25 0 001.872 1.002h2.092a2.25 2.25 0 001.872-1.002l.164-.246A2.25 2.25 0 0116.954 9h4.636M2.41 9a2.25 2.25 0 00-.16.832V12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 01.382-.632l3.285-3.832a2.25 2.25 0 011.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0021.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 002.25 2.25z" />
              </svg>
            </button>
            <p class="font-medium text-lg"> No Data</p>
          </td>
        </tr>
      </tbody>
    </table>
    @endunless
  </div>

</x-layout>