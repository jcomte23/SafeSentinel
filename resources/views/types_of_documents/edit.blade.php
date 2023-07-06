<x-app-layout>
    <x-slot name="header">
        <h2
            class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center justify-between">
            {{ __('Type of document') }}
            <a href="{{ route('types_of_documents.index') }}"
                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-500 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                {{ __('Cancel') }}
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{route('types_of_documents.update',$typesOfDocuments)}}" method="post" class="grid grid-cols-1 sm:grid-cols-2 gap-4 p-4">
                    @method('PUT')
                    @include('types_of_documents._form')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>