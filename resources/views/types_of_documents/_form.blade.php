@csrf

<div class="flex flex-wrap ">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="abbreviation" class="block mb-2 font-bold dark:text-white">{{ __('Abbreviation') }}
            <span class="text-xs text-red-600">
                @error('abbreviation')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <input type="text" id="abbreviation" name="abbreviation"
            value="{{ @old('abbreviation', $typesOfDocument->abbreviation) }}"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
    </div>
    <div class="w-full md:w-1/2 px-3">
        <label for="typeDocument" class="block mb-2 font-bold dark:text-white">{{ __('Type of document') }}
            <span class="text-xs text-red-600">
                @error('typeDocument')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <input type="text" id="typeDocument" name="typeDocument"
            value="{{ @old('typeDocument', $typesOfDocument->typeDocument) }}"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none  focus:border-blue-500">
    </div>
</div>
<div class="w-full px-3">
    <label for="description" class="block mb-2 font-bold dark:text-white">{{ __('Description') }}
        <span class="text-xs text-red-600">
            @error('description')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <textarea
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none  focus:border-blue-500""
        id="description" name="description" rows="5">{{ @old('description', $typesOfDocument->description) }}</textarea>
</div>
<div class="col-span-2 flex justify-end">
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">{{ __('Save') }}</button>
</div>
