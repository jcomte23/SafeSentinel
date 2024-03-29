<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\BloodTypes;
use App\Models\CivilStatus;
use App\Models\Employee;
use App\Models\InternationalPhoneCodes;
use App\Models\Salary;
use App\Models\SchoolGrades;
use App\Models\TypesOfDocuments;
use App\Models\TypesOfGenres;
use App\Models\WorkSchedules;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::orderBy('state_id', 'asc')
        ->orderBy('identification_number', 'asc')
        ->paginate(10);
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $typesOfDocuments = TypesOfDocuments::all();
        $InternationalPhoneCodes = InternationalPhoneCodes::orderBy('country', 'asc')->get();
        $typesOfGenres = TypesOfGenres::all();
        $bloodTypes = BloodTypes::all();
        $civilStatus = CivilStatus::all();
        $schoolGrades = SchoolGrades::all();
        $salaries = Salary::all();
        $workSchedules = WorkSchedules::all();
        return view('employees.create', 
        compact('typesOfDocuments',
        'InternationalPhoneCodes', 
        'typesOfGenres',
        'bloodTypes',
        'civilStatus',
        'schoolGrades',
        'salaries',
        'workSchedules'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        Employee::create($request->all());
        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $typesOfDocuments = TypesOfDocuments::all();
        $InternationalPhoneCodes = InternationalPhoneCodes::orderBy('country', 'asc')->get();
        $typesOfGenres = TypesOfGenres::all();
        $bloodTypes = BloodTypes::all();
        $civilStatus = CivilStatus::all();
        $schoolGrades = SchoolGrades::all();
        $salaries = Salary::all();
        $workSchedules = WorkSchedules::all();
        return view('employees.edit', compact('employee','typesOfDocuments',
        'InternationalPhoneCodes', 
        'typesOfGenres',
        'bloodTypes',
        'civilStatus',
        'schoolGrades',
        'salaries',
        'workSchedules'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
    }
}
