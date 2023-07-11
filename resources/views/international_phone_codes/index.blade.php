<x-app-layout>
    <x-slot name="header">
        <h2
            class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center justify-between">
            {{ __('International phone codes') }}
            <a href="{{ route('international_phone_codes.create') }}"
                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-500 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                {{ __('Create') }}
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-blue-200 dark:bg-blue-900 text-gray-500 dark:text-white ">
                        <tr>
                            <th scope="col"
                                class="px-2 py-3 text-center text-left text-xs font-medium uppercase tracking-wider">
                                {{ __('Country') }}
                            </th>
                            <th scope="col"
                                class="px-0 py-3 text-center text-left text-xs font-medium uppercase tracking-wider">
                                {{ __('Code') }}
                            </th>
                            <th scope="col"
                                class="px-2 py-3 text-center text-xs font-medium uppercase tracking-wider mx-auto">
                                {{ __('Options') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-900 dark:divide-gray-700">
                        @forelse ($InternationalPhoneCodes as $InternationalPhoneCode)
                            <tr>
                                <td class="px-2 py-3 whitespace-nowrap text-sm text-gray-500 text-center">
                                    {{ $InternationalPhoneCode->country }}
                                </td>
                                <td class="px-2 py-3 whitespace-nowrap text-sm text-gray-500 text-center">
                                    {{ $InternationalPhoneCode->code }}
                                </td>
                                <td class="px-2 py-3 whitespace-nowrap text-center flex flex-wrap justify-center">
                                    <a href="{{ route('international_phone_codes.edit', $InternationalPhoneCode->id) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded mb-2 md:mb-0 md:mr-2">{{ __('Edit') }}</a>

                                    <form action="{{ route('international_phone_codes.destroy', $InternationalPhoneCode->id) }}"
                                        method="POST">
                                        @csrf @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('{{ __('Are you sure? This action cannot be reversed.') }}')"
                                            class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded">{{ __('Delete') }}</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4"
                                    class="px-2 py-3 whitespace-nowrap text-sm text-gray-500 text-center">
                                    {{ __('No records available') }}
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="flex justify-center text-lg py-4">
                    {{ $InternationalPhoneCodes->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>