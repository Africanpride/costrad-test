<div>
    <div class="px-4 pb-2 pt-4 grid grid-cols-1 md:grid-cols-3 gap-4">

        <div class="col-span-full md:col-span-1  space-y-4">
            <div
                class="dark:border-gray-700/10  border-gray-500/10 rounded-2xl h-36 bg-gray-200/50   dark:bg-gray-950 dark:text-white p-6   shadow flex flex-col justify-between  ">
                <div class="text-slate-800 dark:text-white capitalize flex-none text-lg font-['anton'] tracking-wider">
                    Institute
                    Details</div>
                <div class="flex justify-between items-center">
                    <div class="capitalize flex-none text-lg font-semibold dark:text-white">
                        <span class="text-2xl  ">
                            <span
                                class=" text-slate-700 dark:text-slate-200">{{ $this->pastInstitutes() }}/{{ $institutes->count() }}<span
                                    class="text-2xl"></span> </span>

                        </span>
                    </div>
                    <div>
                        <x-lucide-landmark class="w-12 h-12 dark:text-firefly-500  text-firefly-500/80" />
                    </div>
                </div>
                <div class="flex w-full h-2 bg-gray-300/50 rounded-full overflow-hidden dark:bg-gray-700">
                    <div class="flex overflow-hidden bg-firefly-700 dark:bg-firefly-500" role="progressbar"
                        style="width: {{ ($this->pastInstitutes() / $institutes->count()) * 100 }}%"
                        aria-valuenow="{{ ($this->pastInstitutes() / $institutes->count()) * 100 }}" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
            </div>
            <div
                class="dark:border-gray-700/10  border-gray-500/10 rounded-2xl h-36 bg-gray-200/50   dark:bg-gray-950 dark:text-white p-6   shadow flex flex-col justify-between  ">
                <div class="text-slate-800 dark:text-white capitalize flex-none text-lg font-['anton'] ">
                    Total Transactions</div>
                <div class="flex justify-between items-center">
                    <div class="capitalize flex-none text-lg font-semibold dark:text-white">
                        <div class=" text-xl gap-x-2 ">
                            <span class=" text-slate-700 dark:text-slate-200">
                                {{ 'GHS ' . number_format(App\Models\Transaction::sum('amount') / 100, 2, '.', ',') }}
                            </span>

                        </div>
                    </div>
                    <div>
                        <x-lucide-banknote class="w-12 h-12 dark:text-firefly-500  text-firefly-500/80" />
                    </div>
                </div>
                <div class="text-sm tracking-tight">
                    <span class="font-bold">Latest: {{ App\Models\Transaction::latestFormattedAmount() }}</span>
                </div>
            </div>

        </div>
        <div class="col-span-full md:col-span-2">

            <div
                class="bg-indigo-800 flex flex-col h-full justify-between overflow-hidden p-6 relative rounded-2xl shadow-lg">
                <!-- Illustration -->
                <svg class="absolute top-0 right-0" width="158" height="119" aria-hidden="true">
                    <defs>
                        <linearGradient x1="50%" y1="0%" x2="50%" y2="96.22%" id="a">
                            <stop stop-color="#818CF8" stop-opacity=".88" offset="0%"></stop>
                            <stop stop-color="#818CF8" stop-opacity=".24" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <g transform="translate(-719 -96)" stroke="url(#a)" fill="none" fill-rule="evenodd">
                        <path
                            d="M802.959 69.706c.987-31.014 27.104-55.35 58.333-54.356 31.23.994 55.747 26.94 54.76 57.954-.987 31.013-27.103 55.349-58.333 54.356-31.23-.994-55.747-26.94-54.76-57.954Z">
                        </path>
                        <path
                            d="M859.16 15.329c32.617-.2 59.212 24.794 59.4 55.824.19 31.028-26.097 56.343-58.714 56.543-32.617.2-59.212-24.793-59.4-55.823-.19-31.03 26.097-56.346 58.714-56.544Z">
                        </path>
                        <path
                            d="M857.026 15.367c34.01-1.498 62.687 22.421 64.052 53.424 1.366 31.003-25.097 57.35-59.107 58.847-34.01 1.5-62.688-22.419-64.053-53.422-1.366-31.004 25.098-57.35 59.108-58.849Z">
                        </path>
                        <path
                            d="M854.918 15.477c35.407-2.907 66.167 19.823 68.708 50.768 2.54 30.945-24.105 58.386-59.51 61.292-35.407 2.906-66.169-19.825-68.708-50.769-2.54-30.945 24.104-58.386 59.51-61.291Z">
                        </path>
                        <path
                            d="M852.8 15.648c36.79-4.42 69.62 17.006 73.326 47.858 3.707 30.85-23.113 59.445-59.903 63.865-36.789 4.42-69.618-17.006-73.325-47.857-3.707-30.852 23.112-59.446 59.902-63.866Z">
                        </path>
                        <path
                            d="M850.69 15.868c38.154-6.045 73.03 13.966 77.9 44.696 4.869 30.731-22.113 60.543-60.267 66.588-38.154 6.046-73.031-13.966-77.9-44.695-4.87-30.73 22.113-60.544 60.267-66.589Z">
                        </path>
                        <path
                            d="M848.59 16.119c39.488-7.784 76.386 10.699 82.415 41.282 6.028 30.584-21.095 61.686-60.582 69.47-39.487 7.785-76.385-10.698-82.414-41.282-6.028-30.583 21.095-61.686 60.582-69.47Z">
                        </path>
                        <path
                            d="M846.5 16.415c40.78-9.629 79.663 7.223 86.845 37.641 7.182 30.418-20.054 62.882-60.836 72.511-40.78 9.63-79.663-7.222-86.845-37.639-7.183-30.418 20.054-62.883 60.835-72.513Z">
                        </path>
                        <path
                            d="M844.42 16.764c42.027-11.578 82.85 3.548 91.18 33.786 8.33 30.238-18.986 64.136-61.013 75.714-42.028 11.58-82.85-3.547-91.18-33.786-8.332-30.237 18.986-64.136 61.013-75.714Z">
                        </path>
                        <path
                            d="M842.337 17.103c43.206-13.639 85.917-.342 95.4 29.697 9.48 30.04-17.858 65.449-61.064 79.086-43.205 13.638-85.917.34-95.399-29.698-9.48-30.04 17.857-65.448 61.063-79.085Z">
                        </path>
                        <path
                            d="M840.262 17.483c44.315-15.792 88.857-4.409 99.49 25.424 10.632 29.835-16.674 66.822-60.989 82.614-44.314 15.792-88.857 4.41-99.489-25.425-10.632-29.833 16.674-66.82 60.988-82.613Z">
                        </path>
                        <path
                            d="M838.159 17.875c45.333-18.039 91.636-8.653 103.42 20.963 11.786 29.616-15.411 68.248-60.744 86.287-45.333 18.04-91.636 8.653-103.421-20.963-11.785-29.617 15.412-68.248 60.745-86.287Z">
                        </path>
                        <path
                            d="M836.07 18.28C882.332-2.098 930.33 5.214 943.278 34.61c12.948 29.396-14.06 69.744-60.321 90.12-46.262 20.376-94.261 13.065-107.208-16.332-12.948-29.395 14.059-69.744 60.32-90.12Z">
                        </path>
                        <path
                            d="M833.941 18.697C881.02-4.093 930.63 1.079 944.748 30.246c14.12 29.167-12.6 71.285-59.679 94.075-47.079 22.788-96.689 17.618-110.807-11.55-14.119-29.167 12.601-71.285 59.68-94.074Z">
                        </path>
                        <path
                            d="M831.784 19.112c47.775-25.274 98.913-22.307 114.22 6.626 15.305 28.934-11.016 72.878-58.79 98.151-47.776 25.275-98.914 22.308-114.22-6.626-15.307-28.933 11.015-72.877 58.79-98.15Z">
                        </path>
                        <path
                            d="M829.594 19.545C877.94-8.273 930.518-7.561 947.03 21.135c16.512 28.697-9.295 74.51-57.64 102.329-48.347 27.818-100.925 27.106-117.437-1.59s9.295-74.511 57.641-102.33Z">
                        </path>
                        <path
                            d="M827.381 19.982c48.786-30.418 102.72-32.005 120.463-3.546 17.745 28.46-7.42 76.19-56.205 106.607-48.785 30.418-102.719 32.004-120.463 3.545-17.745-28.459 7.42-76.189 56.205-106.606Z">
                        </path>
                        <path
                            d="M825.097 20.42c49.073-33.056 104.261-36.981 123.266-8.768 19.006 28.214-5.368 77.884-54.44 110.94-49.073 33.057-104.262 36.98-123.267 8.767-19.005-28.213 5.37-77.883 54.441-110.94Z">
                        </path>
                        <path
                            d="M822.745 20.865c49.202-35.722 105.546-42.014 125.847-14.052 20.3 27.961-3.129 79.587-52.331 115.31-49.204 35.721-105.547 42.013-125.847 14.052-20.301-27.962 3.129-79.588 52.331-115.31Z">
                        </path>
                        <path
                            d="M820.333 21.349c49.18-38.398 106.585-47.066 128.217-19.36 21.632 27.707-.7 81.295-49.88 119.693-49.18 38.398-106.585 47.065-128.217 19.359-21.632-27.706.7-81.294 49.88-119.692Z">
                        </path>
                        <path
                            d="M817.836 21.827C866.822-19.256 925.189-30.318 948.2-2.879c23.013 27.44 1.957 82.988-47.03 124.071-48.984 41.084-107.351 52.146-130.364 24.706-23.012-27.438-1.957-82.987 47.029-124.07Z">
                        </path>
                        <path
                            d="M815.25 22.327C863.87-21.434 923.1-34.891 947.544-7.733c24.446 27.16 4.847 84.653-43.774 128.414-48.62 43.76-107.852 57.218-132.296 30.059-24.445-27.16-4.847-84.652 43.774-128.413Z">
                        </path>
                        <path
                            d="M812.554 22.866c48.081-46.41 108.08-62.255 134.01-35.391 25.93 26.865 7.974 86.265-40.106 132.675-48.08 46.41-108.079 62.255-134.009 35.39-25.93-26.864-7.976-86.264 40.105-132.674Z">
                        </path>
                        <path
                            d="M809.746 23.436C857.107-25.59 917.78-43.81 945.26-17.261c27.48 26.548 11.362 87.811-35.997 136.837C861.9 168.6 801.229 186.82 773.749 160.272c-27.48-26.548-11.364-87.813 35.997-136.837Z">
                        </path>
                        <path
                            d="M806.816 24.042C853.278-27.55 914.533-48.13 943.634-21.923c29.099 26.206 15.026 89.275-31.436 140.867-46.462 51.593-107.717 72.172-136.818 45.966-29.1-26.206-15.026-89.276 31.436-140.868Z">
                        </path>
                        <path
                            d="M803.75 24.729c45.389-54.088 107.145-76.99 137.935-51.152 30.79 25.838 18.955 90.63-26.434 144.719-45.39 54.089-107.145 76.99-137.935 51.152-30.79-25.838-18.955-90.631 26.434-144.72Z">
                        </path>
                        <path
                            d="M800.547 25.454c44.137-56.52 106.318-81.724 138.885-56.293 32.567 25.431 23.187 91.868-20.95 148.388-44.137 56.522-106.317 81.725-138.884 56.293-32.567-25.43-23.188-91.867 20.949-148.388Z">
                        </path>
                        <path
                            d="M797.176 26.272c42.708-58.86 105.237-86.324 139.663-61.345 34.426 24.98 27.712 92.944-14.996 151.803-42.708 58.86-105.237 86.325-139.663 61.345-34.426-24.98-27.712-92.944 14.996-151.803Z">
                        </path>
                        <path
                            d="M793.647 27.183c41.113-61.1 103.933-90.787 140.31-66.309 36.379 24.478 32.54 93.853-8.573 154.953-41.114 61.1-103.933 90.788-140.311 66.309-36.38-24.478-32.54-93.853 8.574-154.953Z">
                        </path>
                        <path
                            d="M789.932 28.207c39.35-63.227 102.4-95.095 140.826-71.18 38.425 23.914 37.674 94.556-1.677 157.784-39.35 63.226-102.4 95.095-140.825 71.18-38.426-23.916-37.675-94.559 1.676-157.785Z">
                        </path>
                        <path
                            d="M786.041 29.348c37.433-65.24 100.673-99.251 141.251-75.97 40.578 23.284 43.126 95.045 5.694 160.284-37.434 65.24-100.674 99.252-141.25 75.969-40.579-23.282-43.128-95.044-5.695-160.283Z">
                        </path>
                        <path
                            d="M781.942 30.642c35.36-67.116 98.748-103.231 141.581-80.666 42.832 22.566 48.891 95.27 13.53 162.387-35.36 67.115-98.748 103.231-141.58 80.666-42.834-22.567-48.89-95.27-13.53-162.387Z">
                        </path>
                        <path
                            d="M777.66 32.101c33.156-68.862 96.675-107.044 141.876-85.282 45.2 21.762 54.964 95.228 21.81 164.091-33.155 68.862-96.675 107.044-141.875 85.282s-54.965-95.228-21.81-164.091Z">
                        </path>
                        <path
                            d="M773.17 33.748c30.818-70.465 94.454-110.685 142.133-89.832 47.681 20.853 61.35 94.882 30.533 165.347-30.819 70.465-94.454 110.684-142.134 89.832-47.68-20.853-61.35-94.881-30.532-165.347Z">
                        </path>
                        <path
                            d="M768.479 35.603c28.366-71.924 92.118-114.155 142.395-94.326 50.277 19.828 68.04 94.208 39.674 166.132-28.366 71.923-92.12 114.155-142.396 94.326-50.277-19.829-68.04-94.209-39.673-166.132Z">
                        </path>
                        <path
                            d="M763.562 37.694c25.8-73.23 89.67-117.46 142.657-98.791 52.99 18.668 75.03 93.166 49.23 166.395-25.8 73.229-89.67 117.46-142.658 98.79-52.988-18.667-75.028-93.165-49.229-166.394Z">
                        </path>
                        <path
                            d="M758.443 40.06C781.587-34.316 845.59-80.532 901.399-63.166c55.809 17.367 82.29 91.739 59.147 166.115-23.144 74.377-87.147 120.593-142.957 103.227-55.81-17.365-82.29-91.738-59.146-166.115Z">
                        </path>
                        <path
                            d="M753.137 42.71c20.414-75.375 84.585-123.582 143.331-107.672 58.745 15.909 89.82 89.91 69.405 165.287-20.414 75.376-84.585 123.583-143.33 107.673-58.746-15.91-89.82-89.911-69.406-165.287Z">
                        </path>
                        <path
                            d="M747.614 45.657c17.603-76.232 81.97-126.464 143.766-112.194 61.798 14.27 97.624 87.636 80.02 163.869-17.602 76.233-81.97 126.464-143.765 112.194-61.797-14.27-97.624-87.636-80.021-163.87Z">
                        </path>
                        <path
                            d="M741.91 48.97c14.742-76.928 79.338-129.203 144.278-116.758 64.942 12.444 105.636 84.896 90.894 161.824-14.742 76.93-79.338 129.205-144.278 116.76-64.94-12.444-105.636-84.896-90.894-161.825Z">
                        </path>
                        <path
                            d="M736.052 52.645c11.844-77.487 76.72-131.854 144.903-121.431C949.138-58.364 994.81 12.9 982.965 90.388c-11.845 77.487-76.72 131.853-144.903 121.43-68.183-10.421-113.855-81.686-102.01-159.173Z">
                        </path>
                        <path
                            d="M730.013 56.711c8.9-77.907 74.086-134.44 145.597-126.27 71.509 8.168 122.265 77.947 113.365 155.854-8.9 77.908-74.086 134.442-145.596 126.273-71.511-8.17-122.266-77.949-113.366-155.857Z">
                        </path>
                        <path
                            d="M723.862 61.196c5.945-78.2 71.49-136.977 146.403-131.282 74.91 5.695 130.818 73.705 124.874 151.905-5.944 78.2-71.491 136.976-146.402 131.282-74.912-5.696-130.82-73.705-124.875-151.905Z">
                        </path>
                        <path
                            d="M859.505-70.5c78.428 0 142.005 63.578 142.005 142.005 0 78.428-63.577 142.005-142.005 142.005-78.427 0-142.005-63.577-142.005-142.005C717.5-6.922 781.078-70.5 859.505-70.5Z">
                        </path>
                    </g>
                </svg>

                <div class="absolute right-5 top-5">
                    <a href="{{ route('institute.show', $nextInstitute) }}"
                        class="btn  h-8 w-8 rounded-full bg-gray-300/50 dark:bg-gray-800 p-0 font-medium text-slate-800 dark:text-white hover:bg-white  hover:shadow-lg hover:shadow-slate-300/50 focus:bg-slate-500/50 focus:shadow-lg focus:shadow-slate-200/50 active:bg-white /80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:hover:shadow-navy-450/50 dark:focus:bg-navy-450 dark:focus:shadow-navy-450/50 dark:active:bg-navy-450/90  grid place-items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 rotate-45" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
                        </svg>
                    </a>
                </div>

                <!-- Card content -->
                <div>
                    <img class="inline-block h-[4.975rem] w-[4.975rem] rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="{{ $nextInstitute->institute_logo }}" alt="{{ $nextInstitute->name }}">
                </div>
                <div>
                    <div class="text-xs font-bold uppercase text-firefly-400 tracking-widest mb-2">Progress is
                        excellent!
                    </div>
                    <h3 class="text-2xl font-extrabold text-indigo-50 leading-snug capitalize">
                        {{ Auth::user()?->user_greetings . ' ' . Auth::user()?->firstName . '.' }}

                        {{-- </h3>
                    <p class="text-indigo-200 mb-2">
                        Total Registraition for
                        <span class="uppercase text-gradient__teal font-bold">{{ $nextInstitute->acronym }}</span> is
                        <span class="uppercase font-bold text-white">620</span>.
                    </p> --}}
                </div>
                <div class="flex justify-start items-center gap-6">

                    <div class="inline-flex cursor-pointer text-center w-auto  text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-firefly-700 hover:shadow-lg focus:bg-firefly-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-firefly-800 active:shadow-lg transition duration-150 ease-in-out py-1 px-3 bg-indigo-600"
                        onclick="Livewire.emit('openModal', 'admin.insurance.add-insurance')" data-mdb-ripple="true"
                        data-mdb-ripple-color="light">

                        <a href="{{ route('institute.show', $nextInstitute) }}"
                            class="flex items-center justify-center gap-2 ">
                            <svg class="w-5 h-5 text-white text-xs" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z">
                                </path>
                            </svg> Enrolment Details:
                            <div class="tracking-widest uppercase text-gradient__teal font-bold text-2xl">
                                {{ $nextInstitute->acronym }}
                            </div>
                        </a>
                    </div>
                    <div class="items-center overflow-hidden pr-6 border-r border-gray-300/30">
                        <div class="flex items-center pl-2">
                            @foreach ($instituteParticipants as $participant)
                                <img class="object-cover w-6 h-6 -mx-1 border-2 border-white rounded-full dark:border-gray-700 shrink-0"
                                    src="{{ $participant->profile_photo_url }}" alt="">
                            @endforeach

                            <p
                                class="flex items-center justify-center w-6 h-6 -mx-1 text-xs text-blue-600 bg-blue-100 border-2 border-white rounded-full">
                                +{{ $instituteParticipants->count() }}
                            </p>
                        </div>

                    </div>
                    <div class="text-white text-sm capitalize flex justify-start gap-2 items-center">
                       <span> Total Enrolment: </span><span
                            class="flex items-center justify-center w-6 h-6 -mx-1 text-xs text-blue-600 bg-blue-100 border-2 border-white rounded-full">
                            {{ $instituteParticipants->count() }}</span>
                    </div>
                </div>
                <!-- Card footer -->
                <div class="absolute bottom-5 right-5">
                    <div class=" cursor-pointer inline-flex w-10 h-10 justify-center items-center bg-firefly-600 hover:bg-firefly-500 text-firefly-100 hover:text-firefly-100 rounded-full transition duration-350"
                        onclick="Livewire.emit('openModal', 'admin.faculty.add-faculty')">
                        <span class="sr-only">Read more</span>
                        <span class="font-bold -mt-px">
                            <svg class="w-5 h-5 text-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg> </span>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <div class="grid md:grid-cols-3 gap-4 px-4 py-2 ">
        <div
            class="dark:border-gray-700/10  border-gray-500/10 rounded-2xl h-36 bg-gray-200/50   dark:bg-gray-950 dark:text-white p-6   shadow flex flex-col justify-between  ">
            <div class="text-slate-800 dark:text-white capitalize flex-none text-lg font-['anton']">Donations</div>
            <div class="flex justify-between items-center">
                <div class="capitalize flex-none text-lg font-semibold dark:text-white">
                    <div class=" text-xl gap-x-2 ">
                        <span class=" text-slate-700 dark:text-slate-200">
                            {{ 'GHS ' . number_format(App\Models\Donations::sum('amount') / 100, 2, '.', ',') }}
                        </span>

                    </div>
                </div>
                <div>
                    <x-lucide-wallet class="w-12 h-12 dark:text-firefly-500  text-firefly-500/80" />
                </div>
            </div>
            <div class="text-sm tracking-tight">
                <span class="font-bold">Latest:
                    {{ 'GHS ' . number_format(App\Models\Donations::all()->last()?->amount / 100, 2, '.', ',') ?? 'No Donations Yet' }}
                </span>
            </div>
        </div>
        <div
            class="relativedark:border-gray-700/10  border-gray-500/10 rounded-2xl h-36 bg-gray-200/50   dark:bg-gray-950 dark:text-white  p-6   shadow flex flex-col justify-between  ">
            <div
                class="absolute top-3 right-3 w-6 h-6 bg-firefly-300/50 text-firefly-900 font-bold rounded-full flex justify-center items-center text-[11px] dark:text-white">
                {{ $this->totalsForMonth() }}
            </div>
            <div class="text-slate-800 dark:text-white capitalize flex-none text-lg font-['anton'] ">
                Total For: {{ \Carbon\Carbon::parse(now())->format('M, Y') }}</div>
            <div class="flex justify-between items-center">
                <div class="capitalize flex-none text-lg font-semibold dark:text-white">
                    <div class=" text-xl gap-x-2 ">
                        <span class=" text-slate-700 dark:text-slate-200">
                            {{ 'GHS ' . number_format($this->totalAmountForMonth() / 100, 2, '.', ',') }}
                        </span>

                    </div>
                </div>
                <div>
                    <x-lucide-coins class="w-12 h-12 dark:text-firefly-500  text-firefly-500/80" />
                </div>
            </div>
            <div class="text-sm tracking-tight">
                <span class="font-bold">Monthly Transactions</span>
                {{-- <span class="font-bold">Latest: {{ App\Models\Transaction::latestFormattedAmount() }}</span> --}}
            </div>
        </div>

        <div
            class=" rounded-2xl h-36 bg-gray-200/50   dark:bg-gray-950 dark:text-white  p-6   shadow flex flex-col justify-betweendark:border-gray-700/10  border-gray-500/10">
            <div class="text-slate-800 dark:text-white capitalize flex-none text-lg font-['anton']">
                <div class="flex justify-between items-center">
                    <div class="dark:text-white font-bold">
                        Up-Next:
                    </div>
                    <a href="{{ route('institute.show', $nextInstitute) }}"
                        class="btn  h-6 w-6 rounded-full bg-gray-500/50 dark:bg-gray-800 p-0 font-medium text-slate-800 dark:text-white hover:bg-white  hover:shadow-lg hover:shadow-slate-300/50 focus:bg-slate-500/50 focus:shadow-lg focus:shadow-slate-200/50 active:bg-white /80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:hover:shadow-navy-450/50 dark:focus:bg-navy-450 dark:focus:shadow-navy-450/50 dark:active:bg-navy-450/90  grid place-items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex justify-between items-center gap-x-4">

                <div>
                    <img class="inline-block h-[2.975rem] w-[2.975rem] rounded-full ring-2 ring-white dark:ring-gray-800"
                        src="{{ $nextInstitute->institute_logo }}" alt="{{ $nextInstitute->name }}">

                </div>
                <div class="tracking-widest uppercase text-gradient__teal font-bold text-3xl">
                    {{ $nextInstitute->acronym }}
                </div>
            </div>
            <div class="text-sm tracking-tight">
                <div class=" font-bold">{{ $nextInstitute->duration }}, {{ now()->format('Y') }}</div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-4 md:grid-cols-12 md:gap-4 px-4 py-2">

        {{-- <livewire:admin.transactions.latest-transaction-list /> --}}
        <div class="md:col-span-12 rounded-2xl">
            <div class="grid gap-4 grid-cols-1 ">
                <div class="bg-white dark:bg-gray-950 dark:text-white rounded-2xl shadow py-4" id="chartline"></div>
            </div>
        </div>

        <div class="md:col-span-12 rounded-2xl">

            <div class="bg-white dark:bg-gray-950 dark:text-white shadow-lg" id="chartpie"></div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        var chart = document.querySelector('#chartline')
        var options = {
            series: [{
                name: 'TEAM A',
                type: 'area',
                data: [44, 55, 31, 47, 31, 43, 26, 41, 31, 47, 33]
            }, {
                name: 'TEAM B',
                type: 'line',
                data: [55, 69, 45, 61, 43, 54, 37, 52, 44, 61, 43]
            }],
            chart: {
                height: 350,
                type: 'line',
                zoom: {
                    enabled: false
                }
            },
            stroke: {
                curve: 'smooth'
            },
            fill: {
                type: 'solid',
                opacity: [0.35, 1],
            },
            labels: ['Dec 01', 'Dec 02', 'Dec 03', 'Dec 04', 'Dec 05', 'Dec 06', 'Dec 07', 'Dec 08', 'Dec 09 ',
                'Dec 10', 'Dec 11'
            ],
            markers: {
                size: 0
            },
            yaxis: [{
                    title: {
                        text: 'Series A',
                    },
                },
                {
                    opposite: true,
                    title: {
                        text: 'Series B',
                    },
                },
            ],
            tooltip: {
                shared: true,
                intersect: false,
                y: {
                    formatter: function(y) {
                        if (typeof y !== "undefined") {
                            return y.toFixed(0) + " points";
                        }
                        return y;
                    }
                }
            }
        };
        var chart = new ApexCharts(chart, options);
        chart.render();
    </script>
    <script>
        var chart = document.querySelector('#chartpie')
        var options = {
            series: [44, 55, 67, 83],
            chart: {
                height: 350,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    dataLabels: {
                        name: {
                            fontSize: '22px',
                        },
                        value: {
                            fontSize: '16px',
                        },
                        total: {
                            show: true,
                            label: 'Total',
                            formatter: function(w) {
                                // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                                return 249
                            }
                        }
                    }
                }
            },
            labels: ['Apples', 'Oranges', 'Bananas', 'Berries'],
        };
        var chart = new ApexCharts(chart, options);
        chart.render();
    </script>
