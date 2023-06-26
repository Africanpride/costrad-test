<x-app-layout>
    <x-admin.pageheader model-name="RBAC / ACL" description="Roles & Permissions" add-button="false" class="mx-4">
        <x-heroicon-o-user-group class="w-5 h-5 text-current" />
        </x-admin-pageheader>

        <div class="p-4 space-y-4">

            <!-- Jumbotron -->
            <div class="p-6 shadow rounded-lg bg-firefly-50 dark:bg-slate-900 dark:text-white ">

                <div class="space-y-3">
                    <p class="max-w-7xl">
                        These are the Roles already in <b>{{ config('app.name') }}</b> with their
                        associated roles. You can assign new roles to existing member here. A role provides access to
                        predefined menus and features so that depending on the assigned role and permissions a user can
                        have access to what they need.
                    </p>
                    <p class="max-w-7xl">
                        Roles would be assigned available Permissions.
                    </p>




                    <div class="gap-4 grid grid-cols-1 md:flex justify-start items-center">

                        <x-admin.generic-button onclick="Livewire.emit('openModal', 'admin.role.add-role')">

                            <span class="flex items-center justify-center gap-2">
                                <x-admin.green-shield-icon class="w-6 h-6 text-green-500 " />
                                Add New Role
                            </span>
                        </x-admin.generic-button>
                        <x-admin.generic-button
                            onclick="Livewire.emit('openModal', 'admin.permissions.add-permission')">
                            <span class="flex items-center justify-center gap-2">
                                <x-heroicon-o-adjustments-horizontal class="w-6 h-6 text-yellow-400 " />
                                Add New Permission
                            </span>
                        </x-admin.generic-button>
                    </div>

                </div>
                <hr class="my-6 dark:border-gray-600 border-firefly-200" />
                <livewire:admin.available-roles />
                <hr class="my-6 dark:border-gray-600 border-firefly-200" />
                <livewire:admin.available-permissions />
            </div>
            <!-- Jumbotron -->

            <!-- Jumbotron -->
            <div class="p-6 shadow  bg-gray-100 dark:bg-slate-900/10 dark:text-white ">
                <div class="flex flex-row justify-between my-2">
                    <h2 class="font-semibold text-3xl">Administrator Privileges</h2>
                </div>
                <div class="space-y-3">
                    <p class="max-w-2xl">
                        These are members of <b>{{ config('app.name') }}</b> with Administrator Privileges in the
                        organization. You may create new roles and permissions here.
                    </p>
                </div>


                <div class="mt-6 border dark:border-0 overflow-hidden ">
                    <div class="overflow-x-auto">
                        <div class="align-middle inline-block min-w-full">
                            <table class="min-w-full border-secondary-300 rounded-md dark:border-secondary-900">
                                <thead>
                                    <tr
                                        class=" bg-gray-200 dark:border-secondary-900 dark:bg-secondary-900 text-secondary-900  dark:text-secondary-400">
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs leading-4 font-medium  uppercase tracking-wider dark:text-secondary-400">
                                            <span class="lg:pl-2">Name</span>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs leading-4 font-medium  uppercase tracking-wider dark:text-secondary-400">
                                            Email Address
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3  uppercase tracking-wider  hidden md:table-cell text-left text-xs leading-4 font-medium ">
                                            Role
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs leading-4 font-medium  uppercase tracking-wider  hidden md:table-cell text-left">
                                            Access
                                        </th>

                                    </tr>
                                </thead>
                                <tbody
                                    class="divide-y divide-secondary-100 bg-white dark:bg-secondary-800 dark:divide-secondary-900"
                                    x-max="1">
                                    <tr>
                                        <td
                                            class="px-6 py-3 whitespace-no-wrap text-sm leading-5 font-medium text-secondary-900 dark:text-white">
                                            <div class="flex items-center">
                                                <div class="shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full"
                                                        src="https://ui-avatars.com/api/?name=Kwame+Hughes&amp;color=1d4ed8&amp;background=dbeafe"
                                                        alt="User avatar">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm leading-5 font-medium">
                                                        {{ Auth::user()->full_name }}
                                                    </div>
                                                    <div
                                                        class="text-sm leading-5 text-secondary-500 dark:text-secondary-400">
                                                        Registered <time datetime="{{ Auth::user()->created_at }}"
                                                            class="capitalize">{{ Auth::user()->created_at->diffForHumans() }}
                                                        </time>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="px-6 py-3 text-sm leading-5 text-secondary-500 dark:text-secondary-400">
                                            <div class="flex items-center">
                                                <svg class="w-5 h-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd"></path>
                                                </svg> <span class="ml-1.5">{{ Auth::user()->email }}</span>
                                            </div>
                                        </td>
                                        <td
                                            class="hidden md:table-cell px-6 py-3 whitespace-no-wrap text-sm leading-5 text-left">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-secondary-100 text-secondary-800 dark:bg-secondary-900 dark:text-secondary-400">
                                                Administrator
                                            </span>
                                        </td>
                                        <td
                                            class="hidden md:table-cell px-6 py-3 whitespace-no-wrap text-sm leading-5 text-secondary-500 dark:text-secondary-400 text-left">
                                            Full
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="flex items-center justify-between px-4 py-3 sm:px-6 border-t border-secondary-200 rounded-b-md bg-white dark:bg-secondary-800 dark:border-secondary-900">
                            <div class="flex-1 flex justify-between sm:hidden">

                            </div>
                            <div class=" sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                <div>
                                    <p class="text-sm leading-5 text-secondary-900 dark:text-secondary-400">
                                        Showing
                                        <span class="font-medium">1</span>
                                        to
                                        <span class="font-medium">1</span>
                                        of
                                        <span class="font-medium"> 1</span>
                                        results
                                    </p>
                                </div>
                                <div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Jumbotron -->




        </div>


</x-app-layout>
