<?php

namespace App\Http\Controllers;

use App\Http\Requests\InternationalPhoneCodesRequest;
use App\Models\InternationalPhoneCodes;
use Illuminate\Http\Request;

class InternationalPhoneCodesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $InternationalPhoneCodes = InternationalPhoneCodes::orderBy('country', 'asc')->paginate(10);
        return view('international_phone_codes.index',compact('InternationalPhoneCodes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('international_phone_codes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InternationalPhoneCodesRequest $request)
    {
        InternationalPhoneCodes::create($request->all());
        return redirect()->route('international_phone_codes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(InternationalPhoneCodes $InternationalPhoneCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InternationalPhoneCodes $InternationalPhoneCode)
    {
        return view('international_phone_codes.edit',compact('InternationalPhoneCode'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InternationalPhoneCodesRequest $request, InternationalPhoneCodes $InternationalPhoneCode)
    {
        $InternationalPhoneCode->update($request->all());
        return redirect()->route('international_phone_codes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InternationalPhoneCodes $InternationalPhoneCode)
    {
        //
    }
}
