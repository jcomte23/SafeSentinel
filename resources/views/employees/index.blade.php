<x-app-layout>
    <x-slot name="header">
        <h2
            class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center justify-between">
            {{ __('Employees') }}
            <a href="{{ route('employees.create') }}"
                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-500 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                {{ __('Create') }}
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
            <div class="bg-white max-w-full dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg ">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-blue-200 dark:bg-blue-900 text-gray-500 dark:text-white">
                        <tr>
                            <th scope="col" class="px-2 py-3 text-left text-xs font-medium uppercase tracking-wider text-center">
                                {{ __('Person State') }}
                            </th>
                            <th scope="col" class="px-0 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                {{ __('Identification Number') }}
                            </th>
                            <th scope="col" class="px-2 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                {{ __('First Name') }}
                            </th>
                            <th scope="col" class="px-2 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                {{ __('Last Name') }}
                            </th>
                            <th scope="col" class="px-2 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                {{ __('Occupation') }}
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-center text-xs font-medium uppercase tracking-wider mx-auto">
                                {{ __('Options') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-900 dark:divide-gray-700">
                        @forelse ($employees as $employee)
                            <tr>
                                <td class="px-2 py-3 whitespace-nowrap text-sm text-gray-500 text-center">
                                    <div>
                                        @if ($employee->state_id==1)
                                            <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">
                                                {{ __('Active') }}
                                            </button>
                                        @else
                                            <button class="bg-blue-500 text-white px-4 py-2 rounded">
                                                {{ __('InActive') }}
                                            </button>
                                        @endif
                                    </div>
                                </td>
                                <td class="px-2 py-3 whitespace-nowrap text-sm text-gray-500">
                                    {{ $employee->identification_number }}
                                </td>
                                <td class="px-2 py-3 whitespace-nowrap text-sm text-gray-500">
                                    {{ $employee->first_name }}
                                </td>
                                <td class="px-2 py-3 whitespace-nowrap text-sm text-gray-500">
                                    {{ $employee->last_name }}
                                </td>
                                <td class="px-2 py-3 whitespace-nowrap text-sm text-gray-500">
                                    {{ $employee->occupation }}
                                </td>
                                <td class="px-2 py-3 whitespace-nowrap text-center ">
                                    <a href="{{ route('employees.edit', $employee->id) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded">{{ __('Edit') }}</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-2 py-3 whitespace-nowrap text-sm text-gray-500 text-center">{{ __('No records available') }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="flex justify-center text-lg py-4">
                    {{ $employees->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
