<?php

namespace App\Http\Controllers;

use App\Models\TypesOfDocuments;
use Illuminate\Http\Request;

class TypesOfDocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typesOfDocuments=TypesOfDocuments::all();
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
    public function store(Request $request)
    {
        TypesOfDocuments::create($request->all());
        return redirect()->route('types_of_documents.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(TypesOfDocuments $typesOfDocuments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypesOfDocuments $typesOfDocuments)
    {
        return view('types_of_documents.edit',compact('typesOfDocuments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TypesOfDocuments $typesOfDocuments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypesOfDocuments $typesOfDocuments)
    {
        //
    }
}
