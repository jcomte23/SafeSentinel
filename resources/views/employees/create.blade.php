<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{route('employees.store')}}" method="post" class="grid grid-cols-1 sm:grid-cols-2 gap-4 p-4">
                    @include('employees._form')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>