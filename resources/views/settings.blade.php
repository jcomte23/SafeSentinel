<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex">
                <div class="max-w-md mx-auto bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
                    <img class="object-cover w-full h-56" src="https://th.bing.com/th/id/R.652d7fa0caa9ade0350fbf90f1c13011?rik=Cu2DKHRClMl42g&riu=http%3a%2f%2ficafe.lcisd.org%2fwp-content%2fuploads%2fsettings.png&ehk=CGyBLM%2fSC8AoN35BRuok0kD%2bIC9e3JysqoliBIWY0Vs%3d&risl=&pid=ImgRaw&r=0" alt="Imagen del card">
                    <div class="p-4 text-center">
                        <h2 class="text-xl font-bold text-gray-800 dark:text-white">{{ __('Type of document') }}</h2>
                        <p class="text-gray-600 dark:text-gray-300">Administra los tipos de documentos del aplicativo</p>
                        <a href="{{ route('types_of_documents.index') }}" class="mt-2 inline-block px-4 py-2 bg-blue-500 text-white rounded-lg shadow-md">Ir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>