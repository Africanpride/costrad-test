<div>
    <div class="col-span-12 ">
        <table class=" w-full text-sm dark:text-gray-400 shadow ">
            <thead class="bg-gray-500 dark:bg-gray-900 text-gray-100 text-xs uppercase font-medium">
                <tr>

                    <th scope="col" class="px-6 py-3 text-left tracking-wider  rounded-tl-lg">
                        Faculty
                    </th>
                    <th scope="col" class="px-6 py-3 text-left tracking-wider">
                        Status
                    </th>

                    <th scope="col" class="px-6 py-3 text-left tracking-wider  hidden md:table-cell">
                        Age
                    </th>

                    <th scope="col" class="px-6 py-3 text-left tracking-wider  rounded-tr-lg">
                        DateTime
                    </th>
                </tr>
            </thead>
            <tbody class="bg-gray-200 dark:bg-gray-800  font-semibold">

                <tr>

                    <td class="flex justify-start px-4 items-center py-4 whitespace-nowrap  ">
                        <img class="w-10 rounded-full" src="{{ Auth::user()?->profile_photo_url }}" alt="">
                        <span class="ml-2">{{ Auth::user()?->full_name }}</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-4 h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="green">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </td>


                    <td class="px-6 py-4 whitespace-nowrap hidden md:table-cell">
                        34
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ now() }}
                    </td>

                </tr>

            </tbody>
        </table>

    </div>

    <div class="flex justify-start items-center gap-6 my-4 dark:text-white text-xs">
        <div class="flex justify-start items-center">
            <div class="pr-2">
                Pending
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class=" h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="gray">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
        </div>
        <div class="flex justify-start items-center">
            <div class="pr-2">
                Approved
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class=" h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="green">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
        </div>
        <div class="flex justify-start items-center">
            <div class="pr-2">
                Declined
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class=" h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="red">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
        </div>
    </div>
</div>
