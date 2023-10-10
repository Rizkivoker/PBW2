<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Pengguna') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Full Name
                                </th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Email
                                </th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Username
                                </th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Alamat
                                </th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    No Telepon
                                </th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Tanggal Lahir
                                </th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Agama
                                </th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Jenis Kelamin
                                </th>

                            </tr>
                        </thead>
                        <tbody class="bg-gray-800 divide-y divide-gray-200 dark:divide-gray-600">
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    {{ $user->fullname }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    {{ $user->email }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    {{ $user->username }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    {{ $user->address }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    {{ $user->phoneNumber }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    {{ $user->birthdate }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    {{ $user->Agama }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    @if ($user->Jenis_Kelamin == 0)
                                        <span>Pria</span>
                                    @else
                                        <span>Wanita</span>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
