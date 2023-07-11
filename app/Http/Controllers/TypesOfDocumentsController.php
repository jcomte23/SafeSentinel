<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypesOfDocumentsRequest;
use App\Models\TypesOfDocuments;
use Illuminate\Http\Request;

class TypesOfDocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typesOfDocuments=TypesOfDocuments::orderBy('abbreviation', 'asc')->paginate(10);
        return view('types_of_documents.index',compact('typesOfDocuments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('types_of_documents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TypesOfDocumentsRequest $request)
    {
        TypesOfDocuments::create($request->all());
        return redirect()->route('types_of_documents.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(TypesOfDocuments $typesOfDocument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypesOfDocuments $typesOfDocument)
    {
        return view('types_of_documents.edit',compact('typesOfDocument'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TypesOfDocumentsRequest $request, TypesOfDocuments $typesOfDocument)
    {
        $typesOfDocument->update($request->all());
        return redirect()->route('types_of_documents.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypesOfDocuments $typesOfDocument)
    {
        $typesOfDocument->delete();
        return redirect()->route('types_of_documents.index');
    }
}
