@csrf
<section class="grid grid-cols-1 sm:grid-cols-2 gap-4 p-4">
    {{-- Nombres --}}
    <div>
        <label for="first_name" class="block mb-2 font-bold dark:text-white">{{ __('First Name') }}
            <span class="text-xs text-red-600">
                @error('first_name')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <input type="text" id="first_name" name="first_name" value="{{ @old('first_name', $employee->first_name) }}"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
    </div>

    {{-- Apellidos --}}
    <div>
        <label for="last_name" class="block mb-2 font-bold dark:text-white">{{ __('Last Name') }}
            <span class="text-xs text-red-600">
                @error('last_name')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <input type="text" id="last_name" name="last_name" value="{{ @old('last_name', $employee->last_name) }}"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
    </div>

    {{-- Tipo de documento --}}
    <div>
        <label for="types_of_document_id" class="block mb-2 font-bold dark:text-white">{{ __('Type of document') }}
            <span class="text-xs text-red-600">
                @error('types_of_document_id')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <select type="number" name="types_of_document_id" id="types_of_document_id"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
            @forelse ($typesOfDocuments as $type)
                <option value="{{ $type->id }}"
                    {{ @old('types_of_document_id', $employee->types_of_document_id) == $type->id ? 'selected' : '' }}>
                    ({{ $type->abbreviation }})
                    -{{ $type->typeDocument }}</option>
            @empty
                <option value="">{{ __('No records available') }}</option>
            @endforelse
        </select>
    </div>

    {{-- Numero de identificación --}}
    <div>
        <label for="identification_number"
            class="block mb-2 font-bold dark:text-white">{{ __('Identification Number') }}
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

    {{-- Fecha de nacimiento --}}
    <div>
        <label for="date_of_birth" class="block mb-2 font-bold dark:text-white">{{ __('Date Of Birth') }}
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

    {{-- Tipo de sangre --}}
    <div>
        <label for="blood_type_id" class="block mb-2 font-bold dark:text-white">{{ __('Blood type') }}
            <span class="text-xs text-red-600">
                @error('blood_type_id')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <select type="number" name="blood_type_id" id="blood_type_id"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
            @forelse ($bloodTypes as $type)
                <option value="{{ $type->id }}"
                    {{ @old('blood_type_id', $employee->blood_type_id) == $type->id ? 'selected' : '' }}>
                    {{ $type->abbreviation }}</option>
            @empty
                <option value="">{{ __('No records available') }}</option>
            @endforelse
        </select>
    </div>

    {{-- Genero sexual --}}
    <div>
        <label for="types_of_genre_id" class="block mb-2 font-bold dark:text-white">{{ __('Genre') }}
            <span class="text-xs text-red-600">
                @error('types_of_genre_id')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <select type="number" name="types_of_genre_id" id="types_of_genre_id"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
            @forelse ($typesOfGenres as $type)
                <option value="{{ $type->id }}"
                    {{ @old('types_of_genre_id', $employee->types_of_genre_id) == $type->id ? 'selected' : '' }}>
                    {{ $type->name }}</option>
            @empty
                <option value="">{{ __('No records available') }}</option>
            @endforelse
        </select>
    </div>

    {{-- Correo electronico --}}
    <div>
        <label for="email" class="block mb-2 font-bold dark:text-white">{{ __('Email') }}
            <span class="text-xs text-red-600">
                @error('email')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <input type="email" id="email" name="email" value="{{ @old('email', $employee->email) }}"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
    </div>

    {{-- telefono principal --}}
    <div>
        <label for="international_phone_code_id"
            class="block mb-2 font-bold dark:text-white">{{ __('International phone codes') }}
            <span class="text-xs text-red-600">
                @error('international_phone_code_id')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <select type="number" name="international_phone_code_id" id="international_phone_code_id"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
            @forelse ($InternationalPhoneCodes as $type)
                <option value="{{ $type->id }}"
                    {{ @old('international_phone_code_id', $employee->international_phone_code_id) == $type->id ? 'selected' : '' }}>
                    {{ $type->country }} (+{{ $type->code }})</option>
            @empty
                <option value="">{{ __('No records available') }}</option>
            @endforelse
        </select>
    </div>
    <div>
        <label for="phone" class="block mb-2 font-bold dark:text-white">{{ __('Phone') }}
            <span class="text-xs text-red-600">
                @error('phone')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <input type="number" id="phone" name="phone" value="{{ @old('phone', $employee->phone) }}"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
    </div>

    {{-- telefono opcional --}}
    <div>
        <label for="optional_international_phone_code_id"
            class="block mb-2 font-bold dark:text-white">{{ __('International phone codes') }}
            <span class="text-xs text-red-600">
                @error('optional_international_phone_code_id')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <select type="number" name="optional_international_phone_code_id" id="optional_international_phone_code_id"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
            @forelse ($InternationalPhoneCodes as $type)
                <option value="{{ $type->id }}"
                    {{ @old('optional_international_phone_code_id', $employee->optional_international_phone_code_id) == $type->id ? 'selected' : '' }}>
                    {{ $type->country }} (+{{ $type->code }})</option>
            @empty
                <option value="">{{ __('No records available') }}</option>
            @endforelse
        </select>
    </div>
    <div>
        <label for="optional_phone" class="block mb-2 font-bold dark:text-white">{{ __('Optional Phone') }}
            <span class="text-xs text-red-600">
                @error('optional_phone')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <input type="number" id="optional_phone" name="optional_phone"
            value="{{ @old('optional_phone', $employee->optional_phone) }}"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
    </div>
