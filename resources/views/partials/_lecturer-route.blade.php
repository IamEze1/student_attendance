<li>
    <a href="/lectures" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-[#15ACD9] hover:text-white group {{ request()->is('lectures') ? 'bg-[#15ACD9] text-white' : ''}}">
        <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-white {{ request()->is('lectures') ? 'bg-[#15ACD9] text-white' : ''}}" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.1601 10.87C12.0601 10.86 11.9401 10.86 11.8301 10.87C9.45006 10.79 7.56006 8.84 7.56006 6.44C7.56006 3.99 9.54006 2 12.0001 2C14.4501 2 16.4401 3.99 16.4401 6.44C16.4301 8.84 14.5401 10.79 12.1601 10.87Z M7.15997 14.56C4.73997 16.18 4.73997 18.82 7.15997 20.43C9.90997 22.27 14.42 22.27 17.17 20.43C19.59 18.81 19.59 16.17 17.17 14.56C14.43 12.73 9.91997 12.73 7.15997 14.56Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>

        <span class="ml-3">Lectures</span>
    </a>
</li>
<x-list :data=$attendances>
    <x-list-item label="Attendance">
    <path d="M8 2V5 M16 2V5 M3.5 9.08997H20.5 M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z M15.6947 13.7H15.7037 M15.6947 16.7H15.7037 M11.9955 13.7H12.0045 M11.9955 16.7H12.0045 M8.29431 13.7H8.30329 M8.29431 16.7H8.30329" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
    </x-list-item>
    <x-list-card>
        <x-list-card-item label="View Class Attendance" link="/attendances" />
    </x-list-card>
</x-list>