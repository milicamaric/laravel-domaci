<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

class CourseController extends Controller
{

    public function list()
    {
        // dohvati sve kurseve
        $courses = Course::all();
    

        // primer vracanja stranice sa podacima (kontraprimer u `/routes/web.php`)
        return view(('list'),compact('courses'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dohvati sve kurseve
        $courses = Course::all();

        // zapakuj u kolekciju (niz) za HTTP odgovor
        return CourseResource::collection($courses);
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // napravi novi kurs na osnovu svih polja iz HTTP zahteva
        $course = new Course($request->all());
        // snimi novi kurs
        $course->save();

        // dodaj profesora u many-to-many tabelu
        $course->professor()->sync($request->professor);
        // dodaj ucenike u many-to-many tabelu
        $course->students()->sync($request->students);

        // zapakuj u JSON HTTP odgovor
        return new CourseResource($course);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        // zapakuj u JSON HTTP odgovor
        return new CourseResource($course);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        // azuriraj kurs na osnovu svih polja iz HTTP zahteva
        $course->update($request->all());

        // izmeni profesora u many-to-many tabeli
        $course->professor()->sync($request->professor);
        // izmeni ucenike (niz) u many-to-many tabeli
        $course->students()->sync($request->students);

        // zapa u JSON HTTP odgovor
        return new CourseResource($course);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        // izbrisi kurs
        $deleted = $course->delete();
        // ako je uspesno izbrisan vrati HTTP prazan odgovor 204 (nema nista)
        if ($deleted) return new Response('', 204);
        // ako je neuspesno baci gresku
        else throw new UnprocessableEntityHttpException();
    }
}