</section>
<section class="p-4 pt-0">
    {{-- estado civil --}}
    <div>
        <label for="civil_status_id" class="block mb-2 font-bold dark:text-white">{{ __('Civil status') }}
            <span class="text-xs text-red-600">
                @error('civil_status_id')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <select type="number" name="civil_status_id" id="civil_status_id"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
            @forelse ($civilStatus as $type)
                <option value="{{ $type->id }}"
                    {{ @old('civil_status_id', $employee->civil_status_id) == $type->id ? 'selected' : '' }}>
                    {{ $type->name }}</option>
            @empty
                <option value="">{{ __('No records available') }}</option>
            @endforelse
        </select>
    </div>
    {{-- composicion familiar --}}
    <div>
        <label for="family_composition" class="block mb-2 font-bold dark:text-white">{{ __('Family composition') }}
            <span class="text-xs text-red-600">
                @error('family_composition')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <textarea type="text"
            class="form-input w-full border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-blue-500"
            name="family_composition" id="family_composition">{{ @old('family_composition', $employee->family_composition) }}</textarea>
    </div>
</section>
<section class="grid grid-cols-1 sm:grid-cols-3 gap-4 p-4 pt-0">
    {{-- pais --}}
    <div>
        <label for="country" class="block mb-2 font-bold dark:text-white">{{ __('Country') }}
            <span class="text-xs text-red-600">
                @error('country')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <input type="text" id="country" name="country" value="{{ @old('country', $employee->country) }}"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
    </div>
    {{-- Departamento --}}
    <div>
        <label for="state" class="block mb-2 font-bold dark:text-white">{{ __('State') }}
            <span class="text-xs text-red-600">
                @error('state')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <input type="text" id="state" name="state" value="{{ @old('state', $employee->state) }}"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
    </div>
    {{-- Ciudad --}}
    <div>
        <label for="city" class="block mb-2 font-bold dark:text-white">{{ __('City') }}
            <span class="text-xs text-red-600">
                @error('city')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <input type="text" id="city" name="city" value="{{ @old('city', $employee->city) }}"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
    </div>
</section>

<section class="p-4 pt-0">
    {{-- Dirección --}}
    <div>
        <label for="address" class="block mb-2 font-bold dark:text-white">{{ __('Address') }}
            <span class="text-xs text-red-600">
                @error('address')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <input type="text" id="address" name="address" value="{{ @old('address', $employee->address) }}"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
    </div>
</section>

<section class="grid grid-cols-1 sm:grid-cols-2 gap-4 p-4 pt-0">
    {{-- Ocupacion --}}
    <div>
        <label for="occupation" class="block mb-2 font-bold dark:text-white">{{ __('Occupation') }}
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

    {{-- Area de trabajo --}}
    <div>
        <label for="work_area" class="block mb-2 font-bold dark:text-white">{{ __('Work Area') }}
            <span class="text-xs text-red-600">
                @error('work_area')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <input type="text" id="work_area" name="work_area" value="{{ @old('work_area', $employee->work_area) }}"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
    </div>
</section>

