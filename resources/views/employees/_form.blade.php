@csrf

<div>
    <label for="first_name" class="block mb-2 font-bold">First Name</label>
    <input type="text" id="first_name" name="first_name" value="{{  @old('first_name',$employee->first_name) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="last_name" class="block mb-2 font-bold">Last Name</label>
    <input type="text" id="last_name" name="last_name" value="{{ @old('last_name',$employee->last_name) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="identification_number" class="block mb-2 font-bold">Identification Number</label>
    <input type="number" id="identification_number" name="identification_number"
        value="{{ @old('identification_number',$employee->identification_number) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="email" class="block mb-2 font-bold">Email</label>
    <input type="email" id="email" name="email" value="{{ @old('identification_number',$employee->email) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="phone" class="block mb-2 font-bold">Phone</label>
    <input type="text" id="phone" name="phone" value="{{ @old('identification_number',$employee->phone) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="optional_phone" class="block mb-2 font-bold">Optional Phone</label>
    <input type="text" id="optional_phone" name="optional_phone" value="{{ @old('identification_number',$employee->optional_phone) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="date_of_birth" class="block mb-2 font-bold">Date Of Birth</label>
    <input type="date" id="date_of_birth" name="date_of_birth" value="{{ @old('identification_number',$employee->date_of_birth) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="family_composition" class="block mb-2 font-bold">family_composition</label>
    <input type="text" id="family_composition" name="family_composition" value="{{ @old('identification_number',$employee->family_composition) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="country" class="block mb-2 font-bold">country</label>
    <input type="text" id="country" name="country" value="{{ @old('identification_number',$employee->country) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="state" class="block mb-2 font-bold">state</label>
    <input type="text" id="state" name="state" value="{{ @old('identification_number',$employee->state) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="city" class="block mb-2 font-bold">city</label>
    <input type="text" id="city" name="city" value="{{ @old('identification_number',$employee->city) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="address" class="block mb-2 font-bold">address</label>
    <input type="text" id="address" name="address" value="{{ @old('identification_number',$employee->address) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="occupation" class="block mb-2 font-bold">occupation</label>
    <input type="text" id="occupation" name="occupation" value="{{ @old('identification_number',$employee->occupation) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="work_area" class="block mb-2 font-bold">work_area</label>
    <input type="text" id="work_area" name="work_area" value="{{ @old('identification_number',$employee->work_area) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="HdV" class="block mb-2 font-bold">HdV</label>
    <input type="text" id="HdV" name="HdV" value="{{ @old('identification_number',$employee->HdV) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="EPS" class="block mb-2 font-bold">EPS</label>
    <input type="text" id="EPS" name="EPS" value="{{ @old('identification_number',$employee->EPS) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="AFP" class="block mb-2 font-bold">AFP</label>
    <input type="text" id="AFP" name="AFP" value="{{ @old('identification_number',$employee->AFP) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="ARL" class="block mb-2 font-bold">ARL</label>
    <input type="text" id="ARL" name="ARL" value="{{ @old('identification_number',$employee->ARL) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="CCF" class="block mb-2 font-bold">CCF</label>
    <input type="text" id="CCF" name="CCF" value="{{ @old('identification_number',$employee->CCF) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="emergency_contact" class="block mb-2 font-bold">emergency_contact</label>
    <input type="text" id="emergency_contact" name="emergency_contact" value="{{ @old('identification_number',$employee->emergency_contact) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="emergency_phone" class="block mb-2 font-bold">emergency_phone</label>
    <input type="text" id="emergency_phone" name="emergency_phone" value="{{ @old('identification_number',$employee->emergency_phone) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div>
    <label for="socioeconomic_stratum" class="block mb-2 font-bold">socioeconomic_stratum</label>
    <input type="text" id="socioeconomic_stratum" name="socioeconomic_stratum" value="{{ @old('identification_number',$employee->socioeconomic_stratum) }}"
        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500">
</div>
<div class="col-span-2">
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
</div>
