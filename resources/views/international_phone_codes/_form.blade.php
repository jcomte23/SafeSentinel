@csrf

<div class="flex flex-wrap ">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="country" class="block mb-2 font-bold dark:text-white">{{ __('Country') }}
            <span class="text-xs text-red-600">
                @error('country')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <input type="text" id="country" name="country"
            value="{{ @old('country', $InternationalPhoneCode->country) }}"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
    </div>
    <div class="w-full md:w-1/2 px-3">
        <label for="code" class="block mb-2 font-bold dark:text-white">{{ __('Code') }}
            <span class="text-xs text-red-600">
                @error('code')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <input type="text" id="code" name="code"
            value="{{ @old('code', $InternationalPhoneCode->code) }}"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none  focus:border-blue-500">
    </div>
    <div class="w-full md:w-1/2 px-3">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-2 rounded">{{ __('Save') }}</button>
    </div>
</div>