<section class="grid grid-cols-1 sm:grid-cols-3 gap-4 p-4 pt-0">
    {{-- grado de escolaridad --}}
    <div>
        <label for="school_grade_id" class="block mb-2 font-bold dark:text-white">{{ __('School grade') }}
            <span class="text-xs text-red-600">
                @error('school_grade_id')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <select type="number" name="school_grade_id" id="school_grade_id"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
            @forelse ($schoolGrades as $type)
                <option value="{{ $type->id }}"
                    {{ @old('school_grade_id', $employee->school_grade_id) == $type->id ? 'selected' : '' }}>
                    {{ $type->name }}</option>
            @empty
                <option value="">{{ __('No records available') }}</option>
            @endforelse
        </select>
    </div>

    {{-- salarios --}}
    <div>
        <label for="salary_id" class="block mb-2 font-bold dark:text-white">{{ __('Salary') }}
            <span class="text-xs text-red-600">
                @error('salary_id')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <select type="number" name="salary_id" id="salary_id"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
            @forelse ($salaries as $type)
                <option value="{{ $type->id }}"
                    {{ @old('salary_id', $employee->salary_id) == $type->id ? 'selected' : '' }}>
                    {{ $type->name }}</option>
            @empty
                <option value="">{{ __('No records available') }}</option>
            @endforelse
        </select>
    </div>

    {{-- jornada laboral --}}
    <div>
        <label for="work_schedule_id" class="block mb-2 font-bold dark:text-white">{{ __('Work schedule') }}
            <span class="text-xs text-red-600">
                @error('work_schedule_id')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <select type="number" name="work_schedule_id" id="work_schedule_id"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
            @forelse ($workSchedules as $type)
                <option value="{{ $type->id }}"
                    {{ @old('work_schedule_id', $employee->work_schedule_id) == $type->id ? 'selected' : '' }}>
                    {{ $type->name }}</option>
            @empty
                <option value="">{{ __('No records available') }}</option>
            @endforelse
        </select>
    </div>
</section>

<section class="grid grid-cols-1 sm:grid-cols-2 gap-4 p-4 pt-0">


    {{-- Hoja de vida --}}
    <div>
        <label for="HdV" class="block mb-2 font-bold dark:text-white">{{ __('HdV') }}
            <span class="text-xs text-red-600">
                @error('HdV')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <input type="text" id="HdV" name="HdV" value="{{ @old('HdV', $employee->HdV) }}"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
    </div>

    {{-- EPS --}}
    <div>
        <label for="EPS" class="block mb-2 font-bold dark:text-white">{{ __('EPS') }}
            <span class="text-xs text-red-600">
                @error('EPS')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <input type="text" id="EPS" name="EPS" value="{{ @old('EPS', $employee->EPS) }}"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
    </div>

    {{-- AFP --}}
    <div>
        <label for="AFP" class="block mb-2 font-bold dark:text-white">{{ __('AFP') }}
            <span class="text-xs text-red-600">
                @error('AFP')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <input type="text" id="AFP" name="AFP" value="{{ @old('AFP', $employee->AFP) }}"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
    </div>

    {{-- ARL --}}
    <div>
        <label for="ARL" class="block mb-2 font-bold dark:text-white">{{ __('ARL') }}
            <span class="text-xs text-red-600">
                @error('ARL')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <input type="text" id="ARL" name="ARL" value="{{ @old('ARL', $employee->ARL) }}"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
    </div>

    {{-- CCF --}}
    <div>
        <label for="CCF" class="block mb-2 font-bold dark:text-white">{{ __('CCF') }}
            <span class="text-xs text-red-600">
                @error('CCF')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <input type="text" id="CCF" name="CCF" value="{{ @old('CCF', $employee->CCF) }}"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
    </div>

    {{-- CONTACTO DE EMERGENCIA --}}
    <div>
        <label for="emergency_contact" class="block mb-2 font-bold dark:text-white">{{ __('Emergency Contact') }}
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
        <label for="emergency_international_phone_code_id"
            class="block mb-2 font-bold dark:text-white">{{ __('International phone codes') }}
            <span class="text-xs text-red-600">
                @error('emergency_international_phone_code_id')
                    ({{ $message }})
                @enderror
            </span>
        </label>
        <select type="number" name="emergency_international_phone_code_id"
            id="emergency_international_phone_code_id"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
            @forelse ($InternationalPhoneCodes as $type)
                <option value="{{ $type->id }}"
                    {{ @old('emergency_international_phone_code_id', $employee->emergency_international_phone_code_id) == $type->id ? 'selected' : '' }}>
                    {{ $type->country }} (+{{ $type->code }})</option>
            @empty
                <option value="">{{ __('No records available') }}</option>
            @endforelse
        </select>
    </div>
    <div>
        <label for="emergency_phone" class="block mb-2 font-bold dark:text-white">{{ __('Emergency Phone') }}
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

    {{-- ESTRATO SOCIECONOMICO --}}
    <div>
        <label for="socioeconomic_stratum"
            class="block mb-2 font-bold dark:text-white">{{ __('socioeconomic Stratum') }}
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

    <div class="col-span-2 flex justify-end">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">{{ __('Save') }}</button>
    </div>
</section>
