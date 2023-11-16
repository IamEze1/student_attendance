<x-layout>
  <h1 class="text-lg font-semibold">View Class Attendance</h1>
  <div class="w-full flex flex-col p-5 my-4 rounded-lg text-gray-900 bg-white space-y-2 dark:text-white dark:bg-gray-800">
    <h2 class="font-bold">
      View Class Attendance
    </h2>
    <form action="" class="space-y-2">
      <label for="date" class="block text-sm font-medium leading-6 text-gray-900">Select Date</label>
      <div id="daterange" class="w-auto md:w-80 flex space-x-2 rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-400 sm:text-sm sm:leading-6">
        <span></span>
        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-sky-500 dark:group-hover:text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M8 2V5 M16 2V5 M3.5 9.08997H20.5 M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z M15.6947 13.7H15.7037 M15.6947 16.7H15.7037 M11.9955 13.7H12.0045 M11.9955 16.7H12.0045 M8.29431 13.7H8.30329 M8.29431 16.7H8.30329" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </div>
      <button type="submit" class="flex justify-center rounded-md bg-sky-400 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-400">View Attendance</button>
    </form>

  </div>

  <div class="relative bg-white p-3 space-y-4 shadow-md rounded-lg space-y-4">
    <h2 class="font-semibold text-left">
      Class Attendance
    </h2>
    {{ $dataTable->table() }}
  </div>

  @push('scripts')
  {{ $dataTable->scripts() }}
  @endpush
</x-layout>
<script type="text/javascript">
  $(function() {

    var start_date = moment().subtract(1, 'M');

    var end_date = moment();

    $('#daterange span').html(start_date.format('MMMM D, YYYY') + ' - ' + end_date.format('MMMM D, YYYY'));
    $('.applyBtn').css('bg-blue');
    $('#daterange').daterangepicker({
      startDate: start_date,
      endDate: end_date,
      applyButtonClasses: "rounded-sm text-white bg-sky-400 hover:bg-sky-500"
    }, function(start_date, end_date) {
      $('#daterange span').html(start_date.format('MMMM D, YYYY') + ' - ' + end_date.format('MMMM D, YYYY'));

      let d = "?from_date=" + start_date.format('YYYY-MM-DD') + "&" + "to_date=" + end_date.format('YYYY-MM-DD');
      window.location.href = d;
    });

  });
</script>