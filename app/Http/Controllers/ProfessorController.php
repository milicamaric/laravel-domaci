<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProfessorResource;
use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

class ProfessorController extends Controller
{
    public function list()
    {
        $professors = Professor::all();
        return view(('professors'), compact('professors'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professors = Professor::all();
        return ProfessorResource::collection($professors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $professor = new Professor($request->all());
        $saved = $professor->save();
        if ($saved) return new ProfessorResource($professor);
        else throw new UnprocessableEntityHttpException();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function show(Professor $professor)
    {
        return new ProfessorResource($professor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professor $professor)
    {
        $professor->update($request->all());
        return new ProfessorResource($professor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professor $professor)
    {
        $deleted = $professor->delete();
        if ($deleted) return new Response('', 204);
        else throw new UnprocessableEntityHttpException();
    }
}
