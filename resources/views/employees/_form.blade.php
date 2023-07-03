@csrf

<div>
    <label for="first_name" class="block mb-2 font-bold dark:text-white">First Name
        <span class="text-xs text-red-600">
            @error('first_name')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <input type="text" id="first_name" name="first_name" value="{{ @old('first_name', $employee->first_name) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="last_name" class="block mb-2 font-bold dark:text-white">Last Name
        <span class="text-xs text-red-600">
            @error('last_name')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <input type="text" id="last_name" name="last_name" value="{{ @old('last_name', $employee->last_name) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="identification_number" class="block mb-2 font-bold dark:text-white">Identification Number
        <span class="text-xs text-red-600">
            @error('identification_number')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <input type="number" id="identification_number" name="identification_number"
        value="{{ @old('identification_number', $employee->identification_number) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="email" class="block mb-2 font-bold dark:text-white">Email
        <span class="text-xs text-red-600">
            @error('email')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <input type="email" id="email" name="email" value="{{ @old('email', $employee->email) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="phone" class="block mb-2 font-bold dark:text-white">Phone
        <span class="text-xs text-red-600">
            @error('phone')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <input type="text" id="phone" name="phone" value="{{ @old('phone', $employee->phone) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="optional_phone" class="block mb-2 font-bold dark:text-white">Optional Phone
        <span class="text-xs text-red-600">
            @error('optional_phone')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <input type="text" id="optional_phone" name="optional_phone"
        value="{{ @old('optional_phone', $employee->optional_phone) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="date_of_birth" class="block mb-2 font-bold dark:text-white">Date Of Birth
        <span class="text-xs text-red-600">
            @error('date_of_birth')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <input type="date" id="date_of_birth" name="date_of_birth"
        value="{{ @old('date_of_birth', $employee->date_of_birth) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="family_composition" class="block mb-2 font-bold dark:text-white">family_composition
        <span class="text-xs text-red-600">
            @error('family_composition')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <input type="text" id="family_composition" name="family_composition"
        value="{{ @old('family_composition', $employee->family_composition) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="country" class="block mb-2 font-bold dark:text-white">country
        <span class="text-xs text-red-600">
            @error('country')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <input type="text" id="country" name="country" value="{{ @old('country', $employee->country) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="state" class="block mb-2 font-bold dark:text-white">state
        <span class="text-xs text-red-600">
            @error('state')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <input type="text" id="state" name="state" value="{{ @old('state', $employee->state) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="city" class="block mb-2 font-bold dark:text-white">city
        <span class="text-xs text-red-600">
            @error('city')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <input type="text" id="city" name="city" value="{{ @old('city', $employee->city) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="address" class="block mb-2 font-bold dark:text-white">address
        <span class="text-xs text-red-600">
            @error('address')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <input type="text" id="address" name="address" value="{{ @old('address', $employee->address) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="occupation" class="block mb-2 font-bold dark:text-white">occupation
        <span class="text-xs text-red-600">
            @error('occupation')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <input type="text" id="occupation" name="occupation"
        value="{{ @old('occupation', $employee->occupation) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="work_area" class="block mb-2 font-bold dark:text-white">work_area
        <span class="text-xs text-red-600">
            @error('work_area')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <input type="text" id="work_area" name="work_area"
        value="{{ @old('work_area', $employee->work_area) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="HdV" class="block mb-2 font-bold dark:text-white">HdV
        <span class="text-xs text-red-600">
            @error('HdV')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <input type="text" id="HdV" name="HdV" value="{{ @old('HdV', $employee->HdV) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="EPS" class="block mb-2 font-bold dark:text-white">EPS
        <span class="text-xs text-red-600">
            @error('EPS')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <input type="text" id="EPS" name="EPS" value="{{ @old('EPS', $employee->EPS) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="AFP" class="block mb-2 font-bold dark:text-white">AFP
        <span class="text-xs text-red-600">
            @error('AFP')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <input type="text" id="AFP" name="AFP" value="{{ @old('AFP', $employee->AFP) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="ARL" class="block mb-2 font-bold dark:text-white">ARL
        <span class="text-xs text-red-600">
            @error('ARL')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <input type="text" id="ARL" name="ARL" value="{{ @old('ARL', $employee->ARL) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="CCF" class="block mb-2 font-bold dark:text-white">CCF
        <span class="text-xs text-red-600">
            @error('CCF')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <input type="text" id="CCF" name="CCF" value="{{ @old('CCF', $employee->CCF) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="emergency_contact" class="block mb-2 font-bold dark:text-white">emergency_contact
        <span class="text-xs text-red-600">
            @error('emergency_contact')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <input type="text" id="emergency_contact" name="emergency_contact"
        value="{{ @old('emergency_contact', $employee->emergency_contact) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="emergency_phone" class="block mb-2 font-bold dark:text-white">emergency_phone
        <span class="text-xs text-red-600">
            @error('emergency_phone')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <input type="text" id="emergency_phone" name="emergency_phone"
        value="{{ @old('emergency_phone', $employee->emergency_phone) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="socioeconomic_stratum" class="block mb-2 font-bold dark:text-white">socioeconomic_stratum
        <span class="text-xs text-red-600">
            @error('socioeconomic_stratum')
                ({{ $message }})
            @enderror
        </span>
    </label>
    <input type="text" id="socioeconomic_stratum" name="socioeconomic_stratum"
        value="{{ @old('socioeconomic_stratum', $employee->socioeconomic_stratum) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div class="col-span-2">
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
</div>
